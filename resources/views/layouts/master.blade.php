<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http - equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>@yield('title')</title>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/home.css">

    <script src="jq/JQuery.min.js"></script>
    <script src="jq/visibility.js"></script>
    <script src="jq/sidebar.js"></script>
    <script src="jq/transition.js"></script>
    <script>
        $(document)
                .ready(function () {

                    // fix menu when passed
                    $('.firstImage')
                            .visibility({
                                once: false,
                                onBottomPassed: function () {
                                    $('.fixed.menu').transition('fade in');
                                },
                                onBottomPassedReverse: function () {
                                    $('.fixed.menu').transition('fade out');
                                }
                            });
                    // create sidebar and attach to menu open
                    $('.ui.sidebar')
                            .sidebar('attach events', '.toc.item');
                });
    </script>
</head>
<body>

<!--Follow menu-->
<div class="ui large top fixed hidden inverted menu">
    <a class="imgLogo" href="./"><img class="ui medium image" src="./img/SR_Logo2_transparant_wit.png"> </a>
    <a class="active item" href="./"> Home</a>
    <a class="item" href="./wat"> Wat ?</a>
    <a class="item" href="./stuvers"> Stuvers</a>
    <a class="item" href="./raden"> Raden</a>
    <a class="item" href="./dossiers"> Dossiers</a>
    <a class="item" href="./galerij"> Galerij</a>
    <a class="item" href="./verkiezing"> Verkiezing</a>
    <a class="item" href="./contact"> Contact</a>
    <div class="right menu">
        <div class="item">
            <a class="ui inverted button" href="./login"> Log in </a>
        </div>
    </div>
</div>

<!--Side bar menu-->
<div class="ui vertical inverted sidebar menu">
    <!-- <a class="imgLogo" href = "./" ><img class="ui medium image" src = "./img/SR_Logo2_transparant_wit.png" > </a > -->
    <a class="active item" href="./"> Home</a>
    <a class="item" href="./wat"> Wat ?</a>
    <a class="item" href="./stuvers"> Stuvers</a>
    <a class="item" href="./raden"> Raden</a>
    <a class="item" href="./dossiers"> Dossiers</a>
    <a class="item" href="./galerij"> Galerij</a>
    <a class="item" href="./verkiezing"> Verkiezing</a>
    <a class="item" href="./contact"> Contact</a>
    <div class="right menu">
        <div class="item">
            <a class="ui inverted button" href="./login"> Log in </a>
        </div>
    </div>
</div>
<div class="pusher">
    <!--Standard menu-->
    <div>
        <div class="ui inverted center aligned segment">
            <div>
                <div class="ui large secondary inverted pointing menu">
                    <a class="imgLogo" href="./"><img class="ui medium image" src="./img/SR_Logo2_transparant_wit.png"></a>
                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <a class="active item" href="./"> Home</a>
                    <a class="item" href="./wat"> Wat ?</a>
                    <a class="item" href="./stuvers"> Stuvers</a>
                    <a class="item" href="./raden"> Raden</a>
                    <a class="item" href="./dossiers"> Dossiers</a>
                    <a class="item" href="./galerij"> Galerij</a>
                    <a class="item" href="./verkiezing"> Verkiezing</a>
                    <a class="item" href="./contact"> Contact</a>
                    <div class="right menu">
                        <div class="item">
                            <a class="ui inverted button" href="./login"> Log in </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.firstImg')
    <div>
        <div class="ui two column grid mainGrid">
            @yield('frontend.events')
            @yield('frontend.topics')
        </div>
    </div>
    @yield('frontend.stuverVdb')
</div>
</body>
</html>