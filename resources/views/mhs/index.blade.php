@extends('layouts.master')

@section('nav')
    <header class='fixed w-full z-10 top-0 flex flex-row text-lg'>
        <div class='basis-1/6'>
            <img src="{{asset('/images/unand-emas2-small.png')}}" alt="Logo Unand" width=180 height=180 class='flex flex-row justify-center m-5'/>
        </div>
        <div class='bg-white basis-5/6 flex flex-row justify-between items-center'>
            <div class='basis-1/6 mx-5'>
                <a href='#' class='font-semibold mx-5'>Panduan Mahasiswa</a>
            </div>
            <div class='basis-5/6 mx-5 flex flex-row justify-end'>
                <span class='font-semibold mx-2'>Nopal Pardede</span>
                <span class='fa fa-user-circle-o text-2xl mx-5'></span>
            </div>
        </div>
    </header>
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
    <div class='flex flex-row justify-center mt-12'>
        <img src="{{asset('/images/Home.png')}}" alt="Home" width={800} height={800} class='mt-4'/>
    </div>
    <div class='flex flex-row justify-center my-2'>
        <div class='card-content'>
            <h1 class='text-2xl font-bold text-left'>Announcement</h1>
            <div class='innercard'>
                <h1 class='font-semibold text-xl mb-2'>Modul 1: Tugas 2</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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