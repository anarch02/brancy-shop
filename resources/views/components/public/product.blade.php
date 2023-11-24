<div class="col-6 col-lg-4 mb-4 mb-sm-9">
    <!--== Start Product Item ==-->
    <div class="product-item">
        <div class="product-thumb">
            <a class="d-block" href="{{ route('product', $code) }}">
                <img src="/storage/products/{{ $image }}" width="370" height="450" alt="Image-HasTech">
            </a>
            <span class="flag-new">new</span>
            <div class="product-action">
                <button type="button" class="product-action-btn action-btn-quick-view" data-product-code="{{ $code }}">
                    <i class="fa fa-expand"></i>
                </button>
                <button id="add_to_cart" data-product-id="{{ $id }}" class="product-action-btn action-btn-cart" >
                    <span>Add to cart</span>
                </button>
                <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                    <i class="fa fa-heart-o"></i>
                </button>
            </div>
        </div>
        <div class="product-info">
            <h4 class="title"><a href="{{ route('product', $code) }}">{{ $title }}</a></h4>
            <div class="prices">
                <span class="price">${{ $price }}</span>
            </div>
        </div>
        <div class="product-action-bottom">
            <button type="button" class="product-action-btn action-btn-quick-view" data-product-code="{{ $code }}">
                <i class="fa fa-expand"></i>
            </button>
            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                <i class="fa fa-heart-o"></i>
            </button>
            <x-public.cart.add></x-public.cart.add>
        </div>
    </div>
    <!--== End prPduct Item ==-->
</div>