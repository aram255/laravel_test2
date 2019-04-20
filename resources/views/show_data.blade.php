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
  <h2>@lang('msg.Contact')</h2>
              
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Namde</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $contacy_view->id }}</td>
        <td>{{ $contacy_view->name_am }}</td>
        <td>{{ $contacy_view->email }}</td>
        <td>{{ $contacy_view->phone }}</td>
        
      </tr>
    </tbody>
  </table>
</div>



  @endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection