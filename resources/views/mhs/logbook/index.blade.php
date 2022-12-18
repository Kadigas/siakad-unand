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
    <div class='flex flex-row justify-center mt-12'>
        <img src="{{asset('/images/Logbook.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class='flex flex-row justify-center my-2'>
        <div class='card-content'>
            <h1 class='text-2xl font-bold text-left'>Log book</h1>
            <ul class='mx-2 my-2 divide-y-4 divide-solid'>
                <li class='my-2'>
                    <a href='/mahasiswa'><h1 class='font-semibold text-lg'>Log Book Semester 1</h1></a>
                </li>
                <li class='my-2'>
                  <a href='/mahasiswa'><h1 class='font-semibold text-lg'>Log Book Semester 2</h1></a>
                </li>
              </ul>
              <div class='flex flex-col items-center'>
                <h3 class='text-red-500 my-4'>Anda belum mengumpulkan Log Book semester ini.</h3>
                <div>
                  <a href='#' class="bg-green-700 duration-150 text-white font-bold py-2 px-4 rounded">Submit Log Book</a>
                </div>
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