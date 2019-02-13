@extends('layouts.app')
@section('content')
    <section class="section-properties">
            <div class="properties">
                <div class="properties-wrapper">
                    @if ($post)
                            @include('partials.property')
                    @endif
                </div>
            </div>
    </section>
@endsection