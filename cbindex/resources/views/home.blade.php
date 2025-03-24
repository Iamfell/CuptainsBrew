@extends('Components.layout')

@section('content')


<div class="image-container">
    <img src="images/getstarted.png" alt="getstarted" id="getstarted" >

</div>
<div class="centered-home">
    <h1>Captain's Brew Cafe</h1>
    <p>Where every sip is an adventure. we've got your brew covered. <br>
        Drop anchor, relax, and let your coffee journey begin! </p>


<a href="{{ route('login') }}" class="centered-button">Get Started</a>



</div>

<div class="menu-image-container">
    <img src="images/gsmenu.png" alt="gs-menu" id="gsmenu" >
    <div class="centered-menu">
    <h1>MENU</h1>
    <p>Where every sip is an adventure. we've got your brew covered. <br>
        Drop anchor, relax, and let your coffee journey begin! </p>
</div>
</div>


@endsection
