
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
   <title>@yield('title')</title>
   <link rel="stylesheet" href = "/assets\sass/app.scss">
   <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>

 @include('inc.header')
 @if(Request::is('/'))
 @include('inc.hero')
 @endif
 <div class = "container mt-5">
    <div class="row">
        <div class="col-8">

            @yield('content')
        </div>
        <div class="col-4">
            @include('inc.aside')
        </div>
    </div>
</div>
@include('inc.footer')                
 </body> 
</html>