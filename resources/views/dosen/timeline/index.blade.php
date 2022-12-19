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
        <img src="{{asset('/images/timeline-pengumpulan-nilai-wrap.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class="mx-12">
        <span class='text-xl ml-8 font-semibold hover:text-red-500'>
            <i class='fa fa-angle-double-left mx-12'><a href="/dosen/pengelolaan-nilai"> Back</a></i>
        </span>
    </div>
    <div class='flex flex-row justify-center mb-2'>
        <div class="card2">
            <ul class='list-disc mx-2 my-2 divide-y-4 divide-solid'>
                @forelse ($timeline as $item)
                <li class='my-5'>
                    <a href='#'><h1 class='font-semibold text-lg'>{{ $item->deskripsi }}</h1></a>
                    <h2>Deadline: {{$item->deadline}}</h2>
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