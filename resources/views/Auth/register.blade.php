@extends('layouts.default')

@section('title', 'Registrar-se')

@section('content')
<div class="flex justify-center items-center h-screen ">
        <div class="flex">
            <div class="bg-gray-300 p-6 rounded-lg lg:rounded-r-none lg:rounded-tl lg:rounded-bl shadow-md lg:w-[40rem] lg:h-[50rem] w-[23rem] h-[30rem] justify-center flex flex-col items-center">
                <div class="flex justify-center">
                    <h1 class="text-5xl lg:text-7xl font-bold flex justify-center">Sign In</h1>
                </div>
                <form method="POST" action="{{route('register')}}">
                    @csrf

                    <div class="mb-4 flex justify-center mt-5">
                        <h3 class="font-semibold">use your account</h3>
                    </div>

                    <div class="flex flex-col mb-2">

                        <div class="mb-4 w-[18rem]">
                            <label for="name" class="text-sm lg:text-lg lg:font-semibold">Nome</label>
                            <input type="name" name="name" id="name" class="w-full border border-gray-500 p-2 rounded-md bg-transparent">
                        </div>

                        <div class="mb-4 w-[18rem]">
                            <label for="email" class="text-sm lg:text-lg lg:font-semibold">E-mail</label>
                            <input type="email" name="email" id="email" class="w-full border border-gray-500 p-2 rounded-md bg-transparent">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="text-sm lg:text-lg lg:font-semibold">Senha</label>
                            <input type="password" name="password" id="password" class="w-full border border-gray-500 p-2 rounded-md bg-transparent">
                        </div>

                        <div class="mb-4 flex justify-end">
                            <a href="" class="text-sm underline">Forgot your password?</a>
                        </div>
                    </div>

                    <div class="mb-4 flex justify-center gap-5 mt-2">
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
                        <button type="submit" class="bg-red-500 text-white py-3 px-5 rounded-xl font-bold hover:bg-red-600">SIGN IN</button>
                    </div>

                    <div class="mb-4 flex justify-center mt-3">
                        <a href="" class="text-red-900 lg:text-lg underline">Doesn't has an account?</a>
                    </div>
                </form>
            </div>

            <div class="bg-red-900 p-6 rounded shadow-md justify-center lg:flex flex-col items-center lg:w-[40rem] lg:h-[50rem] w-[23rem] h-[30rem] lg:block hidden">
                <div class=" flex flex-col justify-center items-center">
                    <div class="flex justify-center items-center mb-4">
                        <img class="h-16 md:h-20 lg:h-[7rem] mx-5 my-5" src="https://pages.easylive.brainlegacy.tech/storage/logo.png" alt="Logo">
                    </div>

                    <div class="mx-5 my-5">
                        <h1 class="font-bold text-white text-6xl">Hello, Friend!</h1>
                    </div>

                    <div class="flex justify-center mx-5 my-5">
                        <a href="" class="text-white lg:text-xl">Doesn't has an account?</a>
                    </div>

                    <div class="flex justify-center mx-5 my-5">
                        <a href="" class="border-2 border-white text-white text-3xl py-3 px-5 rounded-3xl font-bold">SIGN IN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
