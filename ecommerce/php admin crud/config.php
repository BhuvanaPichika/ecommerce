<?php

$conn = mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from admin where username='$username'";
    $result = mysqli_query( $conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row){
        if($password==$row["password"]){
            header("Location:dashboard.php");
        }
        else{
            echo '<script>
            alert("Invalid username or password!!");
            window.location.href = "index.php";
            </script>';
        }
    }
}

?>
