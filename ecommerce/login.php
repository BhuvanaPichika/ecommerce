

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
    
        
      * {
        box-sizing: border-box;
      }
      
      /* Add padding to containers */
      .form-container {
        padding: 16px;
        background-color: white;
        margin-left: 650px;
      }
      
      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      
      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      
      /* Overwrite default styles of hr */
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
      
      /* Set a style for the submit button */
      .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }
      
      .registerbtn:hover {
        opacity: 1;
      }
      
      /* Add a blue text color to links */
      a {
        color: dodgerblue;
      }
      
      /* Set a grey background color and center the text of the "sign in" section */
      .signin {
        
        text-align: center;
      }
      </style>
</head>
<body>
    
  <header class="bg-dark text-light text-center py-3">
          <h1 class="mb-0">Aesthetica</h1>
      </header>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Aesthetica</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="products.php" >
                  Products
                </a>
                
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="checkout.php">checkout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart fa-lg"></i> <span id="cart-item" class="badge badge-danger"></span></a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
      </nav>
      <form action="connection.php" method="post" id="form">
        <div class="form-container">
          <h1>Login</h1>
          <p>Please fill in this form to go to Asthetica.</p>
          <hr>
      
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Your Name " name="username" id="username" required>
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
      
    
          <!-- <hr> -->
         
      
          <button type="submit" class="registerbtn" name="submit" id="submit" onclick="submit">Login</button>
        </div>
        
        <div class="container signin">
          <p>Don't have an account? <a href="registration.php">Register</a>.</p>
        </div>
      </form>

      <script> 
        function submit() { 
            let form = document.getElementById("form"); 
            form.submit(); 
            alert("Data stored in database!"); 
        } 
    </script> 

      

</body>
</html>    