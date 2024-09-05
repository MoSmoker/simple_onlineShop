<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <h2>Online marketing shop</h2>
                <img src="https://as1.ftcdn.net/v2/jpg/04/33/20/42/1000_F_433204218_6chvhQiQ1ChALCPbrXq4ecrA1JmEoDCl.jpg" alt="Error, logo of the website" width="500" class="img">
                <input type="text" name="name" placeholder="Product name">
                <br>
                <input type="text" name="price" placeholder="Price">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">select product image</label>
                <button name="upload">Upload product ✅</button>
                <br>
                <br>
                <a href="products.php">show all products</a>
            </form>
        </div>
        <p>Developed by mosmoker</p>
    </center>
</body>
</html>