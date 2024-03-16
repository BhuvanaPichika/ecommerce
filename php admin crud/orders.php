<?php

@include 'config.php';

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
   <?php

   $select = mysqli_query($conn, "SELECT * FROM `orders`");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Order Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Payment mode</th>
            <th>Product Name</th>
            <th>Price</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['pmode']; ?></td>
            <td><?php echo $row['products']; ?></td>
            <td><?php echo $row['amount_paid']; ?>/-</td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>