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
        <img src="{{asset('/images/Tugas.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class='flex flex-row justify-center my-2'>
        <div class='card-content'>
            <h1 class='text-2xl font-bold text-left mb-2'>Tugas Ongoing</h1>
            <ul class='list-disc mx-2 my-2 divide-y-4 divide-solid'>
              <li class='my-5'>
                  <a href='/mhs/modul/1/tugas/2'><h1 class='font-semibold text-lg'>Modul 1: Tugas 2</h1></a>
                  <h2>Deadline 21/06/2022</h2>
              </li>
              <li class='my-5'>
                  <a href='/mhs/modul/3/tugas/2'><h1 class='font-semibold text-lg'>Modul 3: Tugas 2</h1></a>
                  <h2>Deadline 23/06/2022</h2>
              </li>
              <li class='my-5'>
                  <a href='/mhs/modul/2/tugas/2'><h1 class='font-semibold text-lg'>Modul 2: Tugas 2</h1></a>
                  <h2>Deadline 01/07/2022</h2>
              </li>
            </ul>
        </div>
    </div>
@endsection

@section('activities')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/activities/Activities.css')}}">
    @endpush
    @include('layouts.components.mhs.activities')
@endsection