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
                <input type="text" name="title" value="{{ old('title') }}" id="title" placeholder="Titolo">
                @error('title')
                    <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="description">Description</label>
                <input type="text" name="description" value="{{ old('description') }}" id="description" placeholder="Description">
                @error('description')
                    <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" value="{{ old('thumb') }}" id="thumb" placeholder="Thumb">
                @error('thumb')
                    <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="price">Price</label>
                <input type="text" name="price" value="{{ old('price') }}" id="price" placeholder="Price">
                @error('price')
                    <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="series">Series</label>
                <input type="text" name="series" value="{{ old('series') }}" id="series" placeholder="Series">
                @error('series')
                    <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="sale_date">Sale Date</label>
                <input type="text" name="sale_date" value="{{ old('sale_date') }}" id="sale_date" placeholder="Sale Date">
                @error('sale_date')
                    <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="type">Type</label>
                <input type="text" name="type" value="{{ old('type') }}" id="type" placeholder="Type">
                @error('type')
                    <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
            </p>

            <p>
                <input type="submit" value="Salva">
            </p>

        </form>
    </div>
</section>

@endsection