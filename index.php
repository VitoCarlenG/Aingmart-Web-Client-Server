<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link href="style.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="./resources/A.png" type="image/ico">
    <title>Homepage - Aingmart</title> 
  </head> 
  
  <body style="overflow-y : hidden"> 
  <nav class="navbar navbar-dark bg-white fixed-top">
            <div class="container">
                <a href="../index.php">
                    <img src="./resources/Aingmart.png" alt="Aingmart" style="width: 150px;">
                </a>

                <img src="./resources/Slogan.png" alt="Harga Pas, Hati Senang" style="width: 225px;">
            </div>
        </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <div class="buttonbutton" style="justify-content: space-between; display: flex; margin-bottom: 67%; margin-left: 110%;">
				
				<button class="btn btn-primary me-2" type="button" > 
                    <a class="text-light" style="text-decoration: none" href="./page/registrationPage.php">REGISTER</a>                 </button> 
                <button class="btn btn-warning ms-2" type="button" href="./loginPage.php"> 
                    <a class="text-light" style="text-decoration: none" href="./page/loginPage.php">LOGIN</a> 
                </button> 
				
				</div>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./resources/Carousel1.png" class="d-block w-100" alt="Carousel 1">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="./resources/Carousel2.png" class="d-block w-100" alt="Carousel 2">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="./resources/Carousel3.png" class="d-block w-100" alt="Carousel 3">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>

  </body> 
</html> 