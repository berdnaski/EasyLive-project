@extends('layouts.layouts_menu')

@section('title', 'Dashboard')

@section('content')
    <html class="bg-red-300">
        <div class="w-screen bg-white pb-[5rem] sm:rounded-lg pt-5  xl:overflow-x-hidden lg:flex lg:flex-col lg:items-center">
            <div class="w-full flex flex-col items-center gap-3 mt-2 lg:mt-0 max-w-[2500px]">
                <div class="flex gap-5 items-center justify-end  w-[90%] lg:ml-[62px]">
                    <a href="{{ route('live-create') }}" class="w-10 h-10">
                        <ion-icon name="add-outline" class="font-semibold text-black hover:text-[#2176bc] w-full h-full"></ion-icon>
                    </a>
                </div>
                <div class="w-[90%] flex flex-col gap-3 lg:box-border lg:ml-[62px]">
                    <div
                        class="hidden w-full lg:box-border bg-gray-200 border border-[#2176bc] rounded-lg px-4 py-5 shadow-lg justify-between lg:flex flex-col gap-2 lg:flex-row lg:divide-x-2 ">
                        <div class="lg:w-[30%]">
                            <p class="2xltext-xl lg:text-lg font-semibold">Titulo</p>
                        </div>
                        <div class="lg:w-[30%] lg:pl-2">
                            <p class="2xltext-xl lg:text-lg font-semibold">Descrição</p>
                        </div>
                        <div class="lg:w-[30%] lg:pl-2">
                            <p class="2xltext-xl lg:text-lg font-semibold">Url</p>
                        </div>

                        <div class="lg:w-[10%] lg:pl-2">
                            <p class="2xltext-xl lg:text-lg font-semibold">Ações</p>
                        </div>
                    </div>
                    <div class="w-full gap-2 flex flex-col">
                        @foreach ($live_streams as $live_stream)
                            <div class="w-full lg:box-border bg-gray-50 border border-[#2176bc] rounded-lg h-auto px-4 py-5 shadow-lg justify-between flex flex-col gap-2 lg:flex-row lg:divide-x-2 break-all">
                                <div class="lg:w-[30%] lg:pl-2">
                                    <p class="text-lg" class="description">{{ $live_stream->title }}</p>
                                </div>
                                <div class="lg:w-[30%] lg:pl-2">
                                    <p class="text-lg">{{ $live_stream->description }}</p>
                                </div>
                                <div class="lg:w-[30%] lg:pl-2">
                                    <p class="text-lg">{{ $live_stream->youtube_url }}</p>
                                </div>

                                <div class="lg:w-[10%] lg:pl-2 gap-2 items-center justify-center flex">
                                    <div>
                                        <form action="{{ route('live-destroy', ['id' => $live_stream->id]) }}" method="POST" class="flex flex-col items-center text-center">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="">
                                                <ion-icon name="trash-outline" size="large" class=""></ion-icon>
                                            </button>
                                        </form>
                                    </div>

                                        <a href="{{ route('ticket_gate-store', ['id' => $live_stream->id]) }}" class="flex flex-col items-center text-center">
                                            <ion-icon name="enter-outline" size="large" class=""></ion-icon>
                                        </a>

                                    <div>
                                        <button type="submit" class="">
                                            <ion-icon name="construct-outline" size="large" class=""></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
@endsection
