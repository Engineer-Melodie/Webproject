<?php
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image_temp = $_FILES['product_image']['tmp_name'];
//create connection
$conn = mysqli_connect("localhost", "root", "", "merody");
//image logic
$product_image = uniqid("product_image_") . ".jpg";
if(move_uploaded_file($product_image_temp, "images/" . $product_image))
{

 

    //finish
    $sql = "INSERT INTO products (product_name, product_price, product_image) VALUES ('$product_name', '$product_price', '$product_image');";
    mysqli_query($conn, $sql);
    header("location: product.php?msg=uploaded");
    exit();
}
else
{
    echo "You gave us invalid Image!";
    return;
}
?>