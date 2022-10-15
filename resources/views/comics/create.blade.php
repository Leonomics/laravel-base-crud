@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2>
            Aggiungi fumetto
        </h2>
    </div>

    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <p>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Titolo">
            </p>
            <p>
                <label for="title">Description</label>
                <input type="text" name="description" id="description" placeholder="Description">
            </p>
            <p>
                <label for="title">Thumb</label>
                <input type="text" name="thumb" id="thumb" placeholder="Thumb">
            </p>
            <p>
                <label for="title">Price</label>
                <input type="text" name="price" id="price" placeholder="Price">
            </p>
            <p>
                <label for="title">Series</label>
                <input type="text" name="series" id="series" placeholder="Series">
            </p>
            <p>
                <label for="title">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="Sale Date">
            </p>
            <p>
                <label for="title">Type</label>
                <input type="text" name="type" id="type" placeholder="Type">
            </p>

            <p>
                <input type="submit" value="Salva">
            </p>

        </form>
    </div>
</section>

@endsection