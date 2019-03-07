@extends('layouts.app')
@section('content')
<section class="section-create-post">
    <div class="wrapper">
        <div class="creat-post">
            <div class="create-post-wrapper">
                <h2>Add new property</h2>
                <form action="/posts" method="post" encrypt="multipart/form-data">
                    @csrf
                    <div class="f-group">
                        <label>Select image</label><br/>
                        <input type="file" name="cover_image" accept="image/png,/image/jpeg, image/jpg">
                    </div>
                    <div class="f-group">
                        <label>Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="f-group">
                        <label>Postcode</label>
                        <input type="text" name="postcode">
                    </div>
                    <div class="f-group">
                        <label>Address</label>
                        <input type="text" name="address">
                    </div>
                    <div class="f-group">
                        <label>Bedrooms</label>
                        <input type="text" name="bedrooms">
                    </div>
                    <div class="f-group">
                        <label>Bathrooms</label>
                        <input type="text" name="bathrooms">
                    </div>
                    <div class="f-group">
                        <label>Body</label>
                        <textarea name="body"></textarea>
                    </div>
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection