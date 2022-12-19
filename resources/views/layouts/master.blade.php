<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIAKAD UNAND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="/images/logo.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/css/components/footer/Footer.css')}}">
    @stack('styles')
</head>

<body>
    <div class="contain">
        <!-- Navbar -->
        @yield('nav')
        
        <!-- Main Content -->
        <div class='flex flex-row'>
            <div class="basis-1/6 h-screen sticky top-0">@yield('navdrawer')</div>
            <div class="basis-4/6 mt-12 flex flex-col justify-between">
                @yield('content')
                @include('layouts.components.footer')
            </div>
            <div class="basis-1/6 h-screen sticky top-0">@yield('activities')</div>
        </div>
    </div>
    <!-- Page Specific JS File -->
  @stack('scripts')
</body>
</html>
