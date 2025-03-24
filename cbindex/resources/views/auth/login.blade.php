<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cuptain's Brew | Login</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="login-header">
    <img src="images/LOGO.png" id="logo" alt="cuptainsbrewlogo">

    <!-- "nav-menu" is for mobile
    <button id="menu-toggle" class="hamburger-menu"> ☰  </button> -->

    <nav class="button-container" id="nav-menu">
        <a href="{{ url('/') }}" class="nav-button {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/menu') }}" class="nav-button {{ request()->is('menu') ? 'active' : '' }}">Menu</a>
        <a href="{{ url('/career') }}" class="nav-button {{ request()->is('career') ? 'active' : '' }}">Career</a>
        <a href="{{ url('/about') }}" class="nav-button {{ request()->is('about') ? 'active' : '' }}">About Us</a>
    </nav>
    </header>

  <!-- Login Form -->
  <div class="login-container">
    <h2>LOGIN</h2>

    @if ($errors->any())
        <div style="background-color:#f44336; color:white; padding:10px; margin-bottom:10px;">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="/login" method="POST" class="login-form">
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
        <button type="submit" id="submit">LOGIN</button></div>

      <div class="create-account">
        <a href="{{ url('register') }}" >Create Account</a>
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

</body>

</html>
