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
    <meta charset="UTF-13">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link href="style/fontawesome-free-6.0.0-beta3-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style/fontawesome-free-6.0.0-beta3-web/css/fontawesome.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha3134-1BmE4kWBq713iYhFldvKuhfTAU6auU13tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script> -->

<!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                            <a><?php echo 'Hello ,'. $_SESSION['username'] . '!' ?></a>
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
                    <a class="flex-sm-fill text-sm-center nav-link" href="mens-shop.php">MENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="womens-shop.php">WOMENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">CONTACT US</a>
                </div>
            </nav>
        </div>
    </section>

    <!-- navigation bar ends -->


    <section>

        <div class="container">
        <div class="row row-cols-2 row-cols-sm-4 g-5 g-lg-4">
            <div class="col-2">
                <div class="card" style="width: 16rem; margin-top: 13%">
                    <img src="pictures/mens-lifystyle/lifystyle1.jpg" class="card-img-top" alt="...">
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem; margin-top: 13%">
                    <img src="pictures/mens-lifystyle/lifystyle9.jpg" class="card-img-top" alt="...">
                </div>            
            </div>

            <div class="card-body" style="width: 16rem; margin-top: 13%">
                <p class="card-text" id="shoe_discription" >Nike Air Huarache</p>
                <cite title="Source Title">Men's shoes
                <p class="card-text" id="shoe_price">€120</p>
                <p title="Source Title" style="color:green;">Available</p>
                <div class="w-25 p-6">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" class="form-control" name="quantity" min="1" max="" required>
                </div>
            </div>

            <div class="card-body" style="width: 16rem; margin-top: 13%">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="mens_size" name="mens_size" id="inlineRadio1" value="option1" required>
                    <label class="form-check-label" for="inlineRadio1">40</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="mens_size" name="mens_size" id="inlineRadio2" value="option2" required>
                    <label class="form-check-label" for="inlineRadio2">41</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="mens_size" name="mens_size" id="inlineRadio1" value="option1" required>
                    <label class="form-check-label" for="inlineRadio1">42</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="mens_size" name="mens_size" id="inlineRadio2" value="option2" required>
                    <label class="form-check-label" for="inlineRadio2">43</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="mens_size" name="mens_size" id="inlineRadio1" value="option1" required>
                    <label class="form-check-label" for="inlineRadio1">44</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="mens_size" name="mens_size" id="inlineRadio2" value="option2" required>
                    <label class="form-check-label" for="inlineRadio2">45</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="mens_size" name="mens_size" id="inlineRadio1" value="option1" required>
                    <label class="form-check-label" for="inlineRadio1">46</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="mens_size" name="mens_size" id="inlineRadio2" value="option2" required>
                    <label class="form-check-label" for="inlineRadio2">47</label>
                </div>

                <br><br>

                <div class="row">
                    <button class="btn btn-primary" class="save_button" name="save">Save to <i class="fas fa-heart"></i></button> 
                </div>

                <br>

                <div class="row">

                    <a class="btn btn-success" class="add_button" >Add to <i class="fas fa-shopping-cart"></i></a> 

                </div>
            </div>
    </section>

    <br>
    <!-- Footer -->
<!-- <section>
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
</section> -->

    <!-- End  Footer -->

    <!-- script -->
    <script src="script/wishlist.js"></script>
</body>
</html>
