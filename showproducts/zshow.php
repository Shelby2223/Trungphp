<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <title>Store</title>

    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <div id="fb-root"></div>

</head>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
    }


    .glyphicon {
        margin-right: 5px;
    }

    .p-2 {
        margin: 10px 0 20px 20px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 10px;
        background: linear-gradient(#e66465, #9198e5);
    }

    .item.list-group-item {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 10px;
    }

    .item.list-group-item:nth-of-type(odd):hover,
    .item.list-group-item:hover {
        background: #428bca;
    }

    .item.list-group-item .list-group-image {
        margin-right: 10px;
    }

    .card-img-top {
        margin-top: 10px;
        border-radius: 10px;
    }

    .item.list-group-item .thumbnail {
        margin-bottom: 0px;
    }

    .item.list-group-item .caption {
        padding: 9px 9px 0px 9px;
    }

    .item.list-group-item:nth-of-type(odd) {
        background: #eeeeee;
    }

    .item.list-group-item:before,
    .item.list-group-item:after {
        content: "";
    }

    .item.list-group-item img {
        float: left;
    }

    .item.list-group-item:after {
        clear: both;
    }

    .list-group-item-text {
        margin: 0 0 11px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 33%);
        grid-column-gap: 5px;
    }

    .add {
        margin: 10px 0 0 10px;
    }

    .cbtn {
        background-color: #4C0805;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 20px;
    }

    .datmua {
        background-color: #900603;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 15px;
    }
</style>

<body>
    <div> <a class="btn btn-success add" href="zinput.php">Add</a>
        <div class="container">
            <div id="products">
            <h1>Giày dép</h1> 
                <div class="row" >
                    <?php
                    if (isset($_SESSION['products'])) {
                        // unset($_SESSION['products']);
                        // print_r($_SESSION['products']);
                        foreach ($_SESSION['products'] as $key) {
                            foreach ($key as $item => $items) {
                                if ($item == "Giày dép") {
                                    show($items);
                                }
                            }
                        }
                    }
                    ?>
                </div>
                <h1>Túi Xách</h1>
                <div class="row">
                    <?php
                    if (isset($_SESSION['products'])) {
                        // unset($_SESSION['products']);
                        // print_r($_SESSION['products']);
                        foreach ($_SESSION['products'] as $key) {
                            foreach ($key as $item => $items) {
                                if ($item == "Túi Xách") {
                                    show($items);
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    function show($items)
    {
        echo "<div class='col-lg-3 col-md-4 col-sm-6 col-4 mt-3'>";
        echo "<div class='card product p-2' styte='width:auto'>";
        echo "<img class='card-img-top' src='" . $items['img'] . "'alt='Sản phẩm' width='250' height='250'>";
        echo "<h2 class='card-title product-title text-center h3'>" . $items['name'] . "</h2>";
        echo "<h4 class='Price text-center h4'>" . $items['price'] . "</h4>";
        echo "<button class='datmua' type='button' onclick='datmua()'>Đặt mua</button>";
        echo "<script>";  
        echo "function datmua(){";
        echo "alert('finished order!');}";    
        echo "</script>";  
        echo "</div>";
        echo "</div>";
    } ?>
</body>

</html>