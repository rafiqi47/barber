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
                <form  action ="{{route('submit')}}" method = "POST">Title<br>
                  @csrf
                    <input type="text" name="title"><br><br>
                    <p>Barber name</p>
                    <textarea name="content"></textarea><br>
                    <input type="Submit" name="submit">
                  <form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
