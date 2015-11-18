<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
    Error Page
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::to('asset')}}/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="{{URL::to('asset')}}/css/error.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{URL::to('assets')}}/js/html5shiv.js"></script>
      <script src="{{URL::to('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body id="four-o-three">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p>
          <h1>(._.)</h1>
          <h3>An error was encountered or our server is under a fix, try again later. </h3>
          <a href="{{URL::to('/')}}" class="btn btn-large btn-success">Back to home</a>
        </p>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{URL::to('asset')}}/js/bootstrap.min.js"></script>
    <script src="{{URL::to('asset')}}/js/bootswatch.js"></script>
  </body>
</html>
