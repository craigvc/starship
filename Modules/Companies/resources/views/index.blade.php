@extends('companies::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('companies.name') !!}</p>
@endsection