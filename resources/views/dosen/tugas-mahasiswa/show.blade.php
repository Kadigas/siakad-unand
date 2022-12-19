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
    <div class='flex flex-row justify-center mt-12 mb-4'>
        <div class='card2'>
            <h1 class='font-semibold text-xl mb-2'>Tugas Mahasiwa</h1>
            <h2 class='text-2xl font-semibold border-solid'>{{$mhs->nama}}</h2>
            <ul class='mx-2 my-2 list-disc divide-y-4 divide-solid'>
                @forelse ($tgs as $item)
                <li class='my-4'>
                    <a class='text-xl font-semibold' href='#'>Tugas {{ $item->id }}</a>
                    <h3 class='text-lg'>Modul: {{$item->modul_id}}</h3>
                    <h3 class='text-lg'>Nilai: {{$item->nilai}}</h3>
                </li>
                @empty
                @endforelse
            </ul>
          </div>
    </div>
@endsection

@section('activities')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/activities/Activities.css')}}">
    @endpush
    @include('layouts.components.dosen.activities')
@endsection