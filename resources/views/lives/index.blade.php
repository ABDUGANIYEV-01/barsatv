@extends('layouts.app')

    @section('live')
        <div style="color: white; padding: 20px; background-color: white;" class="row d-flex justify-content-between">
@foreach($lives as $live)





<div style="margin-bottom: 20px; border-radius: 10px; align-items: center; display: flex ; padding: 20px; background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,89,1) 100%);   justify-content: space-between" class="col-5">
    <div >{{$live->day}}</div>
    <div >{{$live->firstclub}}</div>
    <div>{{$live->account}}</div>
    <div>{{$live->secondclub}}</div>
    <a style="text-decoration: none; color: white; border-radius: 5px; border:1px solid greenyellow ; padding: 5px; background-color:#04b904;" href="{{ route('lives.show', ['life'=> $live->id]) }}">All</a>
</div>



@endforeach
</div>
@endsection
