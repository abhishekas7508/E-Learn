<?php require("connection.php") ?>

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">        
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

<body style="background-color:rgb(2,137,255)">
    <div class="d-flex container justify-content-center align-items-center">
        <div class="container bg-white main p-5 rounded shadow" style="width:400px; height:auto; margin-top:10%">
        <?php if(!(isset($result)) && isset($_POST['username']) && isset($_POST['password']) && strlen($_POST['username']) && strlen($_POST['password'])){  ?>
            <h6 class="text-danger">* Incorrect username of password</h6>
        <?php } ?>
            <div class="d-flex align-items-center justify-content-center mb-2">
                <h1>Admin Login</h1>
            </div>
            <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" name="username" class="form-control shadow-none">
                <h6 class="text-danger">
                    <?php  
                        if(isset($_POST['username']) && $_POST['username']=="") 
                            echo "* User Name cannot be Empty";
                    ?>
                </h6>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control shadow-none">
                <h6 class="text-danger">
                    <?php  
                    if(isset($_POST['password']) && $_POST['password']=="") 
                        echo "* Password cannot be Empty";
                    ?>
                </h6>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" name="login" class="btn btn-dark">Login</button>
            </div>
            </form>
        </div>
    </div>
</body>


<?php
    if(isset($_POST['login'])){
        if(isset($_POST['username']) || isset($_POST['password'])){
            $query="Select * from `admin` where `adminname`='$_POST[username]' AND `password`='$_POST[password]'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1){
                session_start();
                $_SESSION['adminloginid']=$_POST['username'];
                header("Location:http://localhost/online-courses/admin/admin-panel.php");
            }
        }
        
    }
?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>