@extends('layout')

@section('content')
    <div class="animated-text">
        Welcome to <span></span>
    </div>

    <div class="content">
        <img src="{{ asset('images/game2.png') }}" alt="Icon 1" style="width: 450px; height: 420px;">
        <div class="text">
            <h3 class="blue"><i class="fa-solid fa-robot"></i>&nbsp;&nbsp;One Room at a Time, Please</h3>
            <p> Each booking is for one room at a time, so grab it for yourself or share with your fav people.</p>
            <br>
            <h3 class="yellow"><i class="fa-solid fa-clock"></i>&nbsp;&nbsp;&nbsp;Limit of 4 Hours per Booking</h3>
            <p> To make sure everyone gets a turn, each booking is limited to a max of 4 hours.</p>
            <br>
            <h3 class="blue"><i class="fa-regular fa-calendar"></i>&nbsp;&nbsp;&nbsp;Book Anytime, Rooms Open 24/7!</h3>
            <p> No need to check the clock—our rooms are open 24/7!</p>
            <br>
            <h3 class="yellow"><i class="fa-solid fa-circle-check"></i>&nbsp;&nbsp;&nbsp;Confirm Within 15 Minutes of Arrival</h3>
            <p> Once you arrive, don’t forget to confirm within 15 minutes —better hurry!</p>
        </div>
    </div>
@endsection

@section('title')
    About
@endsection
