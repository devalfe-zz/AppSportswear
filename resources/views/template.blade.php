<!DOCTYPE html>
@section('title')
@lang('auth.failed')
@endsection
<html lang="{{config('app.locale')}}">
<head>
@include('template.layout.head')
</head>
<body class="@yield('class')">
@include('template.layout.mobil')
@include('template.layout.header')
@include('template.layout.navbar')
<div class="container">
@yield('content') 
</div>
<footer>
@include('template.layout.footer')
</footer>
@include('template.layout.script')
</body>
</html>
