<?php
    $conn = new mysqli("localhost","root","","ecommerce");
    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }
    
    if(isset($_POST['save']))
    {	
         $username = $_POST['username'];
         $password = $_POST['password'];

         $sql = "select * from user_details where username='$username'";
         $result = mysqli_query($conn,$sql);
         $count_user = mysqli_num_rows($result);

         if ($count_user == 0 || $count_rows == 0){
            $sql = "INSERT INTO user_details (username,password) VALUES ('$username','$password')";
            $result=mysqli_query($conn,$sql);
            echo '<script>
                window.location.href = "index.php";
                </script>';
                     

         }
         else{
            echo '<script>
                alert("User already exists!!!");
                window.location.href = "index.php";
                </script>';
            
         }
    
        //  $sql_query = "INSERT INTO user_details (username,password)
        //  VALUES ('$username','$password')";
    
        //  if (mysqli_query($conn, $sql_query)) 
        //  {
        //     echo "New Details Entry inserted successfully !";
        //  } 
        //  else
        //  {
        //     echo "Error: " . $sql . "" . mysqli_error($conn);
        //  }
        //  mysqli_close($conn);
    }

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from user_details where username='$username'";
        $result = mysqli_query( $conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if($row){
            if($password==$row["password"]){
                header("Location:index.php");
            }
            else{
                echo '<script>
                alert("Invalid username or password!!");
                window.location.href = "login.php";
                </script>';
            }
        }
    }

?>