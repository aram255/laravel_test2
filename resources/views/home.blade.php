@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
//  jnjel sessian
//session()->pull('key1');
//Session::forget('key1');
//Session::flush();
//$data = Session::regenerate('key1');
$data = session()->get('key1'); //Session::All();


   // DD($data);
   ?>
@endsection
