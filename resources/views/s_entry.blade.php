@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Entries</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{session('status')}}
              </div>
              @endif

              <div>
              <p>Barber &nbsp;&nbsp;&nbsp;&nbsp;Service &nbsp;&nbsp;&nbsp;&nbsp;price<br></p>


              @foreach($entries as $entry)

              <p>{{$entry->barber}}&nbsp;&nbsp;&nbsp;&nbsp;{{$entry->service}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$entry->price}}<br></p>
              @endforeach
              </div>
            
              <br><br><br>
              <p>Total</p>
              {{$total}}
          </div>
        </div>
      </div>
    </div>

  @endsection
