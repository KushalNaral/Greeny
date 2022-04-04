@extends('layouts.app')

@extends('layouts.header')

<section class="error-part">
    <div class="container">
        <h1>Non Matching Pass</h1>
        <img class="img-fluid" src="{{asset('images/error.png')}}" alt="error">
        <h3>ooopps! seems like the passwords dont match</h3>
        <p>It looks like didnt enter the correct passwords.</p>
        <a href="{{route('venRegister')}}">go back</a>
    </div>
</section>

@include('layouts.footer')
