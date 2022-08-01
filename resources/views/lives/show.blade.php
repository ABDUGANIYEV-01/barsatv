<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .clubicons{
            display: flex;
            align-items: center;
        }

        .clubiconimg{
            border-radius: 20px;
            width: 150px;
        }
    </style>
</head>
<body style="background: rgb(58,106,180);
background: linear-gradient(90deg, rgba(58,106,180,1) 0%, rgba(253,29,29,1) 50%, rgba(69,165,252,1) 100%);">
<div class="container " style="margin-bottom: 50px; margin-top: 50px; background-color: white; padding: 30px; border-radius: 25px; display: flex; align-items: center; justify-content: space-between;">
    
    <div class="clubicons" >
    <img class="clubiconimg" src="{{ asset('/storage/'.$id->firstclubimg)}}" >
    <h1>{{$id->firstclub}}</h1>
    </div>

    <div>

    <h1
    >{{$id->account}}</h1>

    </div>


    <div  class="clubicons" >
        <h1>{{$id->secondclub}}</h1>
    <img class="clubiconimg" src="{{ asset('/storage/'.$id->secondclubimg)}}" >

    </div>
</div>

<div style="margin-bottom: 50px; box-shadow: 10px 5px 5px #343333; color: white; background-color: #212020; border-radius:25px 25px 0 0;  padding-top:15px ;border: 2px solid white;" class="container">

        <video style="border:1px solid white; width: 100% ; height: 450px"    controls>
            <source src="{{ asset('/storage/'.$id->gol1)}}">
        </video>

    <div ><p>{{$id->gol1text}}</p></div>


</div>



</body>
</html>

