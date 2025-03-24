@extends('Components.layout')

@section('content')


<!-- Login Form -->
<div class="login-container">
    <h2>LOGIN</h2>

    @if ($errors->any())
        <div style="background-color:#f44336; color:white; padding:10px; margin-bottom:10px;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <label for="email" id="label">Email Account</label>
        <input type="email" name="email" id="email" placeholder="Enter email" required />

        <label for="password" id="label">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter Password" required />

        <div class="options">
            <div class="options-container">
                <input type="checkbox" id="showPassword" onclick="togglePassword()" />
                <label for="showPassword" id="show-password">Show Password</label>
            </div>
            <a href="#">Forgot Password</a>
        </div>

        <div class="submit">
            <button type="submit" id="submit">LOGIN</button>
        </div>

        <div class="create-account">
            <a href="{{ url('register') }}">Create Account</a>
        </div>
    </form>
</div>

<img src="images/login-overlay.png" id="login-overlay" alt="">

<script>
    function togglePassword() {
        const pass = document.getElementById("password");
        pass.type = pass.type === "password" ? "text" : "password";
    }
</script>

@endsection
