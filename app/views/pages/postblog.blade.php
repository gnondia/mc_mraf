@extends('layouts.layout')

@section('content')
@if(Session::has('alertError'))
  <div class="alert alert-danger alert-dismissible fade in" role="alert" style="width:98%; position:relative;left:10px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{Session::get('alertError')}}</strong>
  </div>
@endif 
<div class="col-md-7 col-md-offset-1">
  <div class="panel panel-default">
    <div class="panel-heading"><h4>Post new blog</h4></div>
    <div class="panel-body"> 
        {{Form::open(array('url'=>'post_blog', 'class'=>'form-horizontal'))}}
        <div class="form-group">
            <label for="name" class="col-md-2 control-label">Your Name</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="name" autofocus="autofocus" placeholder="Enter your name"><br />
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="title" autofocus="autofocus" placeholder="Blog title..."><br />
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-md-2 control-label">Blog Content</label>
            <div class="col-md-10">
                <textarea id="field" onkeyup="countChar(this)" class="form-control" rows="8" name="content" autofocus="autofocus" placeholder="Blog content...."></textarea>
                <div id="charNum"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success pull-right">
            </div>
        </div>
        {{Form::close()}}
    </div><!--/panel-body-->
  </div><!--/panel-->  
  <div class="hidden-xs" 
      style="height:0px;position:relative;top:-488px;left:107%;width:0px;">
      <img src="{{URL::to('asset')}}/images/blank.png" height="480px;"></div>                             
</div><!--/col-->
@stop