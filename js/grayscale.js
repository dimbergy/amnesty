String.prototype.isEmpty = function () {
    return (this.length === 0 || !this.trim());
};

function validateForm(form) {
    let valid = true,
        inputs = form.find(':input').filter('[required]:visible');


    inputs.each(function () {

        let input = $(this),
            value = input.val(),
            pattern = input.attr('pattern'),
            isValid = true;

        if (value.isEmpty()) {
            input.closest('.form-group').find('.help-block.with-errors').text(input.data('error'));
            isValid = valid = false;
        }

        else if (typeof pattern != "undefined") {

            pattern = new RegExp(pattern);
            if (!pattern.test(value)) {
                if (input.attr('type') == 'tel') {
                    input.closest('.form-group').find('.help-block.with-errors').text(input.data('valid'));
                }
                if (input.attr('type') == 'email') {
                    input.closest('.form-group').find('.help-block.with-errors').text(input.data('valid'));
                }

                isValid = valid = false;
            }
            else {
                input.closest('form-group').find('.help-block.with-errors').text('');
                isValid = true;
            }
        }

        if (isValid) {
            input.closest('.form-group').find('.help-block.with-errors').text('');
            input.removeClass('error-input');
        } else {
            input.addClass('error-input');
        }
    });

    return valid;
}

let form = $('#contact-form'),
    btn = form.find('.btn-send');

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $('body').on('click', btn, function () {

        let formData = form.serialize();

        if(validateForm(form)) {
            $.post('actions/contact', formData, function (response) {
                if (response) {
                    console.log(response);
                }
            }, "json");
        }

    });

});

//Google Map Skin - Get more at http://snazzymaps.com/
var myOptions = {
    zoom: 15,
    center: new google.maps.LatLng(53.385873, -1.471471),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    styles: [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 29
        }, {
            "weight": 0.2
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 18
        }]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 16
        }]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 21
        }]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
            "visibility": "on"
        }, {
            "color": "#000000"
        }, {
            "lightness": 16
        }]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{
            "saturation": 36
        }, {
            "color": "#000000"
        }, {
            "lightness": 40
        }]
    }, {
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 19
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#000000"
        }, {
            "lightness": 17
        }, {
            "weight": 1.2
        }]
    }]
};

var map = new google.maps.Map(document.getElementById('map'), myOptions);

