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
    <title>Dashboard</title>
</head>
<body>
<h1>Dashboard Page</h1>
<div class="history mt-4">
    <ul>
        @if(count($services) > 0)
            <div class="container">
                <div class="row">

                    @foreach($services as $service)

                        <div class="card border-secondary m-3 col-4" style="max-width: 18rem;">

                            <div class="card-header">Header</div>
                            <div class="card-body text-secondary">
                                <h5 class="card-title">{{$service->title}}</h5>
                                <p class="card-text">{{$service->description}}</p>
                                <a  href="/service_details/{{$service->id}}" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @else
            <p>There is no services right now, add new one!</p>
        @endif
    </ul>
</div>
{{$services->links()}};
</body>
</html>
