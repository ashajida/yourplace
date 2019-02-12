@extends('layouts.app')
@section('content')
    <h2>Posts</h2>
    <section class="section-properties">
            <div class="properties">
                <div class="properties-wrapper">
                            <div class="properties-content-wrapper">
                                <h3>{{ $post->title }}</h3>
                                <p>{{ $post->postcode }}</p>
                            </div>
                </div>
            </div>
    </section>
@endsection