@extends('layouts.app')
@section('content')
<section class="section-user-profile">
    <div class="user-profile">
        <div class="wrapper">
            <div class="profile">
                {{  Auth::user()->name }}            
            </div>
            <div>
                <a href="/dashboard/create" class="_btn">Add property</a>
            </div>
        </div>
    </div>
</section>
<section class="section-property-posts">
    <div class="property-posts">
        <div class="wrapper">
            <div class="property-posts-wrapper">
                <div class="posts-table">
                @if(count($posts) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Postcode</th>
                                <th scope="col">Address</th>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td><img style="width: 150px; height: 150px;"src="{{ asset("img/$post->image_cover") }}"></td>
                                <td>{{ $post->postcode }}</td>
                                <td>{{ $post->address }}</</td>
                                <td>{{ $post->title }}</</td>
                                <td><a href="/dashboard/post/{{ $post->id }}" class="_btn">View</a></</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    @else
                        <p>You have no posts<p>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
