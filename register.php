<?php require('connection.php') ?>

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




<body style="background-image:url(images/login-bg.jpg);  background-size: cover;">
    <div class="d-flex container justify-content-center align-items-center">
        <div class="container bg-white main p-5 rounded shadow" style="width:500px; height:auto; margin-top:5%">
            <div class="d-flex align-items-center justify-content-center mb-2">
                <h1>Register</h1>
            </div>
            <form action="" method="post">
            <div class="mb-2">
                <label class="form-label">User name</label>
                <input type="text" name="username" class="form-control shadow-none">
                <h6 class="text-danger">
                    <?php  
                        if(isset($_POST['username']) && $_POST['username']=="") 
                            echo "* User Name cannot be Empty";
                    ?>
                </h6>
            </div>
            <div class="mb-2">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control shadow-none">
                <h6 class="text-danger">
                    <?php  
                        if(isset($_POST['name']) && $_POST['name']=="") 
                            echo "* Name cannot be Empty";
                    ?>
                </h6>
                
            </div>
            <div class="mb-2">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control shadow-none">
                <h6 class="text-danger">
                    <?php  
                        if(isset($_POST['email']) && $_POST['email']=="") 
                            echo "* Email cannot be Empty";
                    ?>
                </h6>
                
            </div>
            <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control shadow-none">
                <h6 class="text-danger">
                    <?php  
                        if(isset($_POST['password']) && $_POST['password']=="") 
                            echo "* Password cannot be Empty";
                    ?>
                </h6>
                
            </div>
            <div class="mb-2">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password" class="form-control shadow-none">
                <h6 class="text-danger">
                    <?php  
                        if(isset($_POST['password']) && $_POST['password']=="") 
                            echo "* Confirm Password cannot be Empty";
                    ?>
                </h6>
                
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" name="register" class="btn btn-dark">Register</button>
            </div>
            </form>
        </div>
    </div>
</body>



<?php
    if(isset($_POST['register'])){
        if(strlen($_POST['username']) && strlen($_POST['name']) && strlen($_POST['email']) && strlen($_POST['password'])){

            $query = "INSERT INTO users VALUES('','$_POST[username]','$_POST[name]','$_POST[email]','$_POST[password]')";
            $res = mysqli_query($con,$query);
            if($res){
                echo "success";
                header("Location:http://localhost/online-courses/login.php");
            }
        }
        // else
        //     echo "failed to insert in database";

    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>