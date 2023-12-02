import Swal from 'sweetalert2/dist/sweetalert2.js'

import 'sweetalert2/src/sweetalert2.scss'


$(document).on('click', '#open_cart', function(event) {
    event.preventDefault();

    // Отправляем AJAX запрос для получения данных о корзине
    $.ajax({
        type: 'GET',
        url: '/cart/index', // Замените на ваш реальный путь к эндпоинту корзины
        dataType: 'json',
        success: function(response) {
            // Очищаем список продуктов в корзине перед обновлением
            $('.aside-cart-product-list').empty();

            // Обновляем содержимое корзины с полученными данными
            response.products.forEach(function(product) {
                var listItem = '<li class="aside-product-list-item">' +
                    '<a id="remove-product" data-product-id="' + product.id + '"class="remove">×</a>' +
                    '<a href="product-details.html">' +
                    '<img src="/storage/products/' + product.image + '" width="68" height="84" alt="Image">' +
                    '<span class="product-title">' + product.name + '</span>' +
                    '</a>' +
                    '<span class="product-price">' + product.quantity + ' × $' + product.price + '</span>' +
                    '</li>';

                $('.aside-cart-product-list').append(listItem);
            });

            // Обновляем общую сумму корзины
            $('.cart-total .amount').text('$' + response.total);
        },
        error: function(xhr, status, error) {
            window.location.href = '/login';
            console.log('Error: ' + status);
        }
    });
});


$(document).on('click', '#add_to_cart', function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение кнопки
    var productId = $(this).data('product-id');

    // Выполняем AJAX запрос типа GET для добавления в корзину
    $.ajax({
        type: 'GET',
        url: '/cart/add/' + productId,
        dataType: 'json',
        success: function(response) {
            console.log(response.success);
            if (response.success) {
                updateCart(); 
                Swal.fire('Added to cart successfully!')
            } else {
                alert('Error adding product to cart!');
            }
        },
        error: function(xhr, status, error) {
            alert('Error: ' + status);
        }
    });
});


function updateCart() {
    $.ajax({
        type: 'GET',
        url: '/cart',
        dataType: 'json',
        success: function(response) {
            $('.aside-cart-product-list').empty();

            if (response && response.products && Array.isArray(response.products)) {
                response.products.forEach(function(product) {
                    var listItem = '<li class="aside-product-list-item">' +
                        '<a id="remove-product" data-product-id="' + product.id + '"class="remove">×</a>' +
                        '<a href="product-details.html">' +
                        '<img src="/storage/products/' + product.image + '" width="68" height="84" alt="Image">' +
                        '<span class="product-title">' + product.name + '</span>' +
                        '</a>' +
                        '<span class="product-price">' + product.quantity + ' × $' + product.price + '</span>' +
                        '</li>';

                    $('.aside-cart-product-list').append(listItem);
                });

                $('.cart-total .amount').text('$' + response.total);
            } else {
                // Handle case where products are not present in the response
                // or the structure is different than expected
                console.log('Products not found in the response or response structure is incorrect.');
            }
        },
        error: function(xhr, status, error) {
            alert('Error: ' + status);
        }
    });
}


$(document).on('click', '#remove-product', function(event) {
    event.preventDefault();
    
    var productId = $(this).data('product-id');

    // Выполняем AJAX запрос для удаления продукта из корзины
    $.ajax({
        type: 'GET',
        url: '/cart/delete/' + productId,
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                // alert('Product removed from cart!');
                updateCart(); // Обновляем корзину после удаления продукта
            } else {
                alert('Error removing product from cart: ' + response.message);
            }
        },
        error: function(xhr, status, error) {
            alert('Error: ' + status);
        }
    });
});

// View product Modal

var viewModal = $('#action-QuickViewModal');

$(document).on('click', '.action-btn-quick-view', function(event) {
    event.preventDefault();

    var productCode = $(this).data('product-code');

    $.ajax({
        type: 'GET',
        url: '/get_product/' + productCode,
        dataType: 'json',
        success: function(response) {
            console.log(response);
            $('.modal-body').empty();
            if (response) {
                var product = response;
                var productInfo = '<div class="container">' +
                    '<div class="row">' +
                    '<div class="col-lg-6">' +
                    '<div class="product-single-thumb">' +
                    '<img src="/storage/products/' + product.image + '" width="544" height="560" alt="Product Image">' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-lg-6">' +
                    '<div class="product-details-content">' +
                    '<h3 class="product-details-title">' + product.name + '</h3>' +
                    '<p>' + product.description + '</p>' +
                    '<h4 class="price"> $' + product.price + '</h4>' +
                    '<button type="button" class="btn" data-product-id="'+ product.id +'">Add to cart</button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

                viewModal.find('.modal-body').html(productInfo);
                viewModal.modal('show');
            } else {
                alert('Error loading product details: ' + response.message);
            }
        },
        error: function(xhr, status, error) {
            alert('Error: ' + status);
        }
    });
});

  // Product Quantity JS
  var proQty = $(".pro-qty");
  proQty.append('<div class= "dec qty-btn">-</div>');
  proQty.append('<div class="inc qty-btn">+</div>');
  $('.qty-btn').on('click', function (e) {
    e.preventDefault();
    
    var $button = $(this);
    var $input = $button.siblings('input');
    var oldValue = parseFloat($input.val());
    var productId = $input.data('product-id'); // Получаем идентификатор продукта

    console.log(productId);
    
    if ($button.hasClass('inc')) {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    updateQuantity(newVal, productId);

    $button.parent().find('input').val(newVal);
  });

  function updateQuantity(quantity, productId) {
    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        type: 'POST',
        url: '/cart/update',
        data: {
            quantity: quantity,
            id: productId,
            _token: token
        },
        dataType: 'json',
        success: function (response) {
            var $quantityInput = $('[data-product-id="' + productId + '"]');
            $quantityInput.val(quantity);

            var $productSubtotal = $quantityInput.closest('tr').find('.product-subtotal .price');
            $productSubtotal.text('$' + (response.price * quantity));
            var $cartTotal = $('.cart-total .amount');
            var totalAmount = 0;

            // Получение суммы всех товаров в корзине
            $('.product-subtotal .price').each(function() {
                totalAmount += parseFloat($(this).text().replace('$', ''));
            });

            $cartTotal.text('$' + totalAmount);
        },
        error: function(xhr, status, error) {
            // Обработка ошибок запроса, если необходимо
            console.log("Error: " + status);
        }
    });
}


// Assuming you're using jQuery for simplicity
$(document).ready(function() {
    $('#SearchInput').on('input', function() {
        var query = $(this).val();
        console.log(query);

        $.ajax({
            url: '/search',
            method: 'GET',
            data: { query: query },
            success: function(response) {

                $('#search-result-container').empty();

                console.log(response.products);
                // Check if there are results
                if (response.products) {
                    // Create a new unordered list
                    var resultList = $('<ul>');

                    // Append each result as a list item
                    $.each(response.products, function(index, product) {
                        resultList.append('<li>' + product.name + '</li>');
                    });

                    // Append the list to the container
                    $('#search-results-container').append(resultList);
                } else {
                    // Display a message if there are no results
                    $('#search-results-container').html('<p>No results found.</p>');
                }
            }
        });
    });
});
