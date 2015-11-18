@extends('layouts.layout')

@section('content')

<div class="banner-in">
	</div>
<!---->
		<!--content-->

		<div class="container">
			<div class="sign col-md-offset-1">

					<h2 class="col-md-offset-3">Add a product</h2>
					<br />
					{{Form::open(array('url'=>'admin/addproduct', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data'))}}
						<fieldset>

						@if(Session::has('alertMessage'))
			            <div class="alert alert-success alert-dismissible fade in" role="alert" style="width: 60%;">
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

		                <div class="form-group">
		                  <div class="col-lg-10">
		                    <label>Product name</label>
		                    <input type="text" class="form-control" name="pname" value="{{ Input::old('pname') != NULL ? Input::old('pname') : '' }}" 
		                    placeholder=" Product name">
		                    <span class="badge alert-danger">{{ ($errors->has('pname') ? $errors->first('pname') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label>Price</label>
		                    <input type="text" class="form-control" name="price" value="{{ Input::old('price') != NULL ? Input::old('price') : '' }}" 
		                    placeholder=" Price per product">
		                    <span class="badge alert-danger">{{ ($errors->has('price') ? $errors->first('price') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label>Owner</label>
		                    <input type="text" class="form-control" name="p_owner" value="{{ Input::old('p_owner') != NULL ? Input::old('p_owner') : '' }}" 
		                    placeholder=" Product owner">
		                    <span class="badge alert-danger">{{ ($errors->has('p_owner') ? $errors->first('p_owner') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-8" style="width: 59%;">
		                  	<label class="hidden-xs">Product picture</label>
		                    <input type="file" class="form-control hidden-xs" name="prod_picture" placeholder=" Product picture">
		                    <span class="badge alert-danger">{{ ($errors->has('prod_picture') ? $errors->first('prod_picture') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label>Telephone</label>
		                    <input type="text" class="form-control" name="phone" value="{{ Input::old('phone') != NULL ? Input::old('phone') : '' }}" 
		                    placeholder=" Owners phone number">
		                    <span class="badge alert-danger">{{ ($errors->has('phone') ? $errors->first('phone') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label>Email</label>
		                    <input type="text" class="form-control" name="email" value="{{ Input::old('email') != NULL ? Input::old('email') : '' }}" 
		                    placeholder=" Owners email">
		                    <span class="badge alert-danger">{{ ($errors->has('email') ? $errors->first('email') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label>Product measurement</label>
		                    <input type="text" class="form-control" name="measurement" value="{{ Input::old('measurement') != NULL ? Input::old('measurement') : '' }}" 
		                    placeholder=" Measurement of product (e.g. bags, cartons, etc...)">
		                    <span class="badge alert-danger">{{ ($errors->has('measurement') ? $errors->first('measurement') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label>Quantity</label>
		                    <input type="text" class="form-control" name="quantity" value="{{ Input::old('quantity') != NULL ? Input::old('quantity') : '' }}" 
		                    placeholder=" Quantity of product in stock (e.g. 1, 2, etc..)">
		                    <span class="badge alert-danger">{{ ($errors->has('quantity') ? $errors->first('quantity') : '') }}</span>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div style="padding-left:39%;">
		                    <button type="submit" class="btn btn-success">Add product</button>
		                  </div>
		                </div>

		                </fieldset>
					{{Form::close()}}
			</div>

			<div class="hidden-xs" 
			style="height:0px;position:relative;top:-810px;left:70%;width:0px;"><img src="{{URL::to('asset')}}/images/blank.png"></div>

		</div>
@stop