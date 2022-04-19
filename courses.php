<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    <div class="main">
        
        <?php include ('components/navbar.php');
              include ('connection.php');  ?>
        <?php 
            $sql="select * from `courses`";
            $featured=$con->query($sql);
        ?>
        <h2 class="fw-bold text-center">Courses</h2>
        <div class="h-line bg-dark"> </div>
        <div class="container">
            <div class="row justify-content-start mt-4">
                <?php
                    while($product=mysqli_fetch_assoc($featured)):
                ?>
                

                <div class="col-lg-4 card border-0 shadow  mb-4" style="max-width: 350px; height:400px; margin:auto;">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <img src="<?= $product['image'];?>" class="card-img-top" style="max-width:250px; height:auto;">
                        </div>
                        
                        <div class="card-title text-center">
                            <h5><?= $product['coursename']; ?></h5>
                        </div>
                        <div class="card-title text-center">
                            <small>
                            <?= $product['university']; ?>
                            </small>
                        </div>
                        <div class="card-title text-center">
                        <span class="badge rounded-pill bg-light">
                            <?php 
                                $rating=$product['rating'];
                                while($rating-- >0):
                            ?>
                                    <i class="bi bi-star-fill text-warning"></i>
                                
                            <?php endwhile; ?>
                                
                            
                        </span>   
                        </div>
                        <div class="card-title text-center">
                            <h6>₹<?= $product['price']; ?></h6>
                        </div>
                        <div class="card-title text-center">
                            <button class="btn enroll" style="background-color:rgb(1, 182, 182);;" ><a href="http://localhost/online-courses/enroll.php/"><h6>Enroll Now</h6></a></button>
                        </div>
                    </div>
                </div> 
                
                <?php endwhile; ?>
            </div>

            <div class="row  justify-content-start mt-4">

                

            </div>


            

            
            

            
        </div>
        <?php include 'components/footer.php'?>
    </div>
    
</body>
</html>