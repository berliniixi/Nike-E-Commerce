<?php

// session_start();

    include("connection.php");
    include("functions.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link href="style/fontawesome-free-6.0.0-beta3-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style/fontawesome-free-6.0.0-beta3-web/css/fontawesome.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Nike. Just Do It</title>
</head>
<body>
        <!-- header  -->
        <section>
        <div class="container">
            <header>
                <div class="d-flex justify-content-end">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../Assignment1/register.php">Register Here !</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">| <i class="fas fa-sign-out-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Assignment1/wishlist.php">| <i class="fas fa-heart" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">| <i class="fas fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">| <i class="fas fa-user" aria-hidden="true"></i></a>
                        </li>
                        
                        <div class="d-flex justify-content-end">
                            <a><?php echo 'Hello ,'. $_SESSION['username'] . '!' ?></a>
                        </div>
                    </ul>
                </div>
                <hr>
            </header>
        </div>
    </section>

    <!-- header ends -->

    <!-- navigation bar -->
    <section>
        <div class="container">
            <nav class="navigation">
            <a class="flex-sm-fill text-sm-start nav-link" aria-current="page" href="index.php"><img src="pictures/nike-home.jpg" alt=""></a>
                <div class="d-flex justify-content-center">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" href="mens-shop.php">MENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="womens-shop.php">WOMENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">CONTACT US</a>
                </div>
            </nav>
        </div>
    </section>

    <!-- navigation bar ends -->

    <section>

<br>
    <!-- wishlist header -->
<section>
    <div class="container">
        <header><h4><i>WISHLIST</h4></header>

        <hr style="width:30px; color: gray; height: 7px;" >

    </div>

    
    <br>

</section>

    <!-- wishlist header ends -->

    <!-- wishlist table -->
<section>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Procuct</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                </tr>
                <tr>
                    <th scope="row">3</th>
                </tr>
            </tbody>
        </table>
    </div>
</section>

    <!-- wishlist table ends -->
</body>
</html>