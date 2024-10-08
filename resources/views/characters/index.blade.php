@extends('layouts.app')

@section('page-title')
    Comics
@endsection

{{-- @section('active')
    headerActive
@endsection --}}

@section('content')
    @include('components.Head-img')
    <div id="characters">
        <div class="container position-relative pt-5">
            <div class="row">
               <div class="col-12">
                <h1 class="fw-bold">PERSONAGGI</h1>
               </div>
                @foreach ($characters as $character )
                    <div class="col-4 col-md-3 col-lg-2 p-4 border-card">
                         <a href="{{route('characters.show',$character)}}">
                            <figure>
                                <img src="{{$character->thumb}}" alt="">
                            </figure>
                            <div class="fw-semibold text-center fs-3">
                                <div>{{$character->character}}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class=" py-3">
                {{ $characters->links() }}
            </div>
        </div>
    </div>

@endsection