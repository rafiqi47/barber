@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Posts</div>

            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{session('status')}}
                </div>
                @endif

              <div>
                <form  action ="{{route('update',$barbers->id)}}" method = "POST"><br>
                  @csrf
                    <p>name</p>
                    <input type="text" name="name" value="{{$barbers->name}}"><br><br>
                    <p>phone number</p>
                    <input type="text" name="phonenumber" value="{{$barbers->phonenumber}}"><br><br>
                    <p>email</p>
                    <input type="text" name="email" value="{{$barbers->email}}"><br><br>

                    <input type="Submit" name="submit">
                  <form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
