// добавление тегов

$(document).ready(function () {




    if ($('.tag-remove').length > 0) {

        $('.tag-remove').on('click', function (event) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            if (window.confirm("Вы уверены? Тег будет автоматически удален для всех статей!")) {
                $.ajax({
                    type: 'DELETE',
                    url: "/admin/tagArticle/" + $(this).parent().attr('tag-id'),
                    data: { id: $(this).parent().attr('tag-id') },
                    success: function (data) {

                    }
                })
                $(this).parent().remove()
            }
        })

        $('.tag-label').on('click', function (event) {
            let currentTag = event.currentTarget.innerText;
            let tagValue = `${$('#tags').val()}, ${currentTag}`
            $('#tags').val(tagValue)
        })
    }

    if ($('#sendDirectorEmail').length > 0) {
        $('#sendDirectorEmail').on('click', function (event) {

            $.ajax({
                method: 'post',
                url: "/emails",
                data: {
                    'name': $('#DirectorEmailName').val(),
                    'email': $('#DirectorEmailEmail').val(),
                    'filepath': $('#DirectorEmailFile').val(),
                    'message': $('#DirectorEmailText').val(),
                    'direction': 2
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: "application/json",
                success: function (data) {
                    alert("письмо успешно отправлено")
                    console.log(data)
                }
            })

        })
    }

    if ($('#feedbakContactsSend').length > 0) {
        $('#feedbakContactsSend').on('click', function (event) {

            $.ajax({
                method: 'post',
                url: "/emails",
                data: {
                    'name': $('#feedbakContactsName').val(),
                    'email': $('#feedbakContactsEmail').val(),
                    'filepath': $('#feedbakContactsFile').val(),
                    'message': $('#feedbakContactsText').val(),
                    'product': $('.product__header').text(),
                    'direction': 4
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: "application/json",
                success: function (data) {
                    alert("письмо успешно отправлено")
                    console.log(data)
                }
            })

        })
    }

    if ($('#callbackAction').length > 0) {
        $('#callbackAction').on('click', function (event) {

            $.ajax({
                method: 'post',
                url: "/emails",
                data: {
                    'phone': $('#callbackNumber').val(),
                    'direction': 1
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: "application/json",
                success: function (data) {
                    alert("письмо успешно отправлено")
                    console.log(data)
                }
            })

        })
    }


    if ($('#feedbackFooterSend').length > 0) {
        $('#feedbackFooterSend').on('click', function (event) {

            $.ajax({
                method: 'post',
                url: "/emails",
                data: {
                    'name': $('#feedbackFooterName').val(),
                    'email': $('#feedbackFooterEmail').val(),
                    'message': $('#feedbackFooterText').val(),
                    'policy': $('#feedbackFooterConcentPolicy').val(),
                    'direction': 3
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: "application/json",
                success: function (data) {
                    alert("письмо успешно отправлено")
                    console.log(data)
                }
            })

        })
    }

    if (document.getElementById('callbackNumber').length == 0
        && document.getElementById('feedbackFooterNumber').length == 0) { }
    else {
        const imaskEl = document.getElementById('callbackNumber')
        const imaskEl2 = document.getElementById('feedbackFooterNumber')
        const regMask = '+{7} (000) 000-00-00'
        const imaskOptions = {
            mask: regMask
        }
        mask = IMask(imaskEl, imaskOptions)
        mask2 = IMask(imaskEl2, imaskOptions)

    }


    if (document.getElementsByClassName("about-slider__item").length > 0) {
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("about-slider__item");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 4000); // Change image every 2 seconds
        }
    }

    if (document.getElementsByClassName("main-slider").length > 0) {
        var sliderCarouselIndex = 0;
        sliderCarousel();

        function sliderCarousel() {
            var i;
            var x = document.getElementsByClassName("slider-block");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            sliderCarouselIndex++;
            if (sliderCarouselIndex > x.length) { sliderCarouselIndex = 1 }
            x[sliderCarouselIndex - 1].style.display = "block";
            setTimeout(sliderCarousel, 10000); // Change image every 2 seconds
        }
    }


    const owlCatalog = $('.collapse-catalog-inner')
    const owlProducts = $('.products-catalog')
    const owlNews = $('.newsCarousel')
    if (owlCatalog.length) {

        owlCatalog.owlCarousel({
            onInitialized: hideOldControls,
            loop: true,
            stagePadding: 50,
            margin: 39,
            responsiveClass: true,
            dots: false,
            nav: false,
            navigation: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })

        function hideOldControls(event) {
            owlControls = $('.collapse-catalog-inner').children('div.owl-nav')
            owlControls.hide()
        }

        $('.customNextBtn').click(function () {
            owlCatalog.trigger('next.owl.carousel')
        })
        // Go to the previous item
        $('.customPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlCatalog.trigger('prev.owl.carousel', [300])
        })
    }

    if (owlProducts.length) {
        owlProducts.owlCarousel({
            onInitialized: hideOldControlsProduct,
            loop: true,
            stagePadding: 50,
            margin: 39,
            responsiveClass: true,
            dots: false,
            nav: false,
            navigation: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })

        function hideOldControlsProduct(event) {
            owlControlsProduct = $('.products-catalog').children('div.owl-nav')
            owlControlsProduct.hide()
        }

        $('.customNextBtnProduct').click(function () {
            owlProducts.trigger('next.owl.carousel')
        })
        // Go to the previous item
        $('.customPrevBtnProduct').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlProducts.trigger('prev.owl.carousel', [300])
        })
    }

    if($('#catalogParallax').length > 0) {
        $('#catalogParallax').parallax({imageSrc: 'images/template/vegetables.jpg'})
    }
    

})

ymaps.ready(init);

function init() {

    //Центрирование и выбор масштаба карты
    var myMap = new ymaps.Map('map', {
        center: [48.800989, 44.769124],
        zoom: 18
    });

    // Создание своей метки 
    var myPlacemark = new ymaps.Placemark(
        // Координаты метки
        [48.800989, 44.769124], {
    }, {
        iconImageHref: 'images/template/icon.png', // картинка иконки
        iconImageSize: [50, 63],
        iconImageOffset: [-70, -40] // смещение картинки
    });

    // Добавление метки на карту
    myMap.geoObjects.add(myPlacemark);

    //Элементы управления    

}