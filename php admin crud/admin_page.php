<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_code=$_POST['product_code'];
   // $product_code = $_POST['product_code'];
   // $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   // $product_image_folder = 'uploaded_img/'.$product_image;

   
   $insert_query = mysqli_query($conn, "INSERT INTO `product`(product_name, product_price, product_image,product_code) VALUES('$product_name', '$product_price', '$product_image','$product_code')") or die('query failed');
   if($insert_query){
      
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `product` WHERE id = $id");
   header('location:admin_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aesthetica</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
   <header class="header">

   <div class="flex">

      <a href="#" class="logo">Admin Panel</a>

      <nav class="navbar">
         
         <a href="dashboard.php">Dashboard</a>
         <a href="admin_page.php">Add products</a>
         <a href="product.php">View products</a>
         <a href="userdetails.php">User Details</a>
         <a href="orders.php">Orders</a>
      </nav>
   </div>

   </header>


<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>


<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box">
         <input type="number" placeholder="enter product price" name="product_price" class="box">
         <input type="text" placeholder="enter image url" name="product_image" class="box">
         <input type="text" placeholder="enter product code" name="product_code" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM `product`");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
            <th>product code</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['product_image']; ?></td>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['product_price']; ?>/-</td>
            <td><?php echo $row['product_code']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>