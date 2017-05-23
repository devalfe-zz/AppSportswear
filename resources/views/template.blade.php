<!DOCTYPE html>
@section('title')
@lang('auth.failed')
@endsection
<html lang="{{config('app.locale')}}">
<head>
@include('template.head')
</head>
<body class="cms-home-page">
<div id="page">
<header>
@include('template.header')
</header>

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
</div>
</body>
</html>
