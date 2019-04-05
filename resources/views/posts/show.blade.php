@extends('layouts.app')
@section('content')
    <section class="section-signal-property">
            <div class="single-property">
                <div class="property-wrapper">
                    @if ($post)
                            <h2>{{ $post->title }}</h2>
                            <figure class="single-img-wrapper"><img src="/storage/cover_images/{{$post->image_cover}}"></figure> 
                            <div class="property-bedroom-bathroom">
                            </div>
                                <div class="price-icon">
                                    <p class="price">&#163;{{ $post->price }}</p>
                                    <div class="save-icon">
                                        <form method="post" action="/saved-posts">
                                            @CSRF
                                            <input id="post_id" name="post_id" value={{ $post->id }} hidden>
                                            <button id="btn-save" type="submit"><i class="fas fa-heart"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <p>{{ $post->address }}</p>
                                <p>{{ $post->location }}</p>
                                <div class="single-property-description">
                                <p>{{ $post->bedrooms }} Bedroom</p>
                                <p>{{ $post->bathrooms }} Bathroom</p>
                                <h4>Full description</h4>
                                <p>{{ $post->body }}<p>
                                <img style="width: 100px; height: 100px;" src="/storage/cover_images/{{$agent->cover_image}}">
                                <p>{{ $agent->name }}&nbsp;{{ $agent->lastname }}</p>
                            </div>
                            <div id="messenger" class="message-form">
                                <h5>Contact Agent</h5>
                                <Messenger :data="data" />
                            </div>   
                                @endif
                            </div>
                        </div>
    </section>
@endsection