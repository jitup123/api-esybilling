@extends('dashboard::layouts.master')
@section('title') {!! config('dashboard.name') !!} @endsection

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('dashboard.name') !!}
    </p>
@endsection
