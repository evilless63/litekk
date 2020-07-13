/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


// добавление тегов

$(document).ready(function () {

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

    $(document).ready(function () {
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

})

