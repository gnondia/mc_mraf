@extends('layouts.layout')

@section('content')

<div class="banner-in">
	</div>
<!---->
		<!--content-->

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

					<h3>Register </h3>
					{{Form::open(array('url'=>'#', 'class' => 'form-horizontal'))}}
						<div>
							<div class="col">
								<label >Name</label>  
								<input type="text" name="name" placeholder=" Enter your name...."> <!-- name -->
							</div>
							<div class="col">
								<label >Surname</label>
								<input type="text" name="sname" placeholder=" Your surname"> <!-- Surmane -->
							</div>
						</div>

						<input type="submit" value="submit">		
				{{Form::close()}}
				</div>
			</div>
		</div>
@stop