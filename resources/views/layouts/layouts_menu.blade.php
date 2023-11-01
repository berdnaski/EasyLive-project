<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/css/app.css')

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>

</head>
<body class="w-screen min-h-screen overflow-x-hidden">

    @include('partials.header_tenants')
    @include('partials.messageModal')
    @yield('content')

    <script src="{{ asset('js/mobileMenu.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let isExpanded = false;
        const menu = document.getElementById('menu-header');
        const expanded_menu = document.getElementById('expanded-menu')
        const closed_menu = document.getElementById('closed-menu')

        function expandMenu() {
            if (window.innerWidth >= 1024 && !isExpanded) {
                closed_menu.setAttribute('class', 'hidden')
                expanded_menu.setAttribute('class', 'items-center lg:items-start flex flex-col gap-10 lg:text-white text-xl mt-16 lg:mt-0 font-semibold w-full')
                menu.setAttribute('class', 'lg:fixed lg:z-20 lg:h-full lg:px-4 transition-all duration-300 ease-in-out flex flex-col items-center gap-10 py-5 text-white bg-[#2176bc] overflow-hidden lg:w-[18rem]')
                isExpanded = true;
            }
        }

        function collapseMenu() {
            if (window.innerWidth >= 1024 && isExpanded) {
                expanded_menu.setAttribute('class', 'items-center lg:items-start flex flex-col gap-10 lg:text-white text-xl mt-16 lg:mt-0 font-semibold w-full lg:hidden')
                closed_menu.setAttribute('class', 'hidden lg:flex flex-col gap-10 lg:text-white text-xl mt-16 lg:mt-0 font-semibold w-full')
                menu.setAttribute('class', 'lg:fixed lg:z-20 lg:h-full lg:px-4 lg:transition-all lg:duration-300 lg:ease-in-out flex flex-col items-center gap-10 py-5 px-4 text-white bg-[#2176bc] lg:overflow-hidden lg:w-[3.9rem]')
                isExpanded = false;
            }
        }

        setTimeout(() => {
            const modal = document.getElementById('message-modal')
            if(modal){
                modal.remove()
            }
        }, 3000);
    </script>
</body>
</html>
