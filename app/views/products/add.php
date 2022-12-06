<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
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
            <h2>Add Products</h2>
        </div>
        <div class="col header-right">
            <div class="float-end">
                <a class="btn btn-primary" id="submit-btn">Save</a>
                <a class="btn btn-secondary" href="/">Cancel</a>
            </div>
        </div>
    </div>
    <hr class="separator">
</header>
<main>
    <form id="product_form" action="/insert" method="post">
        <div class="col-sm-6">
            <div class="mb-3 row">
                <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="sku" id="sku" required>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3 row">
                <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="price" id="price" required>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="mb-3 row">
                <label for="productType" class="col-sm-2 col-form-label">Type Switcher</label>
                <div class="col-sm-4">
                    <select class="form-control" name="productType" id="productType" required>
                        <option value="" selected disabled>Type Switcher</option>
                        <option value="dvd">DVD</option>
                        <option value="book">Book</option>
                        <option value="furniture">Furniture</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-8" id="attributes"></div>
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
    $(function () {
        const form = $('#product_form');
        const button = $('#submit-btn');
        const attribute = $('#attributes');
        const productType = $('#productType');

        productType.change(function () {
            attribute.empty();
            switch (productType.val()) {
                case 'dvd':
                    attribute.append('<div class="mb-3 row">\n' +
                        '                <label for="size" class="col-sm-2 col-form-label">Size (MB)</label>\n' +
                        '                <div class="col-sm-4">\n' +
                        '                    <input type="number" class="form-control" name="size" id="size" required>\n' +
                        '                </div>\n' +
                        '                <p class="description">Please, provide size in MB format</p>\n' +
                        '            </div>');
                    break
                case 'book':
                    attribute.append('<div class="mb-3 row">\n' +
                        '                <label for="weight" class="col-sm-2 col-form-label">Weight (KG)</label>\n' +
                        '                <div class="col-sm-4">\n' +
                        '                    <input type="number" class="form-control" name="weight" id="weight" required>\n' +
                        '                </div>\n' +
                        '                <p class="description">Please, provide weight in KG format</p>\n' +
                        '            </div>');
                    break
                case 'furniture':
                    attribute.append('<div class="mb-3 row">\n' +
                        '                <label for="height" class="col-sm-2 col-form-label">Height (CM)</label>\n' +
                        '                <div class="col-sm-4">\n' +
                        '                    <input type="number" class="form-control" name="height" id="height" required>\n' +
                        '                </div>\n' +
                        '            </div>');
                    attribute.append('<div class="mb-3 row">\n' +
                        '                <label for="width" class="col-sm-2 col-form-label">Width (CM)</label>\n' +
                        '                <div class="col-sm-4">\n' +
                        '                    <input type="number" class="form-control" name="width" id="width" required>\n' +
                        '                </div>\n' +
                        '            </div>');
                    attribute.append('<div class="mb-3 row">\n' +
                        '                <label for="length" class="col-sm-2 col-form-label">Length (CM)</label>\n' +
                        '                <div class="col-sm-4">\n' +
                        '                    <input type="number" class="form-control" name="length" id="length" required>\n' +
                        '                </div>\n' +
                        '                <p class="description">Please, provide dimensions in HxWxL format</p>\n' +
                        '            </div>');
                    break
            }
        });

        button.click(function () {
            var submit = true;
            $(':input[required]', form).each(function () {
                if (this.value.trim() === '') {
                    alert('Please, submit required data');
                    submit = false;
                    return false;
                }
            });
            if (!submit) {
                return false;
            } else {
                form.submit();
            }
        });
    });
</script>
<!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>-->
<!--<script  src='../../../public/assets/js/add.js' defer></script>-->
</body>
</html>