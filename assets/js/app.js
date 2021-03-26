
$('button').on('click', function(){
  $('body').toggleClass('open');
});

function isScrolledIntoView(viewTop, elem) {
    var docViewBottom = viewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    return ((elemBottom <= docViewBottom) && (elemTop >= viewTop));
}

function validateString(string, type) {
  var re = {
    'email' : /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
    'string' : /^[a-zA-Z\-_\.\,éáíóúÁÉÍÓÚñÑüÜ!\?¿¡:; ]+$/
  }
  return re[type].test(string);
}

$(window).scroll(function(){
    var viewTop = $(window).scrollTop();

    if(viewTop >= 100){
        $("._1na_brand-bar").addClass("sticked");
    }
    else{
        $("._1na_brand-bar").removeClass("sticked");
    }

    $(".img-box").each(function(){
        if(isScrolledIntoView(viewTop, $(this))){
            $(this).addClass("shown");
        }
    });
});

$(document).ready(function(){
    var movementRate = 6;

    $("._1na-parallax-box").mousemove(function(e) {

        var x = (e.clientX/$(window).width())-0.5;
        var y = (e.clientY/$(window).height())-0.5;

        $(this).find('.parallax-item').each(function(i, el) {
            var index = i+1;
            $(el).css('left', parseInt(x*movementRate*index) + 'px');
            $(el).css('top', parseInt(y*movementRate*index) + 'px');

            TweenLite.to($(this), 0.6, {
                rotationY:5*x,
                rotationX:5*y,
                ease:Power1.easeOut,
                transformPerspective:500,
                transformOrigin:"center"
            });
        });
    });

    $("._1na-parallax-box").mouseleave(function(e) {
        $(this).find('.parallax-item').each(function(i, el) {

            TweenLite.to($(this), 0.5, {
                top:0,
                left:0,
                rotationY:0,
                rotationX:0,
                ease:Power1.easeOut,
                transformPerspective:500,
                transformOrigin:"center"
            });
        });
    });

    $("._1na_contact-slider-link h2").click(function(){
        $("._1na_contact_slider_mask").fadeIn();
    });

    $(".close-contact-slider").click(function(){
        $("._1na_contact_slider_mask").fadeOut();
    })


    $("._1na_contact_slider_mask .next-controller").click(function(){
        var activeSlide = $("._1na_contact-slide.active");
        var isValid = true;
        var errorMessage = '';
        var currentController = $(this);

        activeSlide.find("input").each(function(i,element){
            if($(this).data('format')){
                if(!validateString($(this).val(), $(this).data('format'))){
                    isValid = false;
                }
            }
        });

        activeSlide.find("textarea").each(function(i,element){
            if($(this).data('format')){
                if(!validateString($(this).val(), $(this).data('format'))){
                    isValid = false;
                }
            }
        });

        if(isValid){
            activeSlide.find(".error-message").html('')
            var activeIndex = parseInt(activeSlide.data("index")) + 1;
            activeSlide.fadeTo( 'fast', 0, function() {
                activeSlide.addClass("shown");
                activeSlide.removeClass("active");
                $("._1na_contact-slide.slide" + activeIndex).fadeTo('fast', 1, function () {
                    $("._1na_contact-slide.slide" + activeIndex).addClass("active")
                });
            });

            if(currentController.hasClass('last-controller')){
                $.ajax({
                    type: "POST",
                    url: configData.ajaxMailURL, 
                    data: $("#slide-contact").serialize(),
                    success: function(data){
                        $('.error-message').fadeOut(1000,function(){
                            $('.success-message').fadeIn(500,function(){
                                setTimeout(function(){ $(".close-contact-slider").click(); }, 500);
                            });
                        })
                        $("#slide-contact input[text]").val("");
                        $("#slide-contact input[email]").val("");
                        $("#slide-contact textarea").val("");
                    },
                    error: function(data)  {  
                        alert("Error!");
                    } 
                });
            }
        }
        else{
            activeSlide.find(".error-message").html('Por favor verifique los datos ingresados');
        }
    })

$("._1na_cf-submit").click(function(){
        var contactForm = $("._1na_contact-page-form");
        var isValid = true;
        var errorMessage = '';
        var currentController = $(this);

        contactForm.find("input").each(function(i,element){
            if($(this).data('format')){
                if(!validateString($(this).val(), $(this).data('format'))){
                    isValid = false;
                }
            }
        });

        contactForm.find("textarea").each(function(i,element){
            if($(this).data('format')){
                if(!validateString($(this).val(), $(this).data('format'))){
                    isValid = false;
                }
            }
        });

        if(isValid){
            contactForm.find(".error-message").html('')            
                $.ajax({
                    type: "POST",
                    url: configData.ajaxMailURLContactPage, 
                    data: $("#form-contactPage").serialize(),
                    success: function(data){
                        if(data.trim() == 'success'){
                            $('.error-message').fadeOut(1000,function(){
                                $('.success-message').fadeIn(500,function(){
                                    setTimeout(function(){ $(".close-contact-slider").click(); }, 500);
                                });
                            })
                            $("#form-contactPage input[text]").val("");
                            $("#form-contactPage input[email]").val("");
                            $("#form-contactPage textarea").val("");
                        }
                        else{
                            $('.error-message').html('Tuvimos un error al enviar su información. Por favor intente más tarde.');
                        }
                    },
                    error: function(data)  {  
                        console.log("Error!");
                    } 
                });            
        }
        else{
            contactForm.find(".error-message").html('Por favor verifique los datos ingresados');
            return false;
        }

    })

});
