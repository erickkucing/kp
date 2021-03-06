<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> @yield('title') </title>
<link href="{{Asset('vendor/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="{{Asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{Asset('vendor/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="{{Asset('vendor/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{Asset('vendor/js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{Asset('vendor/js/menu_jquery.js')}}"></script>
<script src="{{Asset('vendor/js/simpleCart.min.js')}}"> </script>
</head>
<body>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="#">Delivery information</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : 032 2352 782</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="{{Route('home')}}"><img src="{{Asset('img/unnamed.png')}}" class="img-responsive" style="position:absolute; top:30px;" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="reg">
					<a href="register.html">REGISTER</a>
				</div>
			<div class="cart box_1">
				<a href="checkout.html">
					<h3> <span class="simpleCart_total">Rp.0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>	
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="checkout.html">CHECKOUT</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<br>
	<br>
	<br>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">Categories</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
									<li><a href="women.html">Other</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Health & Beauty</h4>
								<ul>
									<li><a href="women.html">Make Up</a></li>
									<li><a href="women.html">Bath & Body</a></li>
									<li><a href="women.html">Skin Care</a></li>
									<li><a href="women.html">Hair Care</a></li>
									<li><a href="women.html">Medical Supplies</a></li>
									<li><a href="women.html">Food Supplements</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Electronics</h4>
								<ul>
									<li><a href="women.html">Computer & Laptops</a></li>
									<li><a href="women.html">Phone & Tablets</a></li>
									<li><a href="women.html">Home Living</a></li>
									<li><a href="women.html">Kitchen Stuff</a></li>
									<li><a href="women.html">Cameras</a></li>
									<li><a href="women.html">Accessories</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Backpack</a></li>
									<li><a href="women.html">Luggage</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Sports</h4>
								<ul>
									<li><a href="women.html">Men Sportswear</a></li>
									<li><a href="women.html">Women Sportswear</a></li>
									<li><a href="women.html">sports equipment</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">Brands</a>
				</li>
				<li><a class="color5" href="#">Popular</a>
				</li>
				<li><a class="color5" href="#">Best Seller</a>
				</li>
				<li><a class="color6" href="#">Promotion</a>
				</li>				
		 </ul> 
	</div>
</div>
</div>
@yield('content')
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>CUSTOMER CARE</h4>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="buy.html">How To Buy</a></li>
				<li><a href="#">Delivery</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>ABOUT US</h4>
				<li><a href="#">Our Stories</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MY ACCOUNT</h4>
				<li><a href="register.html">Register</a></li>
				<li><a href="#">My Cart</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="buy.html">Payment</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>OUR STORES</h4>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
				<li><i class="phone"> </i>025-2839341</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
			
		</div>
		<div class="clearfix"> </div>
			<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
</body>
</html>