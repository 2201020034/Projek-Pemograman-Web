@extends('layouts.app')

@section('content')
    <h2>Add New Customer</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Customer Name</label>
            <input type="text" name="name" class="form-control" placeholder="Customer Name" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Customer Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
