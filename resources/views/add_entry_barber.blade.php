@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Select barber</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{session('status')}}
            </div>
            @endif
              <ul>
                @foreach ($barbers as $barber)
                <li>
                    <a href="{{route('add_entry_service',$barber->id)}}">
                    {{ $barber->name}}
                    </a>
                </li>
                @endforeach
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
