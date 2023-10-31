@extends('layouts.default')

@section('title', 'Registrar-se')

@section('content')
<div class="flex justify-center items-center h-screen ">
        <div class="flex">
            <div class="bg-gray-300 p-6 rounded-tl rounded-bl shadow-md w-[40rem] h-[50rem] justify-center flex flex-col items-center">
                <div class="flex justify-center">
                    <h1 class="text-7xl font-bold flex justify-center">Sign In</h1>
                </div>
                <form method="POST" action="">
                    @csrf

                    <div class="mb-4 flex justify-center mt-5">
                        <h3>use your account</h3>
                    </div>

                    <div class="mb-4 w-[26rem]">
                        <label for="email" class="text-sm">E-mail</label>
                        <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="text-sm">Senha</label>
                        <input type="password" name="password" id="password" class="w-full border border-gray-300 p-2 rounded-md">
                    </div>

                    <div class="mb-4 flex justify-center gap-5">
                        <a href="#">
                            <ion-icon name="mail-outline" size="large"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-google" size="large"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-facebook" size="large"></ion-icon>
                        </a>
                    </div>


                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Registrar-se</button>
                    </div>
                </form>
            </div>

            <div class="bg-red-500 p-6 rounded shadow-md  w-[40rem] h-[50rem]">
                <h1 class="text-red-600">shaushadasdasdauhsau</h1>
            </div>
        </div>
    </div>
</div>
@endsection
