@extends('layouts.layouts_menu')

@section('title', 'Dashboard')

@section('content')
    <html class="bg-red-300">
        <div class="flex flex-col lg:ml-10rem h-screen">
            <div class="flex flex-col justify-start h-full mt-10">
                <div class="">
                    <h1 class="font-bold text-2xl text-center">Clique aqui para montar a sua catraca:</h1>
                </div>

                <div class="text-center mt-4">
                    <button id="openModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">CRIAR CATRACA</button>
                </div>
            </div>
        </div>

        <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
            <form method="post" action="{{ route('tracking-page') }}">
                @csrf
                <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg lg:w-full">
                        <div class="bg-red-900 w-[20rem] px-4 pt-5 pb-4 sm:p-6 sm:pb-4 relative lg:w-full">
                            <div class="flex flex-row items-center justify-between">
                                <div class="sm:flex sm:items-start mb-5">
                                    <h3 class="lg:text-2xl text-xl leading-6 font-bold text-white">Monte sua catraca!</h3>
                                </div>
                            </div>

                            <div class="mt-5">
                                <div class="flex flex-row items-center justify-between">
                                    <label for="email" class="block text-lg font-semibold text-black">Email</label>
                                    <select id="email" name="email" class="block lg:w-1/6 w-2/6 rounded-md">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-5">
                                <div class="flex flex-row items-center justify-between">
                                    <label for="phone" class="block text-lg font-semibold text-black">Telefone</label>
                                    <select id="phone" name="phone" class="block lg:w-1/6 w-2/6 rounded-md">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-5">
                                <div class="flex flex-row items-center justify-between">
                                    <label for="name" class="block text-lg font-semibold text-black">Nome</label>
                                    <select id="name" name="name" class="block lg:w-1/6 w-2/6 rounded-md">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-row justify-between">
                                <div class="flex justify-end items-center absolute top-3 right-3">
                                    <ion-icon name="close-outline" size="large" id="closeModal" class=""></ion-icon>
                                </div>

                                <div class="mt-6 items-center">
                                    <button type="submit" class="border rounded-lg bg-blue-500 hover:bg-blue-600 font-semibold lg:text-xl text-sm text-white py-1 px-1">Aplicar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </html>

    <script>
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>

    <script src="{{ asset('js/roomsScript.js') }}"></script>
@endsection
