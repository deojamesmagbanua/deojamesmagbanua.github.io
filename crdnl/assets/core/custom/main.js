$(window).on('load', function () { // makes sure the whole site is loaded 
    $(".spinner").css("opacity", "0");


    function myFunction(x) {
        if (x.matches) { // If media query matches
            setTimeout(() => {
                $("#loading").css("height", "0px");
                $('html, body').removeAttr('style')
            }, 1500);
        } else {
            setTimeout(() => {
                $("#loading").css("width", "0px");
                $('html, body').removeAttr('style')
            }, 1500);
        }
    }

    var x = window.matchMedia("(max-width: 768px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
    

    $("#menutoggle").click(function () {
        $(".sidepanel").toggleClass('showMenu');
    });

    $("#menutoggle").click(function () {
        $("#menutoggle").toggleClass('is-active');
    });
    
    $("#menutoggle-m").click(function () {
        $(".sidepanel").toggleClass('showMenu-m');
    });

    $("#menutoggle-m").click(function () {
        $("#menutoggle-m").toggleClass('is-active');
    });

    var sizeTheOverlays = function () {
        $(".overlay").resize().each(function () {
            var h = $(this).parent().outerHeight();
            var w = $(this).parent().outerWidth();
            $(this).css("height", h);
            $(this).css("width", w);
        });
    };

    sizeTheOverlays();


    var width = $(window).width();
    $(window).resize(function () {
        if ($(this).width() != width) {
            width = $(this).width();
            sizeTheOverlays();
        }
    });


})