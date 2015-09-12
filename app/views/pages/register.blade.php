@extends('layouts.layout')

@section('content')

<div class="banner-in">
	</div>
<!---->
		<!--content-->

		<div class="container">
			<div class="sign">
			<h3>Register </h3>
			{{Form::open(array('url'=>'register_user', 'class' => 'form-horizontal'))}}
				<div>
					<label>Name</label>
					<input type="text" name="name" value="">
				</div>
				<div>
					<label>Email</label>
					<input type="text" name="email" value="">
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password">
				</div>
				<div>
					<label>Confirmation</label>
					<input type="password" name="cpassword">
				</div>
					<input type="submit" value="submit">		
			{{Form::close()}}
				</div>
			</div>
@stop