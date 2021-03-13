<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
       
    <title>Resilient Mind</title>
</head>

<body style= "background-color: lightgray;
         margin-left: 20px";>

<!--This the Navigation Bar-->
<nav padding: '30px'; class="navbar navbar-expand-lg navbar-light bg-lightblue">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


     <br/>
     <br/>
         <!--This is the Header -->
<header style=>
       <a href="https://www.linkedin.com/in/sittie-aguiman-62a16a1bb/">
       <img src= "https://www.freeiconspng.com/thumbs/linkedin-icon/linkedin-icon-6.png";  width='35px'>
       </a>
       <a href= "https://www.facebook.com/sittielawi/">
       <img src= "https://cdn4.iconfinder.com/data/icons/social-media-flat-7/64/Social-media_Facebook-512.png";padding: 35px; width='35px'>
       <img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" width='35px'>
       </a><br/>
       <br/>      
       <div class="d-grid gap-2 d-md-block" float: right;>
       <a href= "aboutSittie.php" >
       <button type="button" class="btn btn-outline-info" target= "_blank">Learn more about Sittie</button>
       </a>
       </div>
    </header>

    

    <div style= "background-color:bluegreen;
         text-align: center";>
    <div  class= "topleft">
    
    </div>

    <h1> Resilient Mind </h1><br/>
    <?php
      
       echo '<br/>'; 
       echo '<br/>';     
       echo '<figure class="text-center">
            <blockquote class="blockquote">
            <p>If you are not willing to risk the unusual, you will have to settle for the ordinary.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
            <cite title="Source Title">Jim Rohn</cite>
            </figcaption>
            </figure>';
            echo '<br/>';
    
   
    echo       '<div id="carouselExampleInterval" class="carousel    
                slide"data-bs-ride="carousel">         
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1990">
                <img width-"90px"; src="https://image.freepik.com/free-vector/woman-programmer-work-process-program-coding_24908-18757.jpg"  alt="">
               </div>
              <div class="carousel-item" data-bs-interval="2800">
                <img src="https://www.jotform.com/blog/wp-content/uploads/2020/03/WFH.blogbanner.png" alt="">
              </div>
              <div class="carousel-item" data-bs-interval="3500">
                <img src="https://media.istockphoto.com/vectors/teenage-girk-working-on-computer-in-classroom-vector-id1150453750?k=6&m=1150453750&s=612x612&w=0&h=Mu_UNoQRacUqqnApWUgSGFCt8oixdwUVN2nGRm_DOkM="   alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>';
    
     echo  '<br><br/>';
     echo '<footer>
             <img width="90px"; src="https://newrelic.com/assets/pages/apm/php/php-elephant-logo-bd4f9d83be8c8563248fe4793f90bae7.png">
             <img width="90px"; src="https://www.drupal.org/files/project-images/bootstrap-stack.png">
             <img width="90px"; src= "https://www.udemy.com/staticx/udemy/images/v6/default-meta-image.png">
             <br>
          
          <p>This page was created by Sittie Aguiman using Php Programming language and Bootstrap.For more web development courses,visit
          <a href="https://www.udemy.com/" target="_blank">Udemy.com.</a>
          </footer>'; 
    ?>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

