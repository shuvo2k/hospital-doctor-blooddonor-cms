@extends('layouts.app')

@section('title', '')

@section('content')
    @foreach($blogs as $blog)
        {!! $blog->content !!}
    @endforeach
@endsection