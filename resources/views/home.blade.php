@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>


        <div class="container">
            <section id="hero">
                <img src="https://www.zaha-hadid.com/wp-content/uploads/2021/09/ZHA_Vilnius-Connect_render-by-Negativ_low-2.jpg"
                    alt="vilnius station">
            </section>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company</th>
                        <th scope="col">From</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Departure time</th>
                        <th scope="col">Arrival time</th>
                        <th scope="col">Train nr.</th>
                        <th scope="col">Carriage nr.</th>
                        <th scope="col">Delay</th>
                        <th scope="col">Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $key => $item)
                        <tr>

                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->company }}</td>
                            <td>{{ $item->from }}</td>
                            <td>{{ $item->destination }}</td>
                            <td>{{ $item->departure_time }}</td>
                            <td>{{ $item->arrival_time }}</td>
                            <td>{{ $item->train_code }}</td>
                            <td>{{ $item->carriages_numb }}</td>
                            <td>{{ $item->delay }}</td>
                            <td>{{ $item->deleted }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </main>

@endsection
