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
        <?php
             include 'components/navbar.php';
             require('connection.php');
        ?>
        <style>
            .main{
                    background-color:whitesmoke;
            }
            .h-line{
                width: 130px;
                margin: 0 auto;
                height: 1.7px;
            }
        </style>


        
        <?php 
                $user=$_SESSION['userloginid'];
                $sql2="select * from `cart` where `username`='$user'";
                $featured=$con->query($sql2);
        ?>

        <div class="container">
            <div class="row">
                <h4 class='mt-4 mb-4'> <?php 
                        if(isset($_SESSION['userloginid']))
                            echo 'Welcome, '.$_SESSION['userloginid'];
                ?></h4>
            </div>
            <div class="row">
                
                    <?php
                        while($product=mysqli_fetch_assoc($featured)):
                            $sql3="select * from `courses` where `cid`='$product[cid]'";
                            $arr=$con->query($sql3);
                            while($my_courses=mysqli_fetch_assoc($arr)):
                    ?>
                            <div class="col-lg-3 card border-0 shadow justify-content-center m-4 pb-4">
                                <h4> <?= $my_courses['coursename']; ?> </h4>   
                                <img style="width:200px;" src="<?= $my_courses['image'];?>" alt="<?= $my_courses['coursename']; ?>">   
                            </div>
                
                    <?php endwhile; endwhile;?>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <?php include 'components/footer.php'?>
    </div>
</body>
</html>