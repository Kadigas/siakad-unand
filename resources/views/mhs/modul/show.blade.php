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
        <h1 class='text-6xl font-bold mt-6'>{{ $modul->nama }}</h1>
    </div>
    <div class='flex flex-row justify-center my-2'>
        <div class='card-content'>
            <h1 class='text-2xl font-bold text-left mb-2'>Tugas Ongoing</h1>
              <ul class='list-disc mx-2 my-2 divide-y-4 divide-solid'>
                <li class='my-5'>
                    <a href='/mahasiswa/modul/01/tugas/2'><h1 class='font-semibold text-lg'>Tugas 2</h1></a>
                    <h2>Not Submitted, Deadline 21/06/2022</h2>
                </li>
                <li class='my-5'>
                    <a href='/mahasiswa/modul/01/tugas/3'><h1 class='font-semibold text-lg'>Tugas 3</h1></a>
                    <h2>Not Submitted, Deadline 18/07/2022</h2>
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