@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Select Service</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{session('status')}}
            </div>
            @endif
              <ul>

            @foreach ($barbers as $barber)
              <p>{{ $barber-> name}} performed which service?</p><br><br>
                  @foreach ($services as $service)
                    <li>
                      <a href="{{route('add_entry_entry',[$barber->id,$service->id])}}">
                        {{ $service->name}}
                      </a>
                    </li>
                  @endforeach
                @endforeach
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
