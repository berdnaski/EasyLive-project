@if (session('message'))
    @if (session('type') === 'success')
        <div id="message-modal"
            class="fixed top-[8rem] lg:top-[1rem] z-30 left-1/2 -translate-x-1/2 rounded-lg px-5 py-2
        bg-green-500 text-center mb-10 text-white w-[95%] max-w-[400px] font-semibold text-xl transition-all ease-in-out duration-300">
            <p>{{ session('message') }}</p>
        </div>
    @else
        <div id="message-modal"
            class="fixed top-[8rem] lg:top-[1rem] z-30 left-1/2 -translate-x-1/2 rounded-lg px-5 py-2
        bg-red-500 text-center mb-10 text-white w-[95%] max-w-[400px] font-semibold text-xl transition-all ease-in-out duration-300">
            <p>{{ session('message') }}</p>
        </div>
    @endif
@endif
