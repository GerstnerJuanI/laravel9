{{-- @extends('layouts.app')
@section('title','Home')
@section('meta-description','Home meta description')

@section('content')
<h1>Inicio</h1>

@endsection --}}

{{--forma 1 de llamar componentes--}}
{{-- @component('components.layout')
    <h1>Home</h1>
@endcomponent --}}

{{--forma 2 de llamar componentes--}}
<x-layouts.app title="Home"
    meta-description="Home meta decription"
    :sum="2+2"
    >
    <h1>Home</h1>
</x-layouts.app>