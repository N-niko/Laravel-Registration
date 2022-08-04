@extends('layout')

@section('page')

    
    <div style="width: 40%; min-width: 250px; margin: 20px;">
        <form method="POST" action="/loginuser">
            @csrf
            @error('main') <p class="alert alert-danger">{{ $message }}</p> @enderror
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email') <p class="alert alert-danger">{{ $message }}</p> @enderror
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            @error('password') <p class="alert alert-danger">{{ $message }}</p> @enderror
            <button class="btn btn-primary" style="margin: 5px;">Log In</button>
        </form>
    </div>

@endsection