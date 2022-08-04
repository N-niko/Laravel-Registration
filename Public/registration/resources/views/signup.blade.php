@extends('layout')

@section('page')

    <div style="width: 40%; min-width: 250px; margin: 20px;">
        <form method="POST" action="/register">
            @csrf
            <label for="name" class="form-label">User Name</label>
            <input type="text" class="form-control" name="name" placeholder="User Name" value="{{ old('name') }}">
            @error('name') <p class="alert alert-danger">{{ $message }}</p> @enderror
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email') <p class="alert alert-danger">{{ $message }}</p> @enderror
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            @error('password') <p class="alert alert-danger">{{ $message }}</p> @enderror
            <button class="btn btn-primary" style="margin: 5px;">Register</button>
        </form>
    </div>

@endsection