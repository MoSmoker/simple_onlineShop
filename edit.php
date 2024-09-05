<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include('config.php');
        $id = $_GET['id'];
        $data = mysqli_query($connection, "SELECT * FROM `products` WHERE id=$id");
        $product_info = mysqli_fetch_array($data);
    ?>
    <center>
        <div class="main">
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <h2>Update Product info</h2>
                <input type="text" name="id" value="<?php echo $product_info['id']; ?>" style="display: none;"> 
                <br>
                <input type="text" name="name" value="<?php echo $product_info['name']; ?>">
                <br>
                <input type="text" name="price" value="<?php echo $product_info['price']; ?>">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">Update product image</label>
                <button name="update">Update product</button>
                <br>
                <br>
                <a href="products.php">show all products</a>
            </form>
        </div>
        <p>Developed by mosmoker</p>
    </center>
</body>
</html>