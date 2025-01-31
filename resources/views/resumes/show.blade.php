@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-inline-flex">
        <div>
            <img style="width: 120px;" src="{{ $resume->picture }}">
        </div>
        <div class="me-4 ">
            <div>
                <h1>{{ $resume->title }}</h1>
            </div>
            <div>
                <h2>{{ $resume->name }}</h2>
            </div>
            <div class="d-inline-flex">
                <div class="fw-bold me-3 ">
                    <a href="mailto:{{ $resume->email }}">{{ $resume->email }}</a>
                </div>
                <div class="fw-bold">
                    <a href="{{ $resume->website }}">{{ $resume->website }}</a>
                </div>
            </div>
        </div>
    </div>

    @if (isset($resume->about))
        <div class="mt-3">
            <p class="fw-bold">{{ $resume->about }}</p>
        </div>
    @endif
</div>
@endsection
