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
        <img src="{{asset('/images/pengisian-nilai-wrap.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class="mx-12">
        <span class='text-xl ml-8 font-semibold hover:text-red-500'>
            <i class='fa fa-angle-double-left mx-12'><a href="/dosen/pengelolaan-nilai"> Back</a></i>
        </span>
    </div>
    <div class='flex flex-col items-center my-2'>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="flex flex-col align-center font-semibold bg-red-500 rounded my-1">
                <p class="mx-3 my-2">{{ $error }}</p>
            </div>
            @endforeach
        @endif
        <div class='card-content'>
            <form action="/dosen/simpan-nilai" method='post' class='mx-8 text-xl'>
                @csrf
                <label htmlFor="sid">UNAND ID Mahasiswa: </label>
                <input type="text" name="sid" placeholder="UNAND ID Mahasiswa..." size=54 class='flex flex-col border-solid border-2 my-4 px-2'/>
                <label htmlFor="jenis">Jenis: </label>
                <input type="text" name="jenis" placeholder="Tugas atau Log Book..." size=54 class='flex flex-col border-solid border-2 my-4 px-2'/>
                <label htmlFor="modul">Modul: </label>
                <input type="text" name="modul" placeholder="Modul..." size=54 class='flex flex-col border-solid border-2 my-4 px-2'/>
                <label htmlFor="nilai">Nilai: </label>
                <input type="text" name="nilai" placeholder="Nilai..." size=54 class='flex flex-col border-solid border-2 my-4 px-2'/>
                <div class='flex flex-row'>
                    <button type="submit" name="submit" class="transition duration-200 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded cursor-pointer mt-5">
                        Submit
                    </button>
                </div>
              </form>
        </div>
    </div>
@endsection

@section('activities')
    @push('styles')
        <link rel="stylesheet" href="{{asset('/css/components/activities/Activities.css')}}">
    @endpush
    @include('layouts.components.dosen.activities')
@endsection