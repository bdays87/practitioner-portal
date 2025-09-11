<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="lofi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {!! PwaKit::head() !!}
</head>
<body class="min-h-screen font-sans antialiased ">
    <x-nav sticky full-width>
 
        <x-slot:brand>
          
           <img src="./logo/logo.jpg" alt="Logo" class="h-20">
            {{-- Brand --}}
            <div>Medical laboratory & Clinical Scientists Council of Zimbabwe</div>
        </x-slot:brand>
 
        {{-- Right side actions --}}
        <x-slot:actions>
              
        <x-dropdown >
            <x-slot:trigger>
                <x-button icon="o-bars-3" class="lg:hidden btn-ghost btn-sm" />
        </x-slot:trigger>
            <x-menu-item title="Login" link="{{ route('login') }}" icon="o-archive-box" />
            <x-menu-item title="Register" link="{{ route('register') }}" icon="o-trash" />
            <x-menu-item title="Forget Password" link="{{ route('forget') }}" icon="o-arrow-path" />
        </x-dropdown>
            <x-button label="Home"  link="{{ route('welcome') }}" class="btn-ghost " responsive />
         
            <x-button label="Login"  link="{{ route('login') }}" class="btn-ghost " responsive />
            <x-button label="Register"  link="{{ route('register') }}" class="btn-ghost " responsive />
        </x-slot:actions>
    </x-nav>

    
    {{-- MAIN --}}
    <x-main>
       
       
        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />
    {!! PwaKit::scripts() !!}
</body>
</html>
