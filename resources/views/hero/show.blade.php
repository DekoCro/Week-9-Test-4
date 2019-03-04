@extends('layouts/app')

@section('content')
<div class="page page-hero">

    <section class="info">

        <img class="portrait" src="{{ asset('img/'.$hero->slug.'.jpg') }}" alt="">

        <div class="data">
            <h1>{{ $hero->name }}</h1>

            <div class="story">
                {!! nl2br($hero->backstory) !!}
            </div>
        </div>

        <div class="availability">
            <h2>Availability</h2>
            From {{ date('g:i A', strtotime($hero->available_from)) }} to {{ date('g:i A', strtotime($hero->available_until)) }}.

            <div class="status unavailable">Current status: <span>Unavailable</span></div>
        </div>

    </section>

    <section class="emergency-report">
        <h2>Report an emergency</h2>

        <form action="" method="post">

            <input type="text" name="subject" placeholder="Cause of emergency">

            <textarea name="description" placeholder="Thorough description"></textarea>

            <input type="submit" value="Send to the Watchtower">
        </form>
    </section>

</div>
@endsection
