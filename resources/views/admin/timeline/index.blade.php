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
        <img src="{{asset('/images/timeline-kegiatan.png')}}" alt="Home" width=800 height=800 class='mt-4'/>
    </div>
    <div class='flex flex-row justify-center mb-2'>
        <div class="card-content">
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
    @include('layouts.components.admin.activities')
@endsection