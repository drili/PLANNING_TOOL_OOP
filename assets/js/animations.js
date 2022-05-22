$(document).ready(function() {
    (function() {
        $(".header-item-user").click(function() {
            if ($(this).find(".header-item-user-settings").hasClass("item-hidden")) {
                $(".header-item-user-settings").css("display", "block");
                $(".header-item-user-settings").css("top", "0");
                $(".header-item-user-settings").removeClass("item-hidden");
                $(".header-item-user-settings").addClass("item-shown");

                animateHeaderUserNav();
            } else {
                $(".header-item-user-settings").css("display", "none");
                $(".header-item-user-settings").css("opacity", "0");
                $(".header-item-user-settings").removeClass("item-shown");
                $(".header-item-user-settings").addClass("item-hidden");
            }
        })

        function animateHeaderUserNav() {
            $(".header-item-user .header-item-user-settings").animate({
                "opacity": 1,
                "top": "30px"
            }, 350, $.bez([0.65, 0, 0.35, 1]))
        }

        console.log("::: animations.js initiated");
    })();
})