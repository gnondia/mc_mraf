@extends('layouts.layout')

@section('content')

@if(Session::has('alertError'))
	<div class="alert alert-danger alert-dismissible fade in" role="alert" style="width:98%; position:relative;left:10px;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>{{Session::get('alertError')}}</strong>
	</div>
@endif 
<div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider">
			        <li>
			          <img src="{{URL::to('asset')}}/images/banner.jpg" alt="" />
					  <div class="banner-matter">
						<div class="price">
						  <h2>We Got Every Vegetable  in Your price</h2>
						  </div>
							<div class="banner-para">							
								<p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
							</div>
					  </div>
			        </li>
			        <li>
			          <img src="{{URL::to('asset')}}/images/banner2.jpg" alt="" />
					  <div class="banner-matter">
						 <div class="price">
						  <h2>We Got Every Vegetable  in Your price</h2>
						  </div>
							<div class="banner-para">							
								<p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
							</div>
					  </div>
			        </li>
			        <li>
			          <img src="{{URL::to('asset')}}/images/banner.jpg" alt="" />
					  <div class="banner-matter">
						 <div class="price">
						  <h2>We Got Every Vegetable  in Your price</h2>
						  </div>
							<div class="banner-para">
								
								<p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
							</div>
					  </div>
			        </li>
			      </ul>
			    </div>
			</div>				
			<!-- //slider-->
			<!--content-->
			<div class="content">
			<div class = "panel panel-default" style="width:100%">
				  <div class="panel-body">
				<div class="container">
				<div class="top-content">
					<div class="content-top">
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi1.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi2.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi3.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="clearfix"> </div>
					</div>			
					<div class="content-top">
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi4.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi5.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi6.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="col-md-3 look">
							<h4><a href="single.html">Product you will like </a></h4>
							<a href="single.html"><img class="img-responsive" src="{{URL::to('asset')}}/images/pi7.jpg" alt=" " ></a>
							<p>This is just a sample product and if you will like to buy, just click on the buy product button below. Enjoy </p>
							<a href="single.html" class="btn  btn-1c">Buy Product</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</div>
				</div>
				</div>
				<!---->
				<!---->
					 <div class="content-bottom-top">
						<div class="wmuSlider example1">
							   <div class="wmuSliderWrapper">
								   <article style="position: absolute; width: 100%; opacity: 0;">
								   	<div class="content-bottom">
										<div class="container">
											<span class="corn"> </span>
											<h3>Do you Know  ?</h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
										</div>
									</div>
								 	</article>
								 	 <article style="position: absolute; width: 100%; opacity: 0;">
								 	 		<div class="content-bottom">
										<div class="container">
											<span class="corn corn-in"> </span>
											<h3>Do you Know  ?</h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
										</div>
									</div>
								 	</article>
								 	 <article style="position: absolute; width: 100%; opacity: 0;">
								 	 		<div class="content-bottom">
										<div class="container">
											<span class="corn"> </span>
											<h3>Do you Know  ?</h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
										</div>
									</div>
								 	</article>
								 </div>
				            <script src="{{URL::to('asset')}}/js/jquery.wmuSlider.js"></script> 
							  <script>
				       			$('.example1').wmuSlider();         
				   		     </script> 	           	         
					</div>
					</div>

@stop