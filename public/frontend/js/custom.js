$(document).ready(function () {
    $('.addToCartBtn').click(function (e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val()
        var product_qty = $(this).closest('.product_data').find('.qty-input').val()
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id':product_id,
                'product_qty':product_qty
            },
            success: function (response) {
                swal(response.status)
            }
        });

    });
});
$(document).ready(function () {
   $('.increment-btn').click(function (e) {
       e.preventDefault();
       var inc_val = $(this).closest('.product_data').find('.qty-input').val();
       var value = parseInt(inc_val,10);
       value = isNaN(value)? 0 : value;
       if (value<10) {
           value++;
           $(this).closest(`.product_data`).find('.qty-input').val(value);
       }
   });
   $('.decrement-btn').click(function (e) {
       e.preventDefault();
       var desc_val = $(this).closest('.product_data').find('.qty-input').val();
       var value = parseInt(desc_val,10);
       value = isNaN(value)? 0 : value;
       if (value>1) {
           value--;
           $(this).closest('.product_data').find('.qty-input').val(value);
       }
   });
});
$(document).ready(function () {
    $('.deleteItem').click(function (e) {
        e.preventDefault();
        var product_id = $(this).closest('.product-data').find('.prod_id').val()
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/delete-item",
            data: {
                'product_id':product_id,
            },
            success: function (response) {
                window.location.reload();
                swal(response.status)
            }
        });

    });
});
$('.changeQuantity').click(function (e) {
    e.preventDefault();
    var product_id = $(this).closest('.product_data').find('.prod_id').val()
    var product_qty = $(this).closest('.product_data').find('.qty-input').val()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var data = {
        'product_id':product_id,
        'prod_qty':product_qty
    }
    $.ajax({
        method: "POST",
        url: "/update-cart",
        data: data,
        success: function (response) {
            window.location.reload();
        }
    });

});
