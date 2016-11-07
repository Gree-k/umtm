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
});

