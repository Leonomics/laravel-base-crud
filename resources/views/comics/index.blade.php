@extends('layouts.app')


@section('content')

<table>
    <thead>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>price</th>
            <th>series</th>
            <th>sale date</th>
            <th>type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>
                    <a href="{{route('comics.show',['comic' => $comic->id])}}">
                        {{$comic->title}}
                    </a>
                </td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection