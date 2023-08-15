<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials._head')

    <body class="antialiased bg-primary-100">
        <div id="app">
            <livewire:navbar/>

            @yield('content')

            <livewire:footer/>
        </div>

        @livewireScripts
    </body>
</html>
