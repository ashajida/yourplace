@extends('layouts.app')
@section('content')
    <section class="section-search-results">
            <div class="wrapper">
               
                 {{-- @include('partials.filter-search-form') --}}
                 <h4 class="filter-btn">Results</h4>
                <div class="results">
                    @if ($posts)
                        @foreach ($posts as $post )
                            @include('partials.property')
                        @endforeach
                    @else
                        <div class="empty-posts">
                            No posts found
                        </div>
                    @endif
                </div>
            </div>
    </section>
@endsection