@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Services</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{session('status')}}
              </div>
              @endif

              <div>
              <p>Service&nbsp;&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;&nbsp;added on<br></p>
              @foreach($services as $service)

              <p>{{$service->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$service->price}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$service->created_at}}<br></p>
              @endforeach
              </div>
              <br><br><br>
              <button type="button"><a href='add_service'>Add New Service</a></button><br><br>
              <button type="button"><a href='slist'>Update Service Infornation</a></button><br><br>
              <button type="button"><a href='dslist'>Remove Service</a></button><br><br>

          </div>
        </div>
      </div>
    </div>

  @endsection
