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
                                <p class="price">&#163;{{ $post->price }}</p>
                                <div class="icon">
                                    <i class="fas fa-heart"></i>
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
                            <div class="message-form">
                                <h5>Contact Agent<h5>
                                <form id="message-form">
                                    <textarea type="text" name="message" form="message-form"></textarea>
                                    <input type="submit">
                                    <input hidden value="">
                                </form>
                            </div>   
                                @endif
                            </div>
                        </div>
    </section>
@endsection