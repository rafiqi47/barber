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
              <p>Barber &nbsp;&nbsp;&nbsp;&nbsp;Service &nbsp;&nbsp;&nbsp;&nbsp;price&nbsp;&nbsp;&nbsp;&nbsp;added on<br></p>


              @foreach($entries as $entry)

              <p>{{$entry->barber}}&nbsp;&nbsp;&nbsp;&nbsp;{{$entry->service}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$entry->price}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$entry->created_at}}<br></p>
              @endforeach
              </div>



              <br><br><br>
              <button type="button"><a href='add_entry_barber'>Add Entry</a></button><br><br>
              <button type="button"><a href='tlist'>Single Entries</a></button><br><br>
              <button type="button"><a href='delist'>Remove Entry</a></button><br><br>

          </div>
        </div>
      </div>
    </div>

  @endsection
