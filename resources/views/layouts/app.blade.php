<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen">
        @include('layouts.navbar')
        <div class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
            @yield('content')
        </div>
        @yield('scripts')
    </body>
</html>
