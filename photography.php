<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolton Simpson - Back End and Front End</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">

</head>

<body>
    <section id="header">
        <div id="coloredBar"></div>
        <a href="selection.html"><img src="images/dotMenu.png" id="dotMenu" alt="Menu"></a>
        <h2 id="title">Photography</h2>
        <h2 id="goBack">Go Back</h2>
    </section>
    <div class="stage">

        <div id="SLDR-ONE" class="sldr">
            <ul class="wrp animate">
                <li class="elmnt-one">
                    <div class="skew">
                        <div class="wrap"><img src="http://via.placeholder.com/1000x600" width="1000" height="563"></div>
                    </div>
                </li>
                <li class="elmnt-two">
                    <div class="skew">
                        <div class="wrap"><img src="http://via.placeholder.com/1000x600" width="1000" height="563"></div>
                    </div>
                </li>
                <li class="elmnt-three">
                    <div class="skew">
                        <div class="wrap"><img src="http://via.placeholder.com/1000x600" width="1000" height="563"></div>
                    </div>
                </li>
                <li class="elmnt-four">
                    <div class="skew">
                        <div class="wrap"><img src="http://via.placeholder.com/1000x600" width="1000" height="563"></div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="clear"></div>

        <ul class="selectors">
            <li class="focalPoint"><a href="">•</a></li>
            <li><a href="">•</a></li>
            <li><a href="">•</a></li>
            <li><a href="">•</a></li>
        </ul>

        <button class="sldr-prv sldr-nav prev">Prev</button>
        <button class="sldr-nxt sldr-nav next">Next</button>

        <div class="captions">
            <div class="focalPoint">
                <h2>Not Decided Yet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div>
                <h2>Not Decided Yet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div>
                <h2>Not Decided Yet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div>
                <h2>Not Decided Yet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="clear"></div>

        <br>
        <br>
        <br>
        <br>
        <br>

    </div>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.sldr.js"></script>
    <script>
        $(window).load(function() {

            $('.sldr').each(function() {
                var th = $(this);
                th.sldr({
                    focalClass: 'focalPoint',
                    offset: th.width() / 2,
                    sldrWidth: 'responsive',
                    nextSlide: th.nextAll('.sldr-nav.next:first'),
                    previousSlide: th.nextAll('.sldr-nav.prev:first'),
                    selectors: th.nextAll('.selectors:first').find('li'),
                    toggle: th.nextAll('.captions:first').find('div'),
                    sldrInit: sliderInit,
                    sldrStart: slideStart,
                    sldrComplete: slideComplete,
                    sldrLoaded: sliderLoaded,
                    sldrAuto: true,
                    sldrTime: 10000,
                    hasChange: true
                });
            });

        });


        function sliderInit(args) {

        }


        function slideLoaded(args) {

        }


        function sliderLoaded(args) {

        }

        function slideStart(args) {

        }

        function slideComplete(args) {

        }
    </script>
    <script src="js/particles/particles.js"></script>
    <script src="js/particles/app.js"></script>
    <script src="js/main.js" defer="defer"></script>
    <script src="js/vendor/what-input.js"></script>

</body>
