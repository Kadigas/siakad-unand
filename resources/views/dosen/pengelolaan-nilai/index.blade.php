@extends('layouts.master')

@section('nav')
    @include('layouts.components.dosen.nav')
@endsection
@section('navdrawer')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/navdrawer/Nav-drawer.css')}}">
    @endpush
    @include('layouts.components.dosen.navdrawer')
@endsection

@section('content')
    @push('styles')
    <link rel="stylesheet" href="{{asset('/css/pages/main-dosen.css')}}">
    @endpush
    <div class='flex flex-row justify-center mt-12'>
        <img src="{{asset('/images/Pengelolaan-nilai.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class='flex flex-row justify-center my-2'>
        <a href="./timeline" class='mx-6'><img src="/images/timeline-pengumpulan-nilai.png" alt="Pengisian nilai" width={230} height={350} class='mt-4'/></a>
        <a href="./pengisian-nilai" class='mx-6'><img src="/images/pengisian-nilai.png" alt="Pengisian nilai" width={240} height={350} class='mt-4'/></a>
      </div>
@endsection

@section('activities')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/activities/Activities.css')}}">
    @endpush
    @include('layouts.components.dosen.activities')
@endsection