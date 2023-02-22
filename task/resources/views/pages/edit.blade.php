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

<h1 style="text-align: center">Edit form</h1> <br>

<div class="container">
    <form action="{{url('product/update/' . $detail->id)}}" method="post">
        @csrf

        <div class="form-group">
            <label for="input_name">Name</label>
            <input type="text"

                   class="form-control" id="input_name" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
        </div> <br>

        <div class="form-group">
            <label for="input_price">Price</label>
            <input type="number" class="form-control" id="input_name" name="price" aria-describedby="emailHelp" placeholder="Enter Your price">
        </div><br>

        <div class="form-group">
            <label for="input_count">Count</label>
            <input type="number" class="form-control" id="input_count" name="count" aria-describedby="emailHelp" placeholder="Enter product count">
        </div><br>

        <div class="form-group">
            <label for="input_category">Category</label>
            <input type="text" class="form-control" id="input_category" name="category" aria-describedby="emailHelp" placeholder="Enter Your category">
        </div><br>

        <div class="form-group">
            <label for="input_Expire_date">Expire_date</label>
            <input type="date" class="form-control" id="input_expire_date" name="expire_date" aria-describedby="emailHelp" placeholder="Enter expire_date">
        </div> <br>

        <button type="submit" class="btn btn-primary px-2 px-5">
            Submit
        </button>

    </form>
</div>


</body>
</html>
