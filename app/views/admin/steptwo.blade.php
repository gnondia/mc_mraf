@extends('layouts.layout')

@section('content')

<div class="banner-in">
	</div>
<!---->
		<!--content-->

		<div class="container">
			<div class="sign col-md-offset-1">
				<div class="row">
				  <div class="col-md-8">
					<h2 class="col-md-offset-3">Add a product</h2>
					<br />
					{{Form::open(array('url'=>'admin/addproduct2','role'=>'form','enctype'=>'multipart/form-data'))}}
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

			            <div>
			            	<input type="hidden" name="id" value="{{$max_id}}">
			            </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label class="hidden-xs">Product picture</label>
		                    <!-- <input type="file" class="form-control hidden-xs" name="prod_picture" placeholder=" Product picture"> -->
		                    {{Form::file('prod_picture', array('class' => 'form-control'))}}
		                    <span class="badge alert-danger">{{ ($errors->has('prod_picture') ? $errors->first('prod_picture') : '') }}</span>
		                    <br /><br />
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div class="col-lg-10">
		                  	<label>Breif description of product</label>
		                    <textarea id="field" onkeyup="countChar(this)" class="form-control" rows="8" 
		                    cols="4" name="description" placeholder="Describe your product here..."></textarea>
                			<div id="charNum"></div>
		                    <span class="badge alert-danger">{{ ($errors->has('description') ? $errors->first('description') : '') }}</span>
		                    <br />
		                  </div>
		                </div>

		                <div class="form-group">
		                  <div style="padding-left:54%;">
		                    <button type="submit" class="btn btn-success">Add Product</button>
		                  </div>
		                </div>
					{{Form::close()}}
			</div>
			<div class="col-md-4">
			<div class="hidden-xs"><img src="{{URL::to('asset')}}/images/blank.png"></div>
			</div>
			</div>
		</div>
	</div>
@stop