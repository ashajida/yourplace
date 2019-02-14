@extends('layouts.app')
@section('content')
    <section class="section-search-results">
            <div class="wrapper">
                <h4 class="filter-btn">Filter</h4>
                 @include('partials.filter-search-form')
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