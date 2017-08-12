$(document).ready(function () {

    $('.btn-confirm').click(function() {
        if(confirm('Bạn có chắc muốn tiếp tục?'))
            return true;
        return false;
    });

});