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
                            <a class="nav-link" href="logout.php">| <i class="fas fa-sign-in-alt"></i></a>
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
            <a class="flex-sm-fill text-sm-start nav-link" aria-current="page" href="index-seller.php"><img src="pictures/nike-home.jpg" alt=""></a>
                <div class="d-flex justify-content-center">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">MENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">WOMENS</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">CONTACT US</a>
                </div>
            </nav>
        </div>
    </section>

    <!-- navigation bar ends -->

    <!-- figure -->
    <section>
    <div class="container">
        <br><br>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="text-center"> 
                        <img src="pictures/figure-nike.jpg" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="text-center">
                        <img src="pictures/slide-show1.jpg" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="text-center">
                        <img src="pictures/figure3.jpg" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br>

        <hr>

        
    </div>
    </section>

    <!-- figure ends -->

    <section>
    <!-- QUOTE -->
    <br>
        <div class="container">
            <figure class="text-center">
                <blockquote class="blockquote"><i class="fas fa-quote-right"></i>
                    <i><p>The only who can tell you "you can't" is you.</p>
                    <i><p>And you don't have to listen.</p>
                </blockquote>
                    <br>
                <figcaption class="blockquote-footer"><b>
                    Nike <cite title="Source Title">. Just Do It</cite></b>
                </figcaption>
            </figure>

            <br>
            
            <hr>

            </div>


    </section>

    <!-- QUOTE ENDS -->

    <!-- Mens -->
    <section>

        <br>

        <section>
            <div class="container">
                <header><h4>MENS</h4></header>

                <hr style="width:30px; color: gray; height: 7px;" >

            </div>

            
            <br>

        </section>

        <div id="mens-shoes" class="container">
        <div class="row row-cols-2 row-cols-md-4 g-5 g-md-4">
            <div class="col-2">
                <div class="card" style="width: 16rem;">
                    <img src="pictures/mens-lifystyle/lifystyle1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air Huarache</p>
                        <cite title="Source Title">Men's shoes
                        <p class="card-text">€120</p>
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>

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
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>
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
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>
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
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>
                    </div>
                </div>            
            </div>
        </div>
    </section>
        <!-- Mens ends -->

        <br>
        <!-- Womens Header -->
        <section>

        <br>

        <section>
            <div class="container">
                <header><h4>WOMENS</h4></header>

                <hr style="width:30px; color: gray; height: 7px;" >

            </div>

            
            <br>

        </section>
        <!-- Womens Header ends -->

        <!-- Womens shoes -->
    <section>
    <div id="womens-shoes" class="container">
        <div class="row row-cols-2 row-cols-md-4 g-5 g-md-4">
            <div class="col-2">
                <div class="card" style="width: 16rem;">
                    <img src="pictures/womens/womens-lifystyle1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air Force 1 Fontanka</p>
                        <cite title="Source Title">Womens's shoes
                        <p class="card-text">€110</p>
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>

                    </div>
                </div>
            </div>
    
            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/womens/womens-lifystyle2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air Max 90 SE</p>
                        <cite title="Source Title">Womens's shoes
                        <p class="card-text">€130</p>
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>                    
                    </div>
                </div>            
            </div>

            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/womens/womens-lifystyle3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Jordan MA2 "Greatest Gift"</p>
                        <cite title="Source Title">Womens's shoes
                        <p class="card-text">€118.97</p>
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>                    
                    </div>
                </div>            
            </div>

            <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="pictures/womens/womens-lifystyle4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Nike Air VaporMax Plus</p>
                        <cite title="Source Title">Womens's shoes
                        <p class="card-text">€200</p>
                        <a class="btn btn-primary" href="#"><i class="fas fa-cogs"></i></a>                    
                    </div>
                </div>            
            </div>
        </div>
    </section>
    <!-- Womens shoes ends -->
    <br><br>

    <section>
    <!-- Contact Section -->
        <div class="container">
            <header><h4>CONTACT US</h4></header>

            <hr style="width:30px; color: gray; height: 7px;" >

        </div>

        <br>
    </section>

        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div>
                      <form action="#" method="S$_SESSION" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                        <hr style="width:30px; color: gray; height: 7px;" >
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                      Nike exists to bring inspiration and innovation to every athlete* in the world. 
                      Our Purpose is to move the world forward through the power of sport – breaking barriers 
                      and building community to change the game for all. *If you have a body, you are an athlete.
                      </p>
                      <ul class="list-ico">
                        <li><i><span class="fas fa-location-arrow"></i></span> United States</li>
                        <li><i><span class="fas fa-phone"></i></span> (617) 557-0089</li>
                        <li><i><span class="fas fa-envelope-open-text"></i></span> Nike.JustDoIt@gmail.com</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- End Contact Section -->

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

