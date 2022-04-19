<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">        
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    a:{
        text-decoration:none;
    }
</style>

<?php 
    session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light px-lg-3 py-lg-2 shadow sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3" href="#">E-Learn</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        

      </ul>
      <div class="d-flex">

        <div class="dropdown show ">
          <a class="btn btn-dark dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
            if(isset($_SESSION['adminloginid'])){
                echo $_SESSION['adminloginid'];
                
            }
            else
                echo "User"; 
          ?>
          </a>

          <div class="dropdown-menu pe-1"  aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="http://localhost/online-courses/login.php/">Login</a>
            <a class="dropdown-item" href="http://localhost/online-courses/admin/admin-login.php/">Admin Login</a>
            
          </div>
        </div>

        <form action="" method="post">
            <button class="btn btn-white" name="logout"><h6 class="text-light">Logout</h6></button>
        </form>

        <?php
            if(isset($_POST['logout'])){
                session_destroy();
                header("location: http://localhost/online-courses/admin/admin-login.php/");
            }
        ?>
        
      </div>
    </div>
  </div>
</nav>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>