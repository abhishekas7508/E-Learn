<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learn</title>
    <style>
        .main{
            background-color:whitesmoke;
        }
        .h-line{
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }
    </style>
</head>
<?php
    if(isset($_POST['submit'])){
        header("location:http://localhost/online-courses/index1.php");
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        echo $name." ".$email." ".$subject." ".$message;
    }
?>
<body>
    <div class="main">
        <?php include 'components/navbar.php'?>


        <div class="container-fluid main my-5 px-4">
        <h2 class="fw-bold text-center">Contact Us</h2>
        <div class="h-line bg-dark"> </div>
        

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4">
                            <h5>Address</h5>
                            <a href="https://goo.gl/maps/RoKQ4YF6Uh1865Vx7" class="mb-2" target="_blank"><i class="bi bi-geo-alt-fill"></i>XYZ, Lucknow, UP, India</a>
                            <h5 class="mt-4">Call Us</h5>
                            <a href="tel: +919999999999" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+919999999999
                            </a>
                            <br>
                            <a href="tel: +919999999999" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+919999999999
                            </a>
                            <h5 class="mt-4">Email</h5>
                            <a href="mailto: abhishekas7508@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill p-1"></i>ask.elearn.com</a>
                            
                            <div class="col-lg-4 mt-4">

                                <h5 class="mb-3">Follow us</h5>
                                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="bi bi-twitter me-1"></i>
                                </a> 
                                <a href="#" class="d-inline-block  text-dark fs-5 me-2">
                                    <i class="bi bi-facebook me-1"></i>
                                </a> 
                                <a href="#" class="d-inline-block text-dark fs-5 ">
                                    <i class="bi bi-instagram me-1"></i>
                                </a>     
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-5 px-4">
                        <div class="bg-white pop rounded shadow p-4">
                            <form action="" method="post" >
                                <h5>Send A Message</h5>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Name</label>
                                    <input type="text" name="name" class="form-control shadow-none">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Email</label>
                                    <input type="email" name="email" class="form-control shadow-none">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Subject</label>
                                    <input type="text" name="subject" class="form-control shadow-none">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Message</label>
                                    <textarea class="form-control shadow-none" name="message" rows="3" style="resize:none;"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-dark text-white custom-bg mt-3">Send</button>
                                    
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            
            
        </div>


        <?php include 'components/footer.php'?>
    </div>
</body>
</html>

