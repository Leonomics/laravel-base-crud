@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{$comic->title}}</h1>
    <div>
        <ul>
            <li>
                <img src='{{$comic->thumb}}'>
            </li>
            <li>
                <span>Description: </span>{{$comic->description}}
            </li>
            <li>
                <span>Price: </span>{{$comic->price}}
            </li>
            <li>
                <span>Series: </span>{{$comic->series}}
            </li>
            <li>
                <span>Sale Date: </span>{{$comic->sale_date}}
            </li>
            <li>
                <span>Type: </span>{{$comic->type}}
            </li>
        </ul>
    </div>
</div>

@endsection