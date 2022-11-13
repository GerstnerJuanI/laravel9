<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>JIGerstner - @yield('title')</title> --}}
    <title>JIGerstner - {{$title ?? ''}}</title>

    {{-- <meta name="description" content="@yield('meta-description','Default meta description')"> --}}
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}">

</head>
<body>
{{-- @include('partials.navigation') --}}
<x-layouts.navigation />
{{$sum ?? ''}}
{{$slot}} {{-- Para hacerla opcional $1 ?? $2 --}}
</body>
</html>
