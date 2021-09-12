@extends('layouts.app')
   
@section('content')

<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1> Dashboard </h1>
    <div class="dashboard">
        <div class="row">
            <h4 class="headings col-6">Readings</h4>
            <a href="{{route('readings.create')}}" class="col-6 text-right">Add Reading</a>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">PH</th>
                            <th scope="col">Hight Range PH</th>
                            <th scope="col">Ammonia</th>
                            <th scope="col">Nitrite</th>
                            <th scope="col">Nitrate</th>
                            <th scope="col">Water Changed?</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($readings); $i++)
                            <tr>
                                <td>{{$readings[$i]->ph}} @if($preferences->ph != null) {{$preferences->ph}} @endif</td>
                                <td>{{$readings[$i]->high_range_ph}} @if($preferences->high_range_ph != null) {{$preferences->high_range_ph}} @endif</td>
                                <td>{{$readings[$i]->ammonia}} {{$preferences->ammonia}}</td>
                                <td>{{$readings[$i]->nitrite}}  {{$preferences->nitrite}}</td>
                                <td>{{$readings[$i]->nitrate}}  {{$preferences->nitrate}}</td>
                                <td>
                                    @if($readings[$i]->water_changed == 1)
                                        <img src="https://img.icons8.com/material-outlined/24/000000/checkmark--v2.png"/>
                                    @endif
                                </td>
                                @php
                                    $date = explode(' ',$readings[$i]->created_at);
                                @endphp
                                <td>{{$date[0]}}</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
