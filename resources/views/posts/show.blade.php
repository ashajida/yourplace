@extends('layouts.app')
@section('content')
    <h2>Posts</h2>
    <section class="section-properties">
            <div class="properties">
                <div class="properties-wrapper">
                    @if (empty($post))
                        <div class="empty-posts">
                            No posts found
                        </div>
                    @else()
                        @foreach ($posts as $post )
                            <div class="properties-content-wrapper">
                                <h3>{{ $post->title }}</h3>
                                <p>{{ $post->postcode }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
    </section>
@endsection