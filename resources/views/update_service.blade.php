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
                <form  action ="{{route('update_service',$services->id)}}" method = "POST"><br>
                  @csrf
                    <p>name</p>
                    <input type="text" name="name" value="{{$services->name}}"><br><br>
                    <p>email</p>
                    <input type="text" name="price" value="{{$services->price}}"><br><br>

                    <input type="Submit" name="submit">
                  <form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
