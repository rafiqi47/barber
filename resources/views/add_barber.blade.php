@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Add Barber</div>

            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{session('status')}}
                </div>
                @endif

              <div>
                <form action ="{{route('add_barber')}}" method = "POST"><br>
                  @csrf
                    <p>Barber Name</p>
                    <input type="text" name="name"><br><br>
                    <p>Barber Phone Number</p>
                    <input type="text" name="phonenumber"><br><br>
                    <p>Barber Email Address</p>
                    <input type="text" name="email"><br><br>
                    <input type="Submit" name="submit">
                   <form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
@endsection
