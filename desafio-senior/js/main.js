! function(i) {
    skel.breakpoints({ xlarge: "(max-width: 1680px)", large: "(max-width: 1280px)", medium: "(max-width: 980px)", small: "(max-width: 736px)", xsmall: "(max-width: 480px)" }), i(function() {
        var a = i(window),
            e = i("body");
        i("#header");
        e.addClass("is-loading"), a.on("load", function() { window.setTimeout(function() { e.removeClass("is-loading") }, 100) }), skel.on("+medium -medium", function() { i.prioritize(".important\\28 medium\\29", skel.breakpoint("medium").active) }), i(".gallery").poptrox()
    })
}(jQuery);