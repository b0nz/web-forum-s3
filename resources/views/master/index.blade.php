<!-- master/index.blade.php -->
@extends('../layouts.app')

@section('content')
    <h1>Master Records</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('master.create') }}" class="btn btn-primary">Create New Record</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($records as $record)
                <tr>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->qty }}</td>
                    <td>{{ $record->price }}</td>
                    <td>
                        <a href="{{ route('master.edit', $record->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('master.destroy', $record->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
