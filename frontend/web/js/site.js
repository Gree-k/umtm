$(function () {
    $('.js-open-promote_material').on('click', function () {
        moveSubmenu('#promote_material', '#reports');
    });
    $('.js-open-reports').on('click', function () {
        moveSubmenu('#reports', '#promote_material');
    });

    function moveSubmenu(show, hide) {
        $(show).slideToggle('slow');
        var elem = $(hide);
        if (elem.is(':visible')) {
            elem.slideToggle('slow');
        }
    }

    $(document).on('click', function (e) {
        var buyer = $('#filter-buyer');
        if (buyer.is(':visible') && !$(e.target).closest(".js-filter-buyer").length) {
            buyer.hide();
        }
    });


    $('#next').on('click', function () {
        var q = $(this).attr('href');
        alert(q);

        $.ajax({
            url:  q,

            success: function(){
                alert('Load was performed.');
            }
        });

        return false;
    });
    $('.asd').on('click', function () {
        $('.table > tbody').append('<tr class="qwe"> </tr>').append('<td>qweqwewqe</td>')
    });

    $('.js-filter-buyer').on('click', function () {
        $('#filter-buyer').toggle();
    });

    $('.js-table > tbody tr').on('click', function() {
            alert($(this).data('id'));
    }
    )
});

