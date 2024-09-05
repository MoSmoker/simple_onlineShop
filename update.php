<?php
    include_once("config.php");
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        $image_location = $_FILES['image']['tmp_name'];
        $image_name     = basename($_FILES['image']['name']);
        $image_up       = "images/" . $image_name;

        $update = "UPDATE `products` SET name='$name', price='$price', image='$image_up' WHERE id=$id";
        mysqli_query($connection, $update);
        if(move_uploaded_file($image_location, $image_up)){
            echo "<script>alert('Product uploaded successfully')</script>";
        }
        else{
            echo "<script>alert('something wrong happened')</script>";
        }
        header("location:index.php");
    }
?>