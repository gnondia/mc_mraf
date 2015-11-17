@extends('layouts.layout')

@section('content')
<div class="banner-in">
		
	</div>
<!---->
		<!--content-->
		<div class="container">
			<div class="contact">

			@if(Session::has('alertMessage'))
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>{{Session::get('alertMessage')}}</strong>
            </div>
            @endif

            @if(Session::has('alertError'))
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>{{Session::get('alertError')}}</strong>
            </div>
            @endif 

			<h3>Contact Us Form</h3>
			{{Form::open(array('url'=>'sendMessage', 'class'=>'form-horizontal'))}}
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							@if(Auth::user())
								<input type="text" name="name" value="{{$contact->name . ' ' . $contact->sname}}" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
							@else
								<input type="text" name="name" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
							@endif
						</div>
						<div class="col-md-6 contact-us">
							@if(Auth::user())
								<input type="text" name="email" value="{{$contact->email}}" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email-id';}">
							@else
								<input type="text" name="email" value="Email-id" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email-id';}">
							@endif
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" name="url" value="URL" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'URL';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" name="subject" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<textarea cols="77" rows="6" name="message" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<div class="send ">
						<input type="submit" value="SEND" >
					</div>
			{{Form::close()}}
				</div>
			</div>
@stop