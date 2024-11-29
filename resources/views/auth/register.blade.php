@extends('layouts.auth') <!-- Extends the layout -->

@section('title', 'Register') <!-- Sets the page title -->

@section('style')
<style>
    html,
    body {
        height: 100%;
    }

    .form-signin {
        max-width: 330px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
@endsection

@section('content')
<main class="form-signin w-100 m-auto">
    <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <img class="mb-4 " src="\assets\img\todoLogo.png" alt="" width="150" height="57">
        <h1 class="h3 mb-3 fw-normal">Create Your Account</h1>

        <div class="form-floating">
            <input name="full_name" type="text" class="form-control" id="floatingInput" placeholder="Enter Your Name">
            <label for="floatingInput">Full Name</label>
            @error('full_name')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            @error('email')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
        <div class="form-floating" style=" margin-bottom: 10px;">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2024–2026</p>
    </form>
</main>
@endsection