<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
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
    
    <title>Nike. Just Do It</title>
</head>
<body>
        <!-- header  -->
    <section>
        <div class="container">
            <header>
                <div class="d-flex justify-content-end">
                    <div class="col-6">
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
                            <?php if (isset($_SESSION['username'], $_SESSION['role'])) ;?>
                            <a> Hello,<?php echo $_SESSION['username']; ?></a>
                        </div>
                    </ul>
                    </div>
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
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">MENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="womens-shop.php">WOMENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">CONTACT US</a>
                </div>
            </nav>
        </div>
    </section>
    <!-- navigation bar ends -->

     <!-- Titles Mens -->
     <section>

        <br>

        <div class="container">
            <header><h4>MENS</h4></header>

            <hr style="width:30px; color: gray; height: 7px;" >

        </div>

    </section>
        <!-- Title Mens Ends -->

        <!-- Mens 1-->
    <section>
        <div id="mens-shoes" class="container">
        <div class="row row-cols-2 row-cols-sm-4 g-5 g-lg-4">
            <div class="col-2">
                <div class="card" style="width: 16rem;">
                    <img src="pictures/mens-lifystyle/lifystyle1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air Huarache</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€120</p>
                        <a class="btn btn-danger" href="mens-shop1.php">Shop Now</a> 
                    </div>
                </div>
            </div>
    
            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/mens-lifystyle/lifystyle2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Space Hippie 04</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€123,97</p>
                        <a class="btn btn-danger" href="#">Shop Now</a>
                    </div>
                </div>            
            </div>

            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/mens-lifystyle/lifystyle3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air Max Plus SE</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€170</p>
                        <a class="btn btn-danger" href="#">Shop Now</a>
                    </div>
                </div>            
            </div>

            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/mens-lifystyle/lifystyle4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike AF 1/1</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€132.97</p>
                        <a class="btn btn-danger" href="#">Shop Now</a>
                    </div>
                </div>            
            </div>
        </div>

        
    </section>
        <!-- Mens 1 ends -->
    <br>
    <!-- Mens 2 -->
    <section>
    <div id="mens-shoes" class="container">
        <div class="row row-cols-2 row-cols-md-4 g-5 g-md-4">
            <div class="col-2">
                <div class="card" style="width: 16rem;">
                    <img src="pictures/mens-lifystyle/lifystyle5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air Max 90</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€113.97</p>
                        <a class="btn btn-danger" href="#">Shop Now</a>

                    </div>
                </div>
            </div>
    
            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/mens-lifystyle/lifystyle6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Cortez Basic</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€75</p>
                        <a class="btn btn-danger" href="#">Shop Now</a>
                    </div>
                </div>            
            </div>

            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/mens-lifystyle/lifystyle7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Adapt Auto Max</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€288.97</p>
                        <a class="btn btn-danger" href="#">Shop Now</a>
                    </div>
                </div>            
            </div>

            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/mens-lifystyle/lifystyle8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air Max 720</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€120.97</p>
                        <a class="btn btn-danger" href="#">Shop Now</a>
                    </div>
                </div>            
            </div>
        </div>
    </section>
<!-- Mens 2 Ends -->
    <br>

    <!-- shoes description -->
    <section>
        <div class="col">
            
        </div>
    </section>

    <br>
    <!-- Footer -->
    <section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong><i>Nike. Just Do It</strong>. All Rights Reserved</p>
            <div class="credits">
              Designed by <a href="#"><strong>Stelios Taliadoros</strong></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
    </section>

    <!-- End  Footer -->
</body>
</html>