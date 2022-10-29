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
    <div class="header">
        {{-- <div class="header-top">
		<div class="wrap">
			<div class="left-sidebar">
				 <ul>
					<li class="first_item">
					<h2><i class="icon-phone"><img src="/public/assets/user/images/contact.png" alt=""/></i>(800) 000-2587</h2><span>Hours:11am-7pm
					</span><div class="clear"></div>
					</li>
			    </ul>
			</div>
			<div class="header_top_right">
				<ul id="header_links">
					<li id="header_link_contact"><a class="header_links_contact" href="#" title="contact">contact</a></li>
					<li id="header_link_sitemap"><a class="header_links_sitemap" href="#" title="sitemap">sitemap</a></li>
				</ul>
				<dl id="sample" class="dropdown">
			        <dt><a href="#"><span>Please Select the Country</span></a></dt>
			        <dd>
			            <ul>
			                <li><a href="#">Australia<img class="flag" src="/public/assets/user/images/as.png" alt="" /><span class="value">AS</span></a></li>
			                <li><a href="#">Sri Lanka<img class="flag" src="/public/assets/user/images/srl.png" alt="" /><span class="value">SL</span></a></li>
			                <li><a href="#">New Zealand<img class="flag" src="/public/assets/user/images/nz.png" alt="" /><span class="value">NZ</span></a></li>
			                <li><a href="#">Pakistan<img class="flag" src="/public/assets/user/images/pk.png" alt="" /><span class="value">Pk</span></a></li>
			                <li><a href="#">Japan<img class="flag" src="/public/assets/user/images/jp.png" alt="" /><span class="value">JP</span></a></li>
			              	<li><a href="#">United Kingdom<img class="flag" src="/public/assets/user/images/uk.png" alt="" /><span class="value">UK</span></a></li>
			                <li><a href="#">United States<img class="flag" src="/public/assets/user/images/us.png" alt="" /><span class="value">US</span></a></li>
			            </ul>
			        </dd>
   				 </dl>
 				 <div class="dropdown" id="dropdown">
					<input type="checkbox" id="drop1" />
        			<label for="drop1" class="dropdown_button">$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="arrow"></span></label>
        				<ul class="dropdown_content">
	       					<ul>
								<li><a href="#"><span>$</span>Dollar</a></li>
								<li><a href="#"><span>€</span>Euro</a></li>
							</ul>
						</ul>		
				</div> 
				<div class="login">
		   	   		<span><a href="login.html"><img src="/public/assets/user/images/login.png" alt="" title="login"></a></span>
		   		</div>
		 		<div class="clear"></div>
			 </div>
			<div class="clear"></div>
		 </div>
	    <div class="clear"></div>
   </div> --}}
        <div class="header-bot">
            <div class="wrap">
                <div class="header-bot1">
                    <div class="logo">
                        {{-- <a href="index.html"><img src="/public/assets/user/images/logo.png" alt=""></a> --}}
                        <h1 class="fw-bold fs-1">Mychord.com</h1>
                    </div>
                    <div class="ph-no">
                        <div class="search_box">
                            <form>
                                <input type="text" value="Поиск" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Поиск';}"><input type="submit"
                                    value="">
                            </form>
                        </div>
                        {{-- <a href="#"><div class="cart">
							<span class="cart_title">Cart(empty)</span>
							<img src="/public/assets/user/images/marker.png" alt=""/><div class="clear"></div>
					   </div></a> --}}
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap">
            <nav id="menu-wrap">
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
                    <li><a href="featured.html">Авторизация</a></li>
                    
                </ul>
            </nav>
        </div>
    </div>

    @yield('header')

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