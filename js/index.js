/**
 * Created by rakeshlahre830 on 2/6/15.
*/
'use strict';

$(function() {

    function createSlider($slider) {
        //settings for slider
        var width = 1360;
        var animationSpeed = 1000;
        var pause = 2000;
        var currentSlide = 1;

        //cache DOM elements
        var $slideContainer = $('.slides', $slider);
        var $slides = $('.slide', $slider);

        var interval;

        function startSlider() {
            interval = setInterval(function() {
                $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                    if (++currentSlide === $slides.length) {
                        currentSlide = 1;
                        $slideContainer.css('margin-left', 0);
                    }
                });
            }, pause);
        }
        function pauseSlider() {
            clearInterval(interval);
        }

        $slideContainer
            .on('mouseenter', pauseSlider)
            .on('mouseleave', startSlider);

        startSlider();
    }

    createSlider($('#slider'));


});
