<?php
    include_once("config.php");
    if(isset($_POST['upload'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        $image_location = $_FILES['image']['tmp_name'];
        $image_name     = basename($_FILES['image']['name']);
        $image_up       = "images/" . $image_name;

        $insert = "INSERT INTO `products`(`name`, `price`, `image`) VALUES ('$name','$price','$image_up')";
        mysqli_query($connection, $insert);
        if(move_uploaded_file($image_location, $image_up)){
            echo "<script>alert('Product uploaded successfully')</script>";
            header("location:index.php");
        }
        else{
            echo "<script>alert('something wrong happened')</script>";
            header("location:index.php");
        }
    }
?>