jQuery("html").removeClass("no-js").addClass("js");
if (navigator.appVersion.indexOf("Mac") != -1) jQuery("html").addClass("osx");
jQuery(document).ready(function(e) {
    (function() {
        e("[rel=carousel]").carousel();
        e("[rel=tooltip]").tooltip();
        e("[rel=popover]").popover();
        e(".accordion").on("show", function(t) {
            e(t.target).prev(".accordion-heading").find(".accordion-toggle").addClass("active")
        });
        e(".accordion").on("hide", function(t) {
            e(this).find(".accordion-toggle").not(e(t.target)).removeClass("active")
        });
        e(window).load(function() {
            e("a[rel=external]").attr("target", "_blank")
        })
    })();
    (function() {
        e(".flickr-feed").each(function() {
            var t = e(this).data("flickr-id"),
                n = e(this).data("flickr-limit") ? e(this).data("flickr-limit") : 12,
                r = e(this).data("flickr-tags") ? e(this).data("flickr-tags") : "",
                i = e(this).data("flickr-tagmode") ? e(this).data("flickr-tagmode") : "any";
            e(this).jflickrfeed({
                limit: n,
                qstrings: {
                    id: t,
                    tags: r,
                    tagmode: i
                },
                itemTemplate: '<a href="{{link}}" rel="external"><img src="{{image_s}}" alt="{{title}}" /></a>'
            })
        })
    })();
    (function() {
        e(window).load(function() {
            e(".link").each(function() {
                var t = e(this);
                var n = t.find("img").height();
                var r = e("<span>").addClass("link-overlay").html(" ").css("top", n / 2).click(function() {
                    if (href = t.find("a:first").attr("href")) {
                        top.location.href = href
                    }
                });
                t.append(r)
            });
            e(".zoom").each(function() {
                var t = e(this);
                var n = t.find("img").height();
                var r = e("<span>").addClass("zoom-overlay").html(" ").css("top", n / 2);
                t.append(r)
            })
        })
    })();
    (function() {
        var t = e(".navbar .nav"),
            n = '<option value="" selected>Navigate...</option>';
        t.find("li").each(function() {
            var t = e(this),
                r = t.children("a"),
                i = t.parents("ul").length - 1,
                s = "";
            if (i) {
                while (i > 0) {
                    s += " - ";
                    i--
                }
            }
            if (r.text()) n += "<option " + (t.hasClass("active") ? 'selected="selected"' : "") + ' value="' + r.attr("href") + '">' + s + " " + r.text() + "</option>"
        }).end().after('<select class="nav-responsive">' + n + "</select>");
        e(".nav-responsive").on("change", function() {
            window.location = e(this).val()
        })
    })();
    (function() {
        e(window).load(function() {
            function n(n) {
                t.isotope({
                    filter: n
                });
                e("#portfolio-filter li.active").removeClass("active");
                e("#portfolio-filter").find("[data-filter='" + n + "']").parent().addClass("active");
                if (n != "*") window.location.hash = n.replace(".", "");
                if (n == "*") window.location.hash = ""
            }
            var t = e("#portfolio-items");
            if (t.length) {
                e(".project").each(function() {
                    $this = e(this);
                    var t = $this.data("tags");
                    if (t) {
                        var n = t.split(",");
                        for (var r = n.length - 1; r >= 0; r--) {
                            $this.addClass(n[r])
                        }
                    }
                });
                t.isotope({
                    itemSelector: ".project",
                    layoutMode: "fitRows"
                });
                e("#portfolio-filter li a").click(function() {
                    var t = e(this).attr("data-filter");
                    n(t);
                    return false
                });
                if (window.location.hash != "") {
                    n("." + window.location.hash.replace("#", ""))
                }
            }
        })
    })();
    (function() {
        e('<i id="back-to-top"></i>').appendTo(e("body"));
        e(window).scroll(function() {
            if (e(this).scrollTop() > e(window).height() / 5) {
                e("#back-to-top:not(.shown)").addClass("shown")
            } else {
                e("#back-to-top").removeClass("shown")
            }
        });
        e("#back-to-top").click(function() {
            e("body,html").animate({
                scrollTop: 0
            }, 600)
        })
    })();
    (function() {
        e("#contact-form-submit").data("original-text", e("#contact-form-submit").html());
        e("#contact-form-submit").click(function(t) {
            var n = e("#contact-form").serialize();
            e("#contact-form-submit").addClass("disabled").html("Sending ...");
            setTimeout(function() {
                e("#contact-form-response").hide().attr("class", "alert");
                e.post("php/contact-form.php", n, function(t) {
                    e("#contact-form-submit").removeClass("disabled").html(e("#contact-form-submit").data("original-text"));
                    if (t.status == 1) {
                        message = '<i class="icon-ok"></i> <b>Thank You!</b> <br />Thanks for leaving your message. We will get back to you soon.';
                        e("#contact-form-response").addClass("alert-success")
                    } else {
                        message = "" + t.errors;
                        e("#contact-form-response").addClass("alert-warning")
                    }
                    e("#contact-form-response").show().html(message)
                }, "json")
            }, 300)
        })
    })();
    (function() {
        e("#newsletter-form").submit(function(t) {
            var n = e("#newsletter-form").serialize();
            e("#newsletter-form").hide();
            e(".newsletter .ajax-loader").show();
            setTimeout(function() {
                e.post("php/newsletter-form.php", n, function(t) {
                    e(".newsletter .ajax-loader").hide();
                    if (t.status == 1) {
                        e("#newsletter-form").html("&#10004; Thanks, you have been subscribed!");
                        e("#newsletter-form").show()
                    } else {
                        e("#newsletter-form").show();
                        alert(t.errors)
                    }
                }, "json")
            }, 600);
            t.preventDefault()
        })
    })();
    (function() {
        function n(t, n) {
            var r = e(t.currentTarget);
            if (n === "left") r.find(".carousel-control.right").trigger("click");
            if (n === "right") r.find(".carousel-control.left").trigger("click")
        }
        var t = !!("ontouchstart" in window);
        if (t === true) {
            e("#carousel").swipe({
                allowPageScroll: "auto",
                swipeLeft: n,
                swipeRight: n
            })
        }
    })();
    (function() {
        e("a[rel=shortcut]").each(function() {
            var t = e(this);
            var n = t.data("key");
            var r = t.attr("href");
            if (n && r) {
                e(document).bind("keydown", n, function() {
                    top.location.href = r
                })
            }
        })
    })()
})