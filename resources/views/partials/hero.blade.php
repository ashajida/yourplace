<div class="hero">
    <div class="hero-wrapper">
        <img src="{{ asset('img/hero-sm.jpg') }}" 
            srcset="{{ asset('img/hero-sm.jpg') }} 500w, {{ asset('img/hero-md.jpg') }} 1000w, {{ asset('img/hero-lg.jpg') }} 1500w" 
        alt="hero-image">
    </div>
    <div class="hero-search-form">
        <form action="/posts" method="get">
            <input type="text" name="location" placeholder="Search by location, eg. London">
            <input type="submit" value="Search">
        </form>
    </div>
</div>
