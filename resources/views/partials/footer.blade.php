<footer>
    <div class="container">
        <div class="sign-up">SIGN-UP NOW</div>
        <div class="follow-us">
            <h3>FOLLOW US</h3>
            @foreach ($socials as $key => $single_social)
            <img src="{{Vite::asset('resources/img/' . $single_social)}}" alt="">
            @endforeach
        </div>
    </div>
</footer>