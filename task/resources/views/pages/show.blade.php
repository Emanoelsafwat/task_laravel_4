<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1 style="text-align: center">View Product</h1> <br>

    <div class="container">
        <div class="alert alert-danger" role="alert">
            Id : {{$detail->id}}
            <br>

            Name : {{$detail->name}}

            <br>

            Price : {{$detail->price}}
            <br>

            Count : {{$detail->count}}
            <br>

            Category : {{$detail->category}}
            <br>

            Expire_Date : {{$detail->expire_date}}
            <br>
        </div>
        <a class="btn btn-success" href="{{url('product/index')}}">
            List
        </a>
    </div>



</body>
</html>
