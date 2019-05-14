@extends('layouts.app')
@section('content')
<section class="section-user-profile">
    <div class="user-profile">
        <div class="wrapper">
            <div class="profile">
                <div class="img-wrapper-dashboard">
                   <img src="/storage/cover_images/{{$user->cover_image}}">
                </div>
                <div class="name">
                    <p>{{  ucfirst(Auth::user()->name) }}&nbsp;{{  ucfirst(Auth::user()->lastname) }}</p>
                    <div class="user-location">
                        <div class="icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 430.114 430.114" style="enable-background:new 0 0 430.114 430.114;" xml:space="preserve">
                            <g>
                                <path id="Facebook_Places" d="M356.208,107.051c-1.531-5.738-4.64-11.852-6.94-17.205C321.746,23.704,261.611,0,213.055,0   C148.054,0,76.463,43.586,66.905,133.427v18.355c0,0.766,0.264,7.647,0.639,11.089c5.358,42.816,39.143,88.32,64.375,131.136   c27.146,45.873,55.314,90.999,83.221,136.106c17.208-29.436,34.354-59.259,51.17-87.933c4.583-8.415,9.903-16.825,14.491-24.857   c3.058-5.348,8.9-10.696,11.569-15.672c27.145-49.699,70.838-99.782,70.838-149.104v-20.262   C363.209,126.938,356.581,108.204,356.208,107.051z M214.245,199.193c-19.107,0-40.021-9.554-50.344-35.939   c-1.538-4.2-1.414-12.617-1.414-13.388v-11.852c0-33.636,28.56-48.932,53.406-48.932c30.588,0,54.245,24.472,54.245,55.06   C270.138,174.729,244.833,199.193,214.245,199.193z" fill="#2ee4b1"/>
                            </g>
                        </svg>                   
                        </div>
                        <p>{{  ucfirst(Auth::user()->city) }}</p>
                    </div>
                    <p>Acount Type: {{  ucfirst(Auth::user()->user_type) }}<p>
                </div>
                <a class="change-profile-pic" href="/users/{{ Auth::user()->id }}/update-profile">Update Picture</a>      
            </div>
            @if($user->user_type === "agent")
            <div>
                <a href="/posts/create" class="_btn">Add property</a>
            </div>
            @endif
        </div>
    </div>
</section>
<section class="section-property-posts">
    <div class="property-posts">
        <div class="wrapper">
            <div class="property-posts-wrapper">
                <div class="posts-table">
                @if($user->user_type === "agent")
                @if(count($posts) > 0)
                    <h2>Property Listing</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Locations</th>
                                <th scope="col">Address</th>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td><img style="width: 150px; height: 150px;" src="/storage/cover_images/{{$post->image_cover}}"></td>
                                <td>{{ $post->location }}</td>
                                <td>{{ $post->address }}</</td>
                                <td>{{ $post->title }}</</td>
                                <td><a href="/posts/{{ $post->id }}" class="_btn">View</a></td>
                                  <td>
                                    <form method="post" action="/posts/{{ $post->id }}">
                                        @CSRF
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="danger" value="Delete"/>
                                    </form>
                                  </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    @else
                        <p>You have no posts<p>
                @endif
                @endif
                @if($user->user_type === "standard")
                    @if(count($saved_posts) > 0)
                        @include('partials.saved-properties')
                        @else
                        <p class="success">No saved properties found</p>
                    @endif
                @endif   
                 @if($user->user_type === "admin")
                    @if(count($users_collection) > 0)
                        @include('partials.admin-table')
                        @else
                        <p class="success">No saved properties found</p>
                    @endif
                @endif   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
