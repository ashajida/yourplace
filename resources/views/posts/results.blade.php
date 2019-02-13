@extends('layouts.app')
@section('content')
    <section class="section-search-results">
            @include('partials.filter-search-form');
            <div class="wrapper">
                <div class="results">
                    @if (!$posts)
                        <div class="empty-posts">
                            No posts found
                        </div>
                    @else()
                        @foreach ($posts as $post )
                            @include('partials.property')
                        @endforeach
                    @endif
                </div>
            </div>
    </section>
@endsection