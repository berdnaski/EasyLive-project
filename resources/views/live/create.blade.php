@extends('layouts.layouts_menu')

@section('title', 'Dashboard')

@section('content')
<div class="bg-red-900 h-screen flex flex-col">
    <div class="p-6 flex flex-col bg-red-500">
        <form action="{{ route('live-store') }}" method="post" class="flex flex-col items-center text-center">
            @csrf
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-5">
                    <label for="title" class="text-black font-bold text-xl">Título da live:</label>
                    <input type="text" name="title" id="title" required class="p-2 border rounded-lg focus:outline-none">
                </div>
                <div class="flex flex-col gap-5">
                    <label for="description" class="text-black font-bold text-xl">Descrição da live:</label>
                    <input type="text" name="description" id="description" required class="p-2 border rounded-lg focus:outline-none">
                </div>
                <div class="flex flex-col gap-5">
                    <label for="youtube_url" class="text-black font-bold text-xl">URL do YouTube da live:</label>
                    <input type="text" name="youtube_url" id="youtube_url" required class="p-2 border rounded-lg focus:outline-none">
                </div>
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">Adicionar Live</button>
            </div>
        </form>

    </div>
</div>
@endsection
