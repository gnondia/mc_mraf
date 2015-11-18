@extends('layouts.layout')

@section('content')
<div class="banner-in">
		
</div>
	</div>

<div class="container">
			<div class="sign">

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

			<h3> Reset your password </h3><br />
			{{Form::open(array('url'=>'#', 'class' => 'form-horizontal'))}}
				
				<div>
					<label>Email</label>
					<input type="text" value="" name="email" placeholder="Enter your email here.....">
				</div>

				<input type="submit" value="submit">		
			{{Form::close()}}
			</div>
</div>
@stop