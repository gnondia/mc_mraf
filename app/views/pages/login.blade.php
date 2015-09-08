@extends('layouts.layout')

@section('content')
<div class="banner-in">
		
<<<<<<< HEAD
</div>
=======
	</div>
>>>>>>> da31db2b8e1ef851d259a7f796655bc7f8512525

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

			<h3> Log In </h3>
			{{Form::open(array('url'=>'login_user', 'class' => 'form-horizontal'))}}
				
				<div>
					<label>Email</label>
<<<<<<< HEAD
					<input type="text" name="email" value=" ">
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password">
				</div>
				<p><a href="#">Forgot Password ?</a></p>
					<input type="submit" value="submit">		
			{{Form::close()}}
=======
					<input type="text" value=" " name="">
				</div>
				<div>
					<label>Password</label>
					<input type="password" value=" " name="">
				</div>
				<p><a href="#">Forgot Password ?</a></p>
					<input type="submit" value="submit">		
				</form>
				<p> No Account? <a href="#">Register here...</a></p>
>>>>>>> da31db2b8e1ef851d259a7f796655bc7f8512525
				</div>

			</div>

@stop