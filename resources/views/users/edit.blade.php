@extends('layouts.app')
@section('content')
<section class="section-edit-user">
<div class="container">
    <div class="row justify-content-center auth-form">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile Picture') }}</div>

                <div class="card-body">
                        <form  action="/users/update-pic/{{ $id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="f-group">
                                <label>Select image</label><br/>
                                <input type="file" name="cover_image" accept=".jpg, .jpeg, .png" multiple>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection