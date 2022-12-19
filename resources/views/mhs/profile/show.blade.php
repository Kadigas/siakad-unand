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
    <link rel="stylesheet" href="{{asset('/css/pages/profile.css')}}">
    @endpush
    
    <div class='flex flex-row justify-center mt-12'>
        <img src="{{asset('/images/user.png')}}" alt="Home" width=500 height=500 class='my-4'/>
        <div class='flex flex-row justify-center my-2'>
            <div class='card-content'>
                <h1 class='text-2xl font-bold text-left'>Profile</h1>
                <form action="/mhs/edit_profile" method='post' class='mx-8 text-xl my-6'>
                    @csrf
                    <h2>UNAND ID: </label>
                    <h2 size=25 class='flex flex-col my-4 px-2'>{{$mhs->user->name}}<h2>
                    <label htmlFor="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Nama..." size=25 value="{{$mhs->nama}}" class='flex flex-col border-solid border-2 my-4 px-2'/>
                    <label htmlFor="angkatan">Angkatan: </label>
                    <input type="text" name="angkatan" placeholder="Angkatan..." size=25 value="{{$mhs->angkatan}}" class='flex flex-col border-solid border-2 my-4 px-2'/>
                    <div class='flex flex-row'>
                        <button type="submit" name="submit" class="transition duration-200 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded cursor-pointer mt-5">
                            Edit
                        </button>
                    </div>
                  </form>
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