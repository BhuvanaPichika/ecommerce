<?php

@include 'config.php';


if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `user_details` WHERE user_id = $id");
   header('location:userdetails.php');
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
   <?php

   $select = mysqli_query($conn, "SELECT * FROM `user_details`");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>User Id</th>
            <th>User Name</th>
            <th>User Password</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
               
               <a href="userdetails.php?delete=<?php echo $row['user_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>