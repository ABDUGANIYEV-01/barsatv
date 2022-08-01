@extends('layouts.app')

@section('index')
    <div  style="margin-bottom: 25px; border: 2px solid white; border-radius: 25px; background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,89,1) 100%);"><h3 style="text-align: center; color: white; "> News FC Barselona</h3> </div>
   <div  class="row d-flex justify-content-between">
   @foreach($ballnews as $ballnew)

           <div style="  box-shadow: 10px 5px 5px #343333; color: white; background-color: #212020; border-radius:25px 25px 0 0;  padding-top:15px ;
            margin: 20px; border: 2px solid white;" class="row  col-3">
               <img  style="border:1px solid white; border-radius:25px ; width: 100% ; height: 300px" src="{{ asset('/storage/'.$ballnew->image) }}">
               <div class="card-body">
                   <h5 class="card-title">{{$ballnew->name}}</h5>
                   {{$ballnew->body}}
                   <p class="card-text"><small class="text-muted">{{$ballnew->created}}</small></p>
               </div>
           </div>


       @endforeach

       </div>
   <div class="d-flex justify-content-center">{{ $ballnews->links() }}</div>
@endsection
