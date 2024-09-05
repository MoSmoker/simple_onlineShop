<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        h3{
            font-family: "SUSE", sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
        }
        main{
            width: 60%;
        }
    </style>
</head>
<body>
    <center>
        <h3>All avariable products</h3>
    </center>
    <?php
        include("config.php");
        $products = mysqli_query($connection, "SELECT * FROM `products`");
        while($product = mysqli_fetch_array($products)){
            echo "
                <center>
                    <main>
                        <div class='card' style='width: 17rem;'>
                            <img src='$product[image]' class='card-img-top'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product[name]</h5>
                                <p class='card-text'>$product[price]</p>
                                <a href='delete.php?id=$product[id]' class='btn btn-danger'>Delete</a>
                                <a href='edit.php?id=$product[id]' class='btn btn-primary'>Edit</a>
                            </div>
                        </div>
                    </main>
                </center>
            ";
        }
    ?>
</body>
</html>