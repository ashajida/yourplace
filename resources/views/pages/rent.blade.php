@extends('layouts.app')
@section('content')
    <section class="section-search-form">
        <div class="search-form-wrapper">
            <h2>Property to rent</h2>
            <div class="search-form-content">
                @include('partials.rent-search-form')
            </div>
        </div>
    </section>
@endsection