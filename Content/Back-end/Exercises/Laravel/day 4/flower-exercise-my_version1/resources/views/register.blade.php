@extends('myTemplate')

@section('title', 'Register new account')

@section('content')
    <h2>Register</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="post">
        @csrf

        <label for="name">Username</label>
        <input type="text" name="username" id="username" placeholder="Username"><br>

        <label for="price">Email</label>
        <input type="text" name="email" id="email" placeholder="Email"><br>

        <label for="price">Password</label>
        <input type="text" name="password" id="password" placeholder="Password"><br>

        <input type="submit" value="Register">
    </form>


@endsection
