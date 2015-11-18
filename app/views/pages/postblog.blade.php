@extends('layouts.layout')

@section('content')
@if(Session::has('alertError'))
  <div class="alert alert-danger alert-dismissible fade in" role="alert" style="width:98%; position:relative;left:10px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{Session::get('alertError')}}</strong>
  </div>
@endif 
<div class="col-md-10 col-md-offset-1">
  <div class="panel panel-success">
    <div class="panel-heading"><h4>Post new blog</h4></div>
    <div class="panel-body"> 
      <p>
        {{Form::open(array('url'=>'#', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data'))}}
        <fieldset>

          <div class="form-group">
          <br /><br />
            <label class="col-lg-2 control-label">Blog Title</label>
            <div class="col-lg-10">
              <input value="{{ Input::old('title') != NULL ? Input::old('title') : '' }}" type="text" class="form-control" name="title" 
              placeholder="Title of blog...">
              <span class="badge alert-danger">{{ ($errors->has('title') ? $errors->first('title') : '') }}</span>
              <br /><br />
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Blog Content</label>
            <div class="col-lg-10">
              <textarea class="form-control" name="content" rows="10" placeholder="Content of blog...">{{ Input::old('content') != NULL ? Input::old('content') : '' }}</textarea>
              <span class="badge alert-danger">{{ ($errors->has('content') ? $errors->first('content') : '') }}</span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary pull-right">Post blog</button>
            </div>
          </div>        

        </fieldset>
        {{Form::close()}}
      </p>
    </div><!--/panel-body-->
  </div><!--/panel-->                               
</div><!--/col-->
@stop