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
					<a href="{{URL::to('/')}}"><img src="{{URL::to('asset')}}/images/efarmcm.png" alt=" " ></a>
				</div>
				<div class="search-in">
					<div class="header-grid">
						<ul>
							<li  class="in-up"><a href="{{URL::to('contact')}}" class="scroll">Contact Us</a> <label>|</label></li>
							<li  ><a href="{{URL::to('login')}}" class="scroll"> Log In </a> <label>|</label></li>
							<li class="in-up" ><a href="{{URL::to('register')}}" class="scroll">Register </a> <label>|</label></li>
							<li  ><a href="{{URL::to('translate')}}" class="scroll">ENG&laquo;&raquo;FR </a> <label>|</label></li>					
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
					<iframe width="300" height="171" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=GericomGroup,+Molyko-Buea,+Southwest,+Cameroon&amp;aq=0&amp;oq=gericom&amp;sll=4.152935,9.233869&amp;sspn=0.005607,0.010568&amp;doflg=ptk&amp;ie=UTF8&amp;hq=GericomGroup,&amp;hnear=Buea,+Fako,+Southwest,+Cameroon&amp;ll=4.152689,9.288007&amp;spn=0.005607,0.010568&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=10929822959196550114&amp;output=embed"></iframe>
            		<br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=GericomGroup,+Molyko-Buea,+Southwest,+Cameroon&amp;aq=0&amp;oq=gericom&amp;sll=4.152935,9.233869&amp;sspn=0.005607,0.010568&amp;doflg=ptk&amp;ie=UTF8&amp;hq=GericomGroup,&amp;hnear=Molyko-Buea,+Fako,+Southwest,+Cameroon&amp;ll=4.152689,9.288007&amp;spn=0.005607,0.010568&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=10929822959196550114" style="color:#0000FF;text-align:left"></a></small>
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