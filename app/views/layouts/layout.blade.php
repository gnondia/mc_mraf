<!DOCTYPE html>
<html>
<head>
<title>Efarm :: Sell Your Farm Product Online</title>
<link href="{{URL::to('asset')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::to('asset')}}/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{URL::to('asset')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vegetables Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="{{URL::to('asset')}}/js/jquery.easydropdown.js"></script>
</head>
<body> 
	  <!--header-->
	<div class="header">
		<div class="container">
			<div class="header-top">			
				<div class="logo">
					<a href="{{URL::to('/')}}"><img src="{{URL::to('asset')}}/images/logo.png" alt=" " ></a>
				</div>
				<div class="search-in">
					<div class="header-grid">
						<ul>
							<li class="in-up" ><a href="{{URL::to('contact')}}" class="scroll">Contact Us</a> <label>|</label></li>
							<li class="in-up" ><a href="{{URL::to('login')}}" class="scroll"> Log In </a> <label>|</label></li>
							<li ><a href="{{URL::to('register')}}" class="scroll">Register </a> <label></label></li>					
						</ul>
				</div>
				<div class="search-top">
					<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div>
				<div class="cart">
					<a href="#" class="cart-in"> </a>
					<span> 0</span>
				</div>
				<div class="clearfix"> </div>
				</div>
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"><img src="{{URL::to('asset')}}/images/menu.png" alt="" > </span>
					<ul>
						<li ><a href="about.html">About Us</a></li>
						<li><a href="product.html" > Products</a></li>
						<li><a href="services.html" > Services </a></li>
						<li><a href="404.html" >Daily Market</a></li>
						<li><a href="blog.html" > Blog </a></li>
						<li><a href="{{URL::to('contact')}}" > Contact </a></li>
					</ul>	
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
				</script>			
				</div>	
				<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	<div class="banner">
	<!--slider-script-->
		<script src="{{URL::to('asset')}}/js/responsiveslides.min.js"></script>
			<script>
				$(function () {
				  $("#slider").responsiveSlides({
					auto: true,
					speed: 500,
					namespace: "callbacks",
					pager: true,
				  });
				});
			</script>

			@yield('content')

			<div class="map-top">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833" ></iframe>
				</div>
					<div class="address">
						<h5>Address</h5>
						<p>UB Street, Buea</p>
						<a href="#" class="company">info@gericomgroup.com</a>
					</div>
				</div>
			</div>
			<!--footer-->
			<div class="footer">
				<div class="container">
					 <p class="footer-grid">Copyright &copy; 2015 by Gericom Group </p>
			 	</div> 	
			</div>

</body>
</html>