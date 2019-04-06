@extends('layouts.base')

@section('title', 'Page Title')

<!-- style connect syntax -->
@push('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush
<!-- style connect syntax -->

@section('header')
    @parent

<!-- validate masseage -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (\Session::get('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif  
<!-- validate masseage -->

   <h3>Contact Form</h3>

<div class="container">
  <form action="{{url('edit-contact/'.$contact_view->id)}}" method="post">
  	{{csrf_field()}}
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" value="{{ $contact_view->name }}" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="{{ $contact_view->email }}" placeholder="Your last email..">

    <label for="phone">Phone</label>
    <input type="text" id="phone" value="{{ $contact_view->phone }}" name="phone" placeholder="Your last phone..">

 
    <input type="submit" value="Submit">
  </form>
</div>

@endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection