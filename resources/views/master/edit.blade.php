<!-- master/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Record</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('master.update', $record->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $record->name }}" required>
        </div>
        <div class="form-group">
            <label for="qty">Quantity:</label>
            <input type="number" name="qty" class="form-control" value="{{ $record->qty }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" class="form-control" value="{{ $record->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
