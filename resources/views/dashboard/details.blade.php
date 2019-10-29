<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="card">

    <div class="card-body">
        <h5>{{$one_service->title}}</h5>
        <p>{{$one_service->describtion}}</p>
        <p>{{$one_service->price}}</p>
        <p>{{$one_service->location}}</p>
        <p>{{$one_service->time}}</p>
        <p>{{$one_service->category}}</p>

    </div>
        <button style="width:200px " class="btn btn-success" href="">Proposal</button>

</div>

</body>
</html>
