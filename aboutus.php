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
            <div class="row align-items-center justify-content-between" >
                <div class="col-lg-4">
                    <h1>
                        We share knowledge with the world
                    </h1>
                </div>
                <div class="col-lg-5">
                    <img src="images/student.jpg" class="rounded shadow" alt="" style="width:350px; height:auto;">
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-6">
                    <h1 style="color:purple">Changing learning for the better</h1>
                    <h6>
                    <em>Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.</em> 
                    </h6>
                </div>
            </div>
            <div class="row justify-content-between m-3 mt-5 mb-5" >
                <div class="col-lg-3 m-4 bg-white shadow rounded-3 p-3">
                    <h1>
                        Our Instructors
                    </h1>
                    <h6 class="m-2">
                        E-learn instructors are real people
                        who are passionate about sharing
                        what they know with students all
                        Over the world.
                    </h6>
                </div>
                <div class="col-lg-3 m-4 bg-white shadow rounded-3 p-3">
                    <h1>
                       Our Marketplace
                    </h1>
                    <h6 class="m-2">
                        Whatever your learning style, we
                        have a course that its. Coming
                        from instructors all over the world,
                        our courses span over 65
                        languages and cover just about
                        anything you'd want to know.
                    </h6>
                </div>
                <div class="col-lg-3 m-4 bg-white shadow rounded-3 p-3">
                    <h1 class="m-2">
                       Transforming Lives
                    </h1>
                    <h6>
                        Talented people are everywhere,
                        but opportunities can be harder to
                        find. With Udemy, Mohammed-a
                        Syrian refugee- was able to start
                        a new career and a new life in
                        Germany.
                    </h6>
                </div>
                
            </div>
        </div>

        <?php include 'components/footer.php'?>
    </div>
</body>
</html>