@extends('layouts.master')
    
@section('nav')
    @include('layouts.components.mhs.nav')
@endsection
@section('navdrawer')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/navdrawer/Nav-drawer.css')}}">
    @endpush
    @include('layouts.components.mhs.navdrawer')
@endsection

@section('content')
    @push('styles')
    <link rel="stylesheet" href="{{asset('/css/pages/main.css')}}">
    @endpush
    <span class='text-xl mt-12 ml-8 font-semibold hover:text-red-500 my-6'>
        <i class='fa fa-angle-double-left mt-12'><a href="../"> Back</a></i>
    </span>
    <div class='flex flex-col items-center'>
        <h2 class='text-3xl font-bold'>MODUL {{$modul->id}}</h2>
        <h1 class='text-6xl font-bold'>TUGAS {{$tgs->id}}</h1>
    </div>
    <div class='flex flex-col items-center my-2'>
        <div class='card-content'>
            <div class='innercard'>
                <h1 class='font-semibold text-xl mt-2'>Modul {{$modul->id}}: Tugas {{$tgs->id}}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class='flex flex-col items-center'>
                <h1 class='my-2 text-red-500'>Not Submitted</h1>
                <a href='#' class="bg-blue-700 duration-150 text-white font-bold py-2 px-4 rounded">Submit Log Book</a>
            </div>
        </div>
    </div>
@endsection

@section('activities')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/activities/Activities.css')}}">
    @endpush
    @include('layouts.components.mhs.activities')
@endsection