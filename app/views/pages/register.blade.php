@extends('layouts.layout')

@section('content')

<div class="banner-in">
	</div>
<!---->
		<!--content-->
		<div class="container">
			<div class="sign">
					<h3>Register </h3>
					<form>
						<div>
							<div class="col">
								<label >Name</label>  
								<input type="text" value=" "> <!-- name -->
							</div>
							<div class="col">
								<label >Surname</label>
								<input type="text" value=" "> <!-- Surmane -->
							</div>
						</div>
						
						<div>
							<div class="col">
								<label >Email</label>  
								<input type="text" value=" "> <!--Email -->
							</div>
							<div class="col">
								<label >Confirm Email</label>
								<input type="text" value=" "> <!-- Confirm Email -->
							</div> 
						</div> 
						<br />
						<div class="col">
							<label>Password</label>
							<input type="password">
						</div>
						<div class="col">
							<label>Confirmation</label>
							<input type="password" >
						</div>
							<input type="submit" value="submit">		
					</form>
			</div>
		</div>
@stop