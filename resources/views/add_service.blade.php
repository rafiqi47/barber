@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Add Service</div>

            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{session('status')}}
                </div>
                @endif

              <div>
                <form action ="{{route('add_service')}}" method = "POST"><br>
                  @csrf
                    <p>Service Name</p>
                    <input type="text" name="name"><br><br>
                    <p>Service Price</p>
                    <input type="text" name="price"><br><br>
                    <input type="Submit" name="submit">
                   <form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
@endsection
