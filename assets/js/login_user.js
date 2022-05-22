$(document).ready(function() {
    $(".btn-login-user").click(function(e) {
        e.preventDefault();

        $(".login-form").animate({
            "left": "100%"
        }, 350, $.bez([0.685, 0.595, 0.020, 0.720]))
        $(".grid-x-login .cell-video-element").animate({
            "opacity": "0%"
        }, 500, $.bez([0.685, 0.595, 0.020, 0.720]), function() {
            $('#form_post_login_user').submit();
        })
    })
})