<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="product.css">
    <style>
        .product-parent{
            display: flex;
            /* grid-template-column: 1fr 1fr 1fr 1fr; */
            flex-wrap: wrap;
            gap: 40px;
            width: 98%;
        }
        .product-child{
            width: 21%;
        }
    </style>
</head>
<body style="background-color: rgb(179, 221, 245,0.2);">
    <!-- <marquee behavior="" direction=""><embed src="diamond (1).MP4" type=""> -->
        <!-- <embed src="diamond (1).MP4" type=""><embed src="diamond (1).MP4" type=""> -->
            <!-- <embed src="diamond (1).MP4" type=""> -->
        <!-- <embed src="diamond (1).MP4" type=""><br><br></marquee> -->
    <center>
        
    <marquee behavior="" direction=""><h2>as we we proceed to give all what you need advertises here:    </h2></marquee>

    <div class="product-parent">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "merody");
    $sql = "SELECT * FROM products;";
    $results = mysqli_query($conn, $sql);
    while($product = mysqli_fetch_assoc($results))
    {
        //looping in every product
        echo '<div class="product-child"><img src="images/' . $product['product_image'] . '"width="300px"; height="300px"> <hr> <h3>product Name: ' . $product['product_name'] . '</h4><h3>product Price:' . $product['product_price'] . ' RWF</h4><a href=""><button type="submit" id="btn"><h2>buy product</h2> </button></a> </div>';
    }
    ?>
    </div>


    <table border="2" style="border-collapse: collapse; ">

    <tr>
        <td colspan="4"><footer style="background-color: rgb(63, 60, 60); padding:70px;display: block;">
            
        <h2 style="color: white;">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
           Ratione molestias iusto ipsam doloribus
            cupiditate aspernatur recusandae voluptatibus <br>qui 
           temporibus aliquam ipsa autem, inventore labore quam,
            porro adipisci reiciendis dolor deserunt.
            project is to help some body who use it    
        </h2>
              
            
            <div class="lasss" style="display: flex; justify-content: space-between;">
               <a href=""> <button style="border-radius: 10px;"><h1 >JOIN US </h1></button></a>
                <a href=""><button style="border-radius: 10px;"><h1 >contact US </h1></button></a>       
                <a href=""><button style="border-radius: 10px;"><h1 >our services</h1></button></a>     
            </div>
            
        </footer></td>
    </tr>
    <tr>
        <td colspan="4"><div style="text-align: center;background-color: black;width: 100%;color: azure;"><<&copy>> 2023 Mfashion all rights are reserved</div>
        </td>
    </tr>
   


    </table>
    <!-- <embed src="movies.mp4" type=""> -->
</body>
</html>