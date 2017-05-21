@section('title', 'inicio')
<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
@include('template.head')
</head>
<body>
<!--.preloader-->
<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->
<headder>
@include('template.header')
</headder>
    <div class="container">
        <div class="btn btn-raised btn-primary btn-lg">
            Devalfe inicio template
        </div>
        @yield('content') 
    </div>
<footer>
@include('template.footer')
</footer>
@include('template.script')
</body>
</html>
