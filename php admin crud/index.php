<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
</head>
<body>
    
<?php include 'header.php'; ?>
<br>
<form action="config.php" method="post" id="form">
        <div class="form-container">
          <h1>Login</h1>
          <p>Please fill in this form to go to Asthetica.</p>
          <hr>
      
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Your Name " name="username" id="username" required>
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>      
          <button type="submit" class="registerbtn" name="submit" id="submit" onclick="submit">Login</button>
        </div>
    
      </form>
</body>
</html>
