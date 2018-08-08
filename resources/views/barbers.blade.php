@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Barbers</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{session('status')}}
              </div>
              @endif

              <div>
              <p>Name &nbsp;&nbsp;&nbsp;&nbsp;Phone &nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;added on<br></p>
              @foreach($barbers as $barber)

              <p>{{$barber->name}}&nbsp;&nbsp;&nbsp;&nbsp;{{$barber->phonenumber}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$barber->email}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$barber->created_at}}<br></p>
              @endforeach
              </div>
              <br><br><br>
              <button type="button"><a href='add_barber'>Add New Barber</a></button><br><br>
              <button type="button"><a href='ulist'>Update Barber Infornation</a></button><br><br>
              <button type="button"><a href='dlist'>Remove Barber</a></button><br><br>

          </div>
        </div>
      </div>
    </div>

  @endsection
