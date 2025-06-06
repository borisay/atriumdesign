window.addEventListener('load', () => {
    document.body.classList.remove('loading');
    // search on click
    const button = document.getElementById("search-icon");
    const modal = document.getElementById("modal-container");
    const closeModal = document.getElementById("close-container");
    button.addEventListener("click", function() {
        modal.classList.add("show");
    });
    closeModal.addEventListener("click", function() {
        modal.classList.remove("show");
    });
});

(function( $ ) {
    // NAVIGATION CALLBACK
    var ww = jQuery(window).width();
    jQuery(document).ready(function() { 
        jQuery(".main-nav li a").each(function() {
            if (jQuery(this).next().length > 0) {
                jQuery(this).addClass("parent");
            };
        })
        jQuery(".toggleMenu").click(function(e) { 
            e.preventDefault();
            jQuery(this).toggleClass("active");
            jQuery(".main-nav").slideToggle('fast');
        });
        adjustMenu();
    })
    
    // navigation orientation resize callback
    jQuery(window).bind('resize orientationchange', function() {
        ww = jQuery(window).width();
        adjustMenu();
    });
    
    var adjustMenu = function() {
        if (ww < 1000) {
            jQuery(".toggleMenu").css("display", "block");
            if (!jQuery(".toggleMenu").hasClass("active")) {
                jQuery(".main-nav").hide();
            } else {
                jQuery(".main-nav").show();
            }
            jQuery(".main-nav li").unbind('mouseenter mouseleave');
        } else {
            jQuery(".toggleMenu").css("display", "none");
            jQuery(".main-nav").show();
            jQuery(".main-nav li").removeClass("hover");
            jQuery(".main-nav li a").unbind('click');
            jQuery(".main-nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
                jQuery(this).toggleClass('hover');
            });
        }
    }

    })( jQuery );