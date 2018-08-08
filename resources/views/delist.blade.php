@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Select Entry to delete</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{session('status')}}
            </div>
            @endif

              <div>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barber &nbsp;&nbsp;&nbsp;&nbsp;Service &nbsp;&nbsp;&nbsp;&nbsp;price<br></p>
                  <ul>
                    @foreach ($entries as $entry)
                      <button type="button" name="button"><a href="{{route('delete_entry',$entry->id)}}">delete</a></button> &nbsp;&nbsp;&nbsp; {{$entry->barber}}&nbsp;&nbsp;&nbsp;&nbsp;{{$entry->service}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$entry->price}}<br>
                    @endforeach
                  </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
