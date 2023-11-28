@extends('layouts.layouts_menu')

@section('title', 'Live Details')

@section('content')
<div class="bg-red-300 p-6 h-screen flex flex-col items-center lg:justify-center">
    <h1 class="text-2xl font-semibold mb-4 lg:justify-center items-center flex">{{$live_stream->title}}</h1>

    <div class="p-2">
        <div class="lg:w-[60rem] lg:h-[30rem] w-[25rem] h-[15rem]">
            <iframe
                width="100%"
                height="100%"
                src="{{ $live_stream->youtube_url }}"
                frameborder="0"
                allowfullscreen
            ></iframe>
        </div>
    </div>
</div>
@endsection
