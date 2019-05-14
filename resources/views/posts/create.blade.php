@extends('layouts.app')
@section('content')
<section class="section-create-post">
    <div class="wrapper">
        <div class="creat-post">
            <div class="create-post-wrapper">
                <h2>Add new property</h2>
                
                <form  action="/posts" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="f-group">
                        <label>Select image</label><br/>
                        <input type="file" name="cover_image" accept=".jpg, .jpeg, .png" multiple>
                    </div>
                    <div class="form-wrapper">
                        <div class="group">
                    
                            
                            <div class="f-group">
                                <label>Title</label>
                                <input type="text" name="title">
                            </div>
                         <div class="f-group">
                                    <label>Bathrooms</label>
                                    <input type="text" name="bathrooms">
                                </div>
                                <div class="f-group">
                                    <label>Bedrooms</label>
                                    <input type="text" name="bedrooms">
                                </div>
                               
                            </div>
                            <div class="group">
                               
                                <div class="f-group">
                                    <label>Price</label>
                                    <input type="text" name="price">
                                </div>
                     
                            
                                <div class="f-group">
                                    <label>Property Type</label>
                                    <input type="text" name="property-type">
                                </div>
                                <div class="f-group">
                                    <label>Status</label>
                                    <input type="text" name="status">
                               
                        </div>
                    </div>
                           </div>
                            <div class="f-group">
                                   <div> 
                                        <label>Postcode</label><br />
                                        <span style="color: red;" id="err-message"></span>
                                        <input id="postcode_lookup" type="text" name="postcode_lookup">
                                    </div>
                                    <a id="btnPostcode" class="_btn" style="color: #fff; cursor: pointer;">Find Postcode</a>

                            </div> 
                                <div class="f-group address">
                                    <label>Address</label>
                                    <select id="address" type="text" name="address"><select>
                                </div>
                                <div class="f-group">
                                    <label>City</label>
                                    <input id="city" type="text" name="city">
                                </div>
                                <div class="f-group">
                                    <label>Longitude</label>
                                    <input id="longitude" type="text" name="longitude">
                                </div>
                                <div class="f-group">
                                    <label>Latitude</label>
                                    <input id="latitude" type="text" name="latitude">
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