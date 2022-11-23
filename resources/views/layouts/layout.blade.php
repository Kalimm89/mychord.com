<!DOCTYPE HTML>
<html>

<head>
    <title>Free Musico Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/public/assets/user/css/style.css" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="/public/assets/user/js/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!--slider-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/public/assets/user/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="/public/assets/user/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
</head>

<body>
    @include('layouts.header')
    
    <div class="header-bottom ">
        <div class="wrap">
            <nav id="menu-wrap" style="padding: 13px 0 0px 0;">
                <div class="row">
                    <div class="col">
                        <div class="d-flex">
                        <div class="mx-auto">
                <ul id="menu">
                    <li><a href="index.html">Домой</a></li>
                    <li>
                        <a href="about.html">Каталог</a>
                        <ul>
                            <li><a href="about.html">Группы</a></li>
                            <li><a href="about.html">Песни</a></li>
                            <li><a href="about.html">Жанры</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('login.create') }}">Авторизация</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
            </div>
            </nav>
        </div>
    </div>

    @yield('content')
    <hr>

<div class="footer">
       
    
 <div class="copy-right">
        <div class="wrap">
            <p>&copy; 2013 Musico. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
    <div class="clear"> </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>

</html>