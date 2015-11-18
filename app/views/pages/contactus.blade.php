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
								<input type="text" name="name" value="{{$contact->name . ' ' . $contact->sname}}" placeholder="Full name....">
							@else
								<input type="text" name="name" placeholder="Enter your full name....">
							@endif
						</div>
						<div class="col-md-6 contact-us">
							@if(Auth::user())
								<input type="text" name="email" value="{{$contact->email}}">
							@else
								<input type="text" name="email" placeholder="Email (e.g. example@domain.com)">
							@endif
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" name="url" placeholder="Enter a link, exclude (http://, https:// etc...">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" name="subject" placeholder="Subject of your message...">
						</div>
						<div class="clearfix"> </div>
					</div>
					<textarea cols="77" rows="6" name="message" placeholder="Type your message here....."></textarea>
					<div class="send ">
						<input type="submit" value="SEND" >
					</div>
			{{Form::close()}}
				</div>
			</div>
@stop