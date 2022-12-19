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
            <h1 class='font-semibold text-xl mb-2'>Data Mahasiswa</h1>
            <ul class='mx-2 my-2 divide-y-4 divide-solid'>
                @forelse ($mhs as $item)
                <li class='my-4'>
                    <a class='text-xl font-semibold' href='#'>{{$item->nama}}</a>
                    <h3 class='text-lg'>Kode: {{$item->user_id}}</h3>
                    <h3 class='text-lg'>IPK: {{$item->IPK}}</h3>
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