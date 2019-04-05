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

   

<div class="container">
  <h2>Hoverable Dark Table</h2>
  <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Namde</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($all_contacts as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>


@endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection