<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        <?php include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'public\assets\css\bootstrap.min.css'); ?>
        <?php include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'public\assets\css\style.css'); ?>
    </style>
    <title>scandiweb task</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/">Products</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/add-product">Add Product</a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron text-center">
  <h1 class="display-4 bg-danger py-3 my-5 text-white">Error Occurred ! :( </h1>
  <a class="btn btn-primary btn-lg" href="\" role="button">Back To Home</a>
</div>
</body>
</html>
