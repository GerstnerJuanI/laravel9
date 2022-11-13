{{-- @extends('layouts.app')
@section('title', 'Blog')
@section('meta-description', 'blog meta description')

@section('content')
<h1>Blog</h1>

@endsection --}}
<x-layouts.app title="Blog" meta-description="Blog meta description">
    <h1>Blog</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post['title'] }}</li>
        @endforeach
    </ul>
</x-layouts.app>
