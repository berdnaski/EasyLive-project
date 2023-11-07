@extends('layouts.layouts_menu')

@section('title', 'Dashboard')

@section('content')
<div class="bg-red-900 h-screen flex flex-col">
    <div class="container">
        <h1>{{ $live->title }}</h1>
        <p>{{ $live->description }}</p>

        <!-- Incorporar o vídeo da live -->
        <iframe src="{{ $live->embed_link }}" frameborder="0"></iframe>
    </div>
</div>
@endsection
