@extends('layouts.master')

@section('nav')
    @include('layouts.components.admin.nav')
@endsection
@section('navdrawer')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/navdrawer/Nav-drawer.css')}}">
    @endpush
    @include('layouts.components.admin.navdrawer')
@endsection

@section('content')
    @push('styles')
    <link rel="stylesheet" href="{{asset('/css/pages/main-admin.css')}}">
    @endpush
    <div class='flex flex-row justify-center mt-12'>
        <img src="{{asset('/images/Pembagian-modul.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class='flex flex-row justify-center my-2'>
        <a href="./tambah-modul" class='mx-6'><img src="/images/tambah-modul.png" alt="Tambah modul" width={230} height={350} class='mt-4'/></a>
        <a href="./hapus-modul" class='mx-6'><img src="/images/hapus-modul.png" alt="Hapus modul" width={240} height={350} class='mt-4'/></a>
        <a href="./modifikasi-modul" class='mx-6'><img src="/images/modifikasi-modul.png" alt="Modifikasi modul" width={240} height={350} class='mt-4'/></a>
    </div>
@endsection

@section('activities')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/activities/Activities.css')}}">
    @endpush
    @include('layouts.components.admin.activities')
@endsection