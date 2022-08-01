@extends('layouts.app')

@section('video')
    <div  style="margin-bottom: 25px; border: 2px solid white; border-radius: 25px; background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,89,1) 100%);"><h3 style="text-align: center; color: white; "> Video FC Barselona</h3> </div>


    <div class="row d-flex justify-content-between">

        @foreach($videos as $video )
            <div style="margin-bottom: 50px; box-shadow: 10px 5px 5px #343333; color: white; background-color: #212020; border-radius:25px 25px 0 0;  padding-top:15px ;border: 2px solid white;" class="card col-5" >

                <video style="border:1px solid white; border-radius:25px ;width: 100% ; height: 450px"    controls>
                    <source src="{{ asset('/storage/'.$video->video)}}">
                </video>
                <div class="card-body">
                    <h5 class="card-title">{{$video->name}}</h5>
                    <p class="card-text">{{$video->body}}</p>

                </div>
            </div>

        @endforeach
    </div>
    <div class="d-flex justify-content-center">{{ $videos->links() }}</div>
@endsection
