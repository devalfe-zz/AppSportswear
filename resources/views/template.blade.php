<!DOCTYPE html>
@section('title')
@lang('auth.failed')
@endsection
<html lang="{{config('app.locale')}}">
<head>
@include('template.head')
</head>

<body class="@yield('class')">
@include('template.mobil')

@include('template.header')

@include('template.navbar')
<div class="container">
@yield('content') 
</div>
<footer>
@include('template.footer')
</footer>

@include('template.script')
</body>
</html>
