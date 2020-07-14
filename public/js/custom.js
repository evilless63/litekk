// добавление тегов

$(document).ready(function () {

    if ($('.tag-remove').length > 0) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $('.tag-remove').on('click', function (event) {

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


    if (document.getElementById('callback-number').length == 0
        && document.getElementById('feedback-number').length == 0) { }
    else {
        const imaskEl = document.getElementById('callback-number')
        const imaskEl2 = document.getElementById('feedback-number')
        const regMask = '+{7} (000) 000-00-00'
        const imaskOptions = {
            mask: regMask
        }
        mask = IMask(imaskEl, imaskOptions)
        mask2 = IMask(imaskEl2, imaskOptions)

        const callbackAction = document.getElementById('callback-action')
        if (callbackAction !== undefined) {
            callbackAction.addEventListener('click', function () {
                console.log(imaskEl.value)
            })
        }
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