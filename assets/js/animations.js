$(document).ready(function() {
    // --- Animate user navigation/menu handling
    (function() {
        function hideUserNav() {
            $(".header-item-user-settings").css("display", "none");
            $(".header-item-user-settings").css("opacity", "0");
            $(".header-item-user-settings").removeClass("item-shown");
            $(".header-item-user-settings").addClass("item-hidden");
            $(".header-item.header-item-user .header-dots-icon").removeClass("bi-x-square");
            $(".header-item.header-item-user .header-dots-icon").addClass("bi-three-dots-vertical");
        }

        $(".header-item-user").click(function(event) {
            if ($(this).find(".header-item-user-settings").hasClass("item-hidden")) {
                $(".header-item-user-settings").css("display", "block");
                $(".header-item-user-settings").css("top", "0");
                $(".header-item-user-settings").removeClass("item-hidden");
                $(".header-item-user-settings").addClass("item-shown");
                $(".header-item.header-item-user .header-dots-icon").removeClass("bi-three-dots-vertical");
                $(".header-item.header-item-user .header-dots-icon").addClass("bi-x-square");
                
                animateHeaderUserNav();
                event.stopPropagation();
            } else {
                hideUserNav();
                event.stopPropagation();
            }
        })

        function animateHeaderUserNav() {
            $(".header-item-user .header-item-user-settings").animate({
                "opacity": 1,
                "top": "30px"
            }, 350, $.bez([0.65, 0, 0.35, 1]))
        }

        $(document).click(function (event) {
            var $target = $(event.target);
            if (!$(".header-item-user").find(".header-item-user-settings").hasClass("item-hidden")) {
                hideUserNav();
            }
        });

        console.log("::: animations.js initiated");
    })();
})