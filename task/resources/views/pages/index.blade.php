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

<h1 style="text-align: center">Product List</h1> <br>

@if(session()->has('success'))
    <div class="alert alert-danger" role="alert">
    {{session()->get('success')}}
    </div>
@endif
<div class="container">
    <table class="table table-striped table-light">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Count</th>
            <th scope="col">Category</th>
            <th scope="col">Expire_Date</th>
            <th scope="col">View Data</th>
            <th scope="col">Delete Data</th>
            <th scope="col">Edit Data</th>


        </tr>
        </thead>
        <tbody>
        @foreach( $details as $detail)
        <tr>
            <th scope="row">{{$detail->id}}</th>
            <td>{{$detail->name}}</td>
            <td>{{$detail->price}}</td>
            <td>{{$detail->count}}</td>
            <td>{{$detail->category}}</td>
            <td>{{$detail->expire_date}}</td>
            <td>
                <a href="{{url('product/show/' . $detail->id )}}" class="btn btn-primary">View</a>
            </td>
            <td>
                <a href="{{url('product/destroy/'. $detail->id)}}" class="btn btn-danger">Delete</a>
            </td>
            <td>
                <a href="{{url('product/edit/' . $detail->id)}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach


        </tbody>
    </table>
</div>



</body>
</html>
