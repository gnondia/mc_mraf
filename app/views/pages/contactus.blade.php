@extends('layouts.layout')

@section('content')
<div class="banner-in">
		
	</div>
<!---->
		<!--content-->
		<div class="container">
			<div class="contact">
			<h3>Contact Us Form</h3>
			<form>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="Email-id" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email-id';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" value="URL" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'URL';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<div class="send ">
						<input type="submit" value="SEND" >
					</div>
				</form>
				</div>
			</div>
@stop