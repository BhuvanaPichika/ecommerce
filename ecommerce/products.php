<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
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
    
      <div class="container">
        <div id="message"></div>
        <div class="row mt-2 pb-3">
          <?php
            include 'connection.php';
            $stmt = $conn->prepare('SELECT * FROM product');
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()):
          ?>
          <div class="col-md-4 mb-2 d-flex">
            <div class="card-deck" >
              <div class="card p-2 border-secondary mb-2">
                <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
                <div class="card-body p-1">
                  <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
                  <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

                </div>
                <div class="card-footer p-1">
                  <form action="" class="form-submit">
                    <div class="row p-2">
                      <div class="col-md-6 py-1 pl-4">
                        <b>Quantity : </b>
                      </div>
                      <div class="col-md-6">
                        <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                      </div>
                    </div>
                    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                    <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                    <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                    <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                    <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                    <button class="btn btn-info btn-block addItemBtn " name=add_to_cart><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                      cart</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    

   
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // Send product details to the server
            $(".addItemBtn").click(function(e) {
                e.preventDefault();
                var $form = $(this).closest(".form-submit");
                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pprice = $form.find(".pprice").val();
                var pimage = $form.find(".pimage").val();
                var pcode = $form.find(".pcode").val();
                var pqty = $form.find(".pqty").val();

                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: {
                        pid: pid,
                        pname: pname,
                        pprice: pprice,
                        pqty: pqty,
                        pimage: pimage,
                        pcode: pcode
                    },
                    success: function(response) {
                        $("#message").html(response);
                        window.scrollTo(0, 0);
                        load_cart_item_number();
                    }
                });
            });

            // Load total number of items added to the cart and display in the navbar
            load_cart_item_number();

            function load_cart_item_number() {
                $.ajax({
                    url: 'action.php',
                    method: 'get',
                    data: {
                        cartItem: "cart_item"
                    },
                    success: function(response) {
                        $("#cart-item").html(response);
                    }
                });
            }
        });
    </script>

</body>
</html>
