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
                if (! $clicked.parents().hasClass("dropdown"))
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
<script src="/public/assets/user/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="header">
	<div class="header-top">
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
   </div>
	<div class="header-bot">
		<div class="wrap">
			<div class="header-bot1">
				<div class="logo">
					<a href="index.html"><img src="/public/assets/user/images/logo.png" alt=""></a>
				</div>
				<div class="ph-no">
					<div class="search_box">
					       <form>
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
					       </form>
						</div>
					    <a href="#"><div class="cart">
							<span class="cart_title">Cart(empty)</span>
							<img src="/public/assets/user/images/marker.png" alt=""/><div class="clear"></div>
					   </div></a>
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
					<li><a href="index.html">Home</a></li>
					<li>
						<a href="about.html">About</a>
							<ul>
								<li><a href="about.html">Testimonials</a></li>
								<li><a href="about.html">Archives</a></li>
								<li><a href="about.html">Faqs</a></li>
							</ul>
					</li>
					<li><a href="featured.html">Featured</a></li>
					<li><a href="featured.html">Store</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
  <div class="banner">
	<div id="wrapper">
 		<script src="/public/assets/user/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			  <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <div class="slider-top">
			          	<a href="#"><img src="/public/assets/user/images/banner.jpg" alt="" /></a>
			          </div>
			        </li>
			         <li>
			          <div class="slider-top">
			          	<a href="#"><img src="/public/assets/user/images/banner1.jpg" alt="" /></a>
			          </div>
			        </li>
			         <li>
			          <div class="slider-top">
			          	<a href="#"><img src="/public/assets/user/images/banner2.jpg" alt="" /></a>
			          </div>
			        </li>
			      </ul>
			    </div>
    </div>
  </div>
 <div class="main-cont index-main">
<div class="main">
	<div class="wrap">
		<div class="content-top">
				<div class="col_1_of_3 span_1_of_3">
						<a href="single.html">
							<img src="/public/assets/user/images/pic.jpg" alt=""/>
							<div class="banner_content"><h2>Lorem<span>ipsum</span></h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.<i class="icon-chevron-sign-right"></i></p>
							</div>
						</a>
						<div class="icon-right"><a href="#"><img src="/public/assets/user/images/marker1.png" alt=""/></a></div>
						<div class="clear"></div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
						<a href="single.html">
							<img src="/public/assets/user/images/pic1.jpg" alt=""/>
							<div class="banner_content"><h2>Lorem<span>ipsum</span></h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.<i class="icon-chevron-sign-right"></i></p></div>
						</a>
						<div class="icon-right"><a href="#"><img src="/public/assets/user/images/marker1.png" alt=""/></a></div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
						<a href="single.html">
							<img src="/public/assets/user/images/pic2.jpg" alt=""/>
							<div class="banner_content"><h2>Lorem<span>ipsum</span></h2><p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.<i class="icon-chevron-sign-right"></i></p></div>
						</a>
						<div class="icon-right"><a href="#"><img src="/public/assets/user/images/marker1.png" alt=""/></a></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="section group">			
				<div class="leftsidebar span_3_of_1">
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent.</p>
							</div>
						 <div class="clear"></div>	
					</div>
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent vestibulum molestie.</p>
							</div>
						 <div class="clear"></div>	
					</div>
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent.</p>
							</div>
						 <div class="clear"></div>	
					</div>
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent.</p>
							</div>
						 <div class="clear"></div>	
					</div>
 				</div>	
 	<div class="content span_1_of_c">			
			<div class="con-left">
				<div class="con-box">
					<div class="grid images_3_of_2">
						<img src="/public/assets/user/images/pic3.jpg" alt=""/>
					</div>
					<div class="desc span_3_of_2">
						<h3>Tuesday, 5 August 2013</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div><div class="clear"></div>	
				</div>
				<div class="con-right-box">
					<div class="grid images_3_of_2">
						<img src="/public/assets/user/images/pic4.jpg" alt=""/>
					</div>
					<div class="desc span_3_of_2">
						<h3>Tuesday, 5 August 2013</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div><div class="clear"></div>	
				</div>
				<div class="con-box">
					<div class="grid images_3_of_2">
						<img src="/public/assets/user/images/pic5.jpg" alt=""/>
					</div>
					<div class="desc span_3_of_2">
						<h3>Tuesday, 5 August 2013</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div><div class="clear"></div>	
				</div>
			</div>
			<div class="con-right">
				<div class="con-right-box">
					<div class="grid images_3_of_2">
						<img src="/public/assets/user/images/pic6.jpg" alt=""/>
					</div>
					<div class="desc span_3_of_2">
						<h3>Tuesday, 5 August 2013</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div><div class="clear"></div>	
				</div>
				<div class="con-box">
					<div class="grid images_3_of_2">
						<img src="/public/assets/user/images/pic7.jpg" alt=""/>
					</div>
					<div class="desc span_3_of_2">
						<h3>Tuesday, 5 August 2013</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div><div class="clear"></div>	
				</div>
				<div class="con-right-box">
					<div class="grid images_3_of_2">
						<img src="/public/assets/user/images/pic9.jpg" alt=""/>
					</div>
					<div class="desc span_3_of_2">
						<h3>Tuesday, 5 August 2013</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div><div class="clear"></div>	
				</div>
		     </div>
		</div>
		<div class="clear"></div>	
	</div>
  </div>
</div>
</div>
<div class="footer">
	<div class="wrap">
		<div class="footer-top">
			<div class="footer-grid">
				<h3>About us</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<a href="#">ReadMore</a>
			</div>
			<div class="footer-grid center-grid">
				<h3>Recent posts</h3>
				<ul>
					<li><a href="#">eiusmod tempor incididunt</a></li>
					<li><a href="#">adipisicing elit, sed</a></li>
					<li><a href="#">mod tempor incididunt ut</a></li>
					<li><a href="#">dipisicing elit, sed do</a></li>
					<li><a href="#">econsectetur adipisicing</a></li>
				</ul>
			</div>
			<div class="footer-grid twitts">
				<h3>Latest Tweets</h3>
				<p><label>@Lorem ipsum</label>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				<span>10 minutes ago</span>
				<p><label>@consectetur</label>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<span>15 minutes ago</span>
			</div>
			<div class="footer-grid">
				<h3>DID YOU KNOW?</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				<a href="#">ReadMore</a>
			</div>
			<div class="clear"> </div>
	</div>
		</div>
	</div>
		<div class="copy-right">
			<div class="wrap">
				<p>&copy; 2013 Musico. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
		<div class="clear"> </div>
</body>
</html>
