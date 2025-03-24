<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuptain's Brew | Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <img src="images/LOGO.png" id="logo" alt="cuptainsbrewlogo">

    <nav class="button-container" id="nav-menu">
        <a href="{{ url('/') }}" class="nav-button">Home</a>
        <a href="{{ url('/menu') }}" class="nav-button">Menu</a>
        <a href="{{ url('/career') }}" class="nav-button">Career</a>
        <a href="{{ url('/about') }}" class="nav-button">About Us</a>
    </nav>
</header>

<div class="register-container">
    <h2>Register</h2>
    <form class="form" method="POST" action="{{ url('register') }}">
        @csrf

        <label for="name" id="label">Name</label>
        <input id="name" type="text" name="name" required>

        <label for="email" id="label">Email Address</label>
        <input id="email" type="email" name="email" required>

        <label for="password" id="label">Password</label>
        <input id="password" type="password" name="password" required>

        <label for="password-confirm" id="label">Confirm Password</label>
        <input id="password-confirm" type="password" name="password_confirmation" required>

            <button type="submit" class="centered-button"> Register</button>

    </form>
</div>

</body>
</html>
