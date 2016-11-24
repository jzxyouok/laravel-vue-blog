jQuery("html").removeClass("no-js").addClass("js");
if (navigator.appVersion.indexOf("Mac") != -1) jQuery("html").addClass("osx");
jQuery(document).ready(function(e) {
    (function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })();
    (function() {
        e("[rel=tooltip]").tooltip();
        e("[rel=popover]").popover();
        e(window).load(function() {
            e("a[rel=external]").attr("target", "_blank")
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
                e.post("/subscribe/create", n, function(t) {
                    e(".newsletter .ajax-loader").hide();
                    if (t.ok == true) {
                        e("#newsletter-form").html("&#10004; " + t.message);
                        e("#newsletter-form").show()
                    } else {
                        e("#newsletter-form").html("&#10004; " + t.message);
                        e("#newsletter-form").show();
                        console.log(t.errors);
                    }
                }, "json")
            }, 600);
            t.preventDefault()
        })
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