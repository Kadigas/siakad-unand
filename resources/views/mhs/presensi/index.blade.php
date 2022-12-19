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
        <img src="{{asset('/images/Presence.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class='flex flex-row justify-center my-2'>
        <div class='card-content'>
            <div class='flex flex-col align-center my-2 mx-12'>
                <a class='bg-blue-700 duration-150 mx-12 text-white font-bold py-2 px-4 rounded flex flex-col items-center hover:bg-blue-900' href='#'>Presensi</a>
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