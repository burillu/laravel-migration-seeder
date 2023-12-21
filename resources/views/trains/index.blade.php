@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row gy-4">
            @foreach ($trains as $item)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="https://www.motohelp.it/wp-content/uploads/2016/05/treno-SCOOTER-LARGA-1.jpg">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->company }}</h5>
                            <div>from: {{ $item->from }}, to: {{ $item->destination }} </div>

                            <a href="#" class="btn btn-primary">Movie Deails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    @endsection
