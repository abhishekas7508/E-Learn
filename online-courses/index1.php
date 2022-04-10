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
        .enroll{
            background-color:rgb(0, 153, 153);
        }
    </style>
</head>
    
<body>
    <div class="main">
        <?php include 'components/navbar.php'?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/1.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="images/2.jpg" alt="">
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="card border-0 shadow justify-content-center" style="max-width: 500px; margin:auto;">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h1>100+ courses</h1>
                        </div>
                        <div class="card-title text-center">
                            <h3>Upskill Yourself for the Future</h3>
                        </div>
                        <div class="card-title text-center">
                            <button class="btn enroll" style="background-color:rgb(1, 182, 182);;" ><a href="http://localhost/online-courses/courses.php/"><h5>Enroll Now</h5></a></button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <?php include 'components/footer.php'?>
    </div>
</body>
</html>