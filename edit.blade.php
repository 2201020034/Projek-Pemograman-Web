@extends('layouts.app')

@section('content')
    <h2>Edit Customer</h2>

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

    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Customer Name</label>
            <input type="text" name="name" value="{{ $customer->name }}" class="form-control" placeholder="Customer Name" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Customer Image</label>
            @if($customer->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $customer->image) }}" alt="{{ $customer->name }}" width="150">
                </div>
            @endif
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
