@extends('layouts.app')
@section('content')
    <section class="section-view-post">
        <div class="view-post">
            <div class="wrapper">
                <div class="view-post-wrapper">
                    {{ $post->title }}
                </div>
            </div>
        </div>
    </section>
@endsection