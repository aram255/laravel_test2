@extends('layouts.base')

@section('title', 'Page Title')

@section('header')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection