@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Welcome to Shop</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{session('status')}}
            </div>
            @endif
            <button type="button"><a href='barbers'>Barbers</a></button><br><br>
            <button type="button"><a href='services'>Services</button><br><br>
            <button type="button"><a href='entries'>Entries</button><br><br>



          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
