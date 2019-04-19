@extends('layouts.base')

@section('title', 'Page Title')


<!-- style connect syntax -->
@push('css')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endpush

@push('js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush
<!-- style connect syntax -->

@section('header')
    @parent

   <!--   redirect maassige -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <!--   redirect maassige -->

<div class="container">
  <h2>Hoverable Dark Table</h2>
  <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Namde</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      {{config('app.locale')}}
    	@foreach($all_contacts as $contact)
      <tr>
        <td>{{ $contact->id }}</td>
        <td contenteditable="true">{{ $contact->name_am }}</td>
        <td contenteditable="true">{{ $contact->email }}</td>
        <td contenteditable="true">{{ $contact->phone }}</td>
        <th>
          <a href="{{ URL::to('edit-contact-view/'.$contact->id) }}" class="btn btn-warning">Edit |</a>
          <a href="{{URL::to('show-data/'.$contact->id) }}" class="btn btn-info">View |</a>
          <a href="{{URL::to('delete-contact/'.$contact->id)}}" class="btn btn-danger">Delete</a>
        </th>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>


@endsection

@section('footer')
    <p>This is my body footer.</p>
   
@endsection