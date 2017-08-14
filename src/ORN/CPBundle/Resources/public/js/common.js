$(document).ready(function () {

    $('.btn-confirm').click(function() {
        if(confirm('Bạn có chắc muốn tiếp tục?'))
            return true;
        return false;
    });

});

$navigation_toggle=jQuery(".toggle-navigation"),$navigation_toggle.on("click",function(){jQuery(".main-navigation").toggleClass("visible")});