<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <style>
        <?php include(dirname(__DIR__, 3).DIRECTORY_SEPARATOR.'public\assets\css\bootstrap.min.css'); ?>
        <?php include(dirname(__DIR__, 3).DIRECTORY_SEPARATOR.'public\assets\css\style.css'); ?>
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script  src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script type = "text/javascript" src='../../../public/assets/js/add.js'></script>

</head>
<body class="container">
<header>
    <div class="row">
        <div class="col header-left">
            <h2>Product Add</h2>
        </div>
        <div class="col header-right">
            <div class="float-end">
                <a class="btn btn-primary" href="/add-product">ADD</a>
                <a class="btn btn-danger"  id="delete-product-btn">MASS DELETE</a>
            </div>
        </div>
    </div>
    <?php if(isset($success)): ?>
        <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
    <?php endif; ?>
    <?php if(isset($error)): ?>
        <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
    <?php endif; ?>
    <hr class="separator">
</header>
<main>
    <form id="product_form" action="/delete" method="post">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-sm-3">
                    <div class="card product-card">
                        <div class="card-body">
                            <label>
                                <input type="checkbox" class="delete-checkbox"
                                       name="product-<?php echo $product['id']; ?>"
                                       value="<?php echo $product['id']; ?>">
                            </label>
                            <div class="product-card-body">
                                <p class="product-card-text"><?php echo $product['sku']; ?></p>
                                <p class="product-card-text"><?php echo $product['name']; ?></p>
                                <p class="product-card-text"><?php echo $product['producttype']; ?></p>
                                <p class="product-card-text"><?php echo $product['price'] . ' $'; ?></p>
                                <p class="product-card-text"><?php echo $product['attribute']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</main>

<footer>
    <hr class="separator">
    <p>Scandiweb Test assignment</p>
</footer>
<script type="text/javascript" src="../../../public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../../../public/assets/js/bootstrap.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $("#delete-product-btn").on('click', function () {
        $('#product_form').submit();
    });
</script>
</body>
</html>