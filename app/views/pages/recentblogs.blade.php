@extends('layouts.layout')

@section('content')
@if(Session::has('alertError'))
  <div class="alert alert-danger alert-dismissible fade in" role="alert" style="width:98%; position:relative;left:10px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{Session::get('alertError')}}</strong>
  </div>
@endif
<div class="container">
<div class = "panel panel-success">
   <div class = "panel-heading"><h3>Latest Blogs on our Agricultural Products</h3></div>
  </div>
<div class="row">
<div class="col-md-8">
  @foreach($blogs as $blog)
  <div class = "panel panel-success">
   <div class = "panel-heading"><strong>{{$blog->title}}</strong> posted by: 
   <strong>{{$blog->blog_owner}}</strong> on {{$blog->date}}</div>
   
   <div class = "panel-body">
      <p>{{$blog->content}}</p>
   </div>
  </div>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <div class="addthis_native_toolbox pull-left"></div>
<div class="addthis_sharing_toolbox pull-right"></div>
<br /><br /><br />
  @endforeach 
</div><!--/col-->
  <div class="hidden-xs col-md-4">
      <img src="{{URL::to('asset')}}/images/blank.png" width="100%">
    </div>
  {{$blogs->links()}}                      
</div> 
</div>
@stop