<?php 

$localhost = 'localhost';
$user = 'root';
$password = '';

$con = mysqli_connect($localhost,$user,$password);

if ($con) {
  // echo "<h1>connection successful</h1>";
  
} else {
  // echo "not connected";
}

mysqli_select_db($con,'dynamic_website');

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

$sql_query = "INSERT IGNORE INTO `user_details`(`username`, `email`, `phone`, `comments`, `time`) VALUES ('$username','$email','$phone','$comments',current_timestamp());";

// echo $sql_query;
$result = mysqli_query($con, $sql_query);

// header('location:index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Dynamic Website</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Robin Mandhotia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Corousel -->

  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/pexels-christina-morillo-1181298.jpg" alt="Coding-Image" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="./images/pexels-pixabay-270488.jpg" alt="Coding-Image" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="./images/pexels-christina-morillo-1181677.jpg" alt="Coding-Image" class="d-block w-100">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- About us -->
  <div class="container">
    <h1 class="text-center my-5">About us</h1>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-lg-6 col-12"><img src="./images/pexels-christina-morillo-1181298.jpg" alt=""
          class="img-fluid"></div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-12 my-auto p-3">
        <h2>I am Robin Mandhotia</h2>
        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quia neque, ut tempora consequatur
          sint odio rem ipsam ratione iusto libero</p>
        <div><a href="about.php" class="fs-5 btn btn-success">Know More</a></div>
      </div>
    </div>
  </div>

  <!-- Services -->
  <div class="container-fluid">
    <h1 class="text-center my-5">Our Services</h1>
    <div class="row d-flex justify-content-center column-gap-3">
      <div class="card col-12 col-lg-3 col-md-3 col-sm-3">
        <img src="./images/pexels-pixabay-270488.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">See my work</a>
        </div>
      </div>
      <div class="card col-12 col-lg-3 col-md-3 col-sm-3">
        <img src="./images/pexels-pixabay-270488.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">See my work</a>
        </div>
      </div>
      <div class="card col-12 col-lg-3 col-md-3 col-sm-3">
        <img src="./images/pexels-pixabay-270488.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-success">See my work</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery -->
  <div class="container-fluid">
    <h2 class="text-center my-5">Gallery</h2>
    <div class="row">
  <img src="./images/pexels-pixabay-270488.jpg" alt="..." class="col-12 col-md-4 col-lg-4 col-sm-6 img-fluid my-3">
  <img src="./images/pexels-pixabay-270488.jpg" alt="..." class="col-12 col-md-4 col-lg-4 col-sm-6 img-fluid my-3">
  <img src="./images/pexels-pixabay-270488.jpg" alt="..." class="col-12 col-md-4 col-lg-4 col-sm-6 img-fluid my-3">
  <img src="./images/pexels-pixabay-270488.jpg" alt="..." class="col-12 col-md-4 col-lg-4 col-sm-6 img-fluid my-3">
  <img src="./images/pexels-pixabay-270488.jpg" alt="..." class="col-12 col-md-4 col-lg-4 col-sm-6 img-fluid my-3">
  <img src="./images/pexels-pixabay-270488.jpg" alt="..." class="col-12 col-md-4 col-lg-4 col-sm-6 img-fluid my-3">
</div>
</div>


<!-- Contact us -->
<div class="container">
  <h1 class="text-center my-5">Contact us</h1>
<form action="index.php" method="post">
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label class="form-label">Comments</label>
    <input type="text" class="form-control" id="comments" name="comments">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<!-- footer -->
<footer class="mt-5">
  <p class="bg-dark text-center text-white fs-4 p-3">@rabin-developer</p>
</footer>


</body>

</html>