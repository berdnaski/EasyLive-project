<header id="menu-header" class="lg:fixed lg:h-full lg:z-20 lg:px-4 lg:transition-all lg:duration-300 lg:ease-in-out flex flex-col items-center gap-10 py-5 px-4 text-white bg-[#2176bc] lg:overflow-hidden lg:w-[3.9rem]" onmouseover="expandMenu()" onmouseleave="collapseMenu()">
    <div class="flex justify-between w-full">
        <a href="{{route('dashboard')}}" class="lg:flex lg:justify-start lg:w-full">
            <img src="{{ asset('easylive.png') }}" class="w-16 h-16 lg:w-8 lg:h-8" alt="Logo do Alugar Um Quarto">
        </a>
        <button id="mobile-menu-button" class="lg:hidden" onclick="manageMobileMenu()">
            <div id="open-button" class="cursor-pointer">
                <div class="w-9 h-1 bg-black my-2"></div>
                <div class="w-9 h-1 bg-black my-2"></div>
                <div class="w-9 h-1 bg-black my-2"></div>
            </div>
            <ion-icon name="close-outline" id="close-button" class="cursor-pointer w-10 h-16 hidden text-black"></ion-icon>
        </button>
    </div>
    <nav id="menu" class="text-center lg:text-left hidden h-full lg:h-auto lg:block absolute top-24 left-0 w-full backdrop-blur lg:backdrop-blur-none bg-[#2176bc] lg:bg-transparent lg:static lg:w-full z-10">
        <ul class="items-center lg:items-start flex flex-col gap-10 lg:text-white text-xl mt-16 lg:mt-0 font-semibold w-full lg:hidden" id="expanded-menu">
            <li class="flex items-center gap-3">
                <ion-icon name="business-outline" class="w-7 h-7"></ion-icon>
                <a href="{{route('teste-page')}}" class="lg:hover:text-gray-300">Contratsos</a>
            </li>
            <li class="flex items-center gap-3">
                <ion-icon name="home-outline" class="w-7 h-7"></ion-icon>
                <a href="{{ route('login-page') }}" class="lg:hover:text-gray-300">Dados da Empresa</a>
            </li>
            <li class="flex items-center gap-3">
                <ion-icon name="bed-outline" class="w-7 h-7"></ion-icon>
                <a href="{{ route('dashboard') }}" class="lg:hover:text-gray-300">Documentos</a>
            </li>
            <li class="flex items-center gap-3">
                <ion-icon name="person-outline" class="w-7 h-7"></ion-icon>
                <a href="{{ route('dashboard') }}" class="lg:hover:text-gray-300">Manutenção</a>
            </li>
            <li class="flex items-center gap-3">
                <ion-icon name="call-outline" class="w-7 h-7"></ion-icon>
                <a href="https://wa.me/message/KKZK74C232B7K1" target="_blank" class="lg:hover:text-gray-300">Finanças</a>
            </li>
            <li class="flex items-center gap-3">
                <ion-icon name="log-out-outline" class="w-7 h-7"></ion-icon>
                <a href="{{ route('dashboard') }}" class="lg:hover:text-gray-300">Logout</a>
            </li>

        </ul>
        <ul class="hidden lg:flex flex-col gap-10 lg:text-white text-xl mt-16 lg:mt-0 font-semibold w-full" id="closed-menu">
            <li class="w-full flex items-center">
                <ion-icon name="business-outline" class="w-7 h-7"></ion-icon>
            </li>
            <li class="w-full flex items-center">
                <ion-icon name="home-outline" class="w-7 h-7"></ion-icon>
            </li>
            <li class="w-full flex items-center">
                <ion-icon name="bed-outline" class="w-7 h-7"></ion-icon>
            </li>
            <li class="w-full flex items-center">
                <ion-icon name="person-outline" class="w-7 h-7"></ion-icon>
            </li>
            <li class="w-full flex items-center">
                <ion-icon name="call-outline" class="w-7 h-7"></ion-icon>
            </li>
            <li class="w-full flex items-center">
                <ion-icon name="log-out-outline" class="w-7 h-7"></ion-icon>
            </li>
        </ul>
    </nav>
</header>
