@extends('layouts.layouts_menu')

@section('title', 'Fomulario')

@section('content')

<html class="bg-red-300 flex ">
        <div class="flex mx-auto lg:ml-10rem ">
            <div class="flex mx-auto mt-10 ">
                <form method="POST" action="{{ route('ticket_gate-page') }}" class="w-[100%] mx-auto bg-red-900 px-10 py-10 border rounded-lg">
                    @csrf
                        <div>
                            <h1 class="flex items-center justify-center text-xl font-bold text-white mb-4">Insira suas informações!</h1>
                        </div>
                        @if(session('email') === 'sim')
                            <div class="mb-4">
                                <label for="email" class="text-lg font-bold text-black mb-2">Email:</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="w-full mt-2 p-2 rounded-lg">
                            </div>
                        @endif

                        @if(session('phone') === 'sim')
                            <div class="mb-4">
                                <label for="phone" class="text-lg font-bold text-black mb-2">Phone:</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="w-full mt-2 p-2 rounded-lg">
                            </div>
                        @endif

                        @if(session('name') === 'sim')
                            <div class="mb-4">
                                <label for="name" class="text-lg font-bold text-black mb-2">Name:</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="w-full mt-2 p-2 rounded-lg">
                            </div>
                        @endif

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Enviar</button>
                        </div>
                </form>
            </div>
        </div>
</html>



@endsection
