import Swal from 'sweetalert2/dist/sweetalert2.js'

import 'sweetalert2/src/sweetalert2.scss'  
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
// import $ from 'jquery';
// window.$ = $;
  
    
    function openModalWithData(url, method, requestData) {
        $.ajax({
            url: url,
            type: method,
            data: requestData,
            success: function(response) {
                var inputsHTML = createFormElements(response.inputs);
                $('#modalBody').html(inputsHTML);
                $('#modal').modal('show');
                console.log(response.inputs);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    $(document).on('click', '#openModalButton', function() {
        var url = $(this).data('url');
        var method = $(this).data('method');
        var requestData = $(this).data('data');

        openModalWithData(url, method, requestData);
    });
    

    $('#modalForm').on('submit', function(e) {
        e.preventDefault();
        // Дополнительный код для обработки отправки формы из модального окна
        // Может использовать Ajax для отправки данных на сервер
    });

    function createFormElements(inputs) {
        console.log(inputs);
        var inputsHTML = '';
        inputs.forEach(function(input) {
            switch (input.type) {
                case 'textarea':
                    inputsHTML += createTextareaElement(input);
                    break;
                case 'select':
                    inputsHTML += createSelectElement(input);
                    break;
                default:
                    inputsHTML += createInputElement(input);
                    break;
            }
        });
        return inputsHTML;
    }

    function createTextareaElement(input) {
        return '<textarea ' + generateAttributes(input) + '></textarea><br>';
    }

    function createSelectElement(input) {
        var selectOptions = '';
        input.options.forEach(function(option) {
            selectOptions += '<option value="' + option.value + '" ' + (option.value == input.value ? 'selected' : '') + '>' + option.label + '</option>';
        });
        return '<select ' + generateAttributes(input) + '>' + selectOptions + '</select><br>';
    }

    function createInputElement(input) {
        return '<input ' + generateAttributes(input) + '><br>';
    }

    function generateAttributes(input) {
        var attributes = 'name="' + input.name + '" placeholder="' + input.placeholder + '" class="' + input.class + '" ';
        if (input.required) {
            attributes += 'required ';
        }
        if (input.value) {
            attributes += 'value="' + input.value + '" ';
        }
        // Другие возможные атрибуты...

        return attributes.trim();
    }
