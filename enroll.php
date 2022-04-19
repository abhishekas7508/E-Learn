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
            include 'connection.php';
            $sql4="select * from courses";
            $arr2=$con->query($sql4);
        ?>
        <div class="container mt-5">
            <h2 class="fw-bold text-center">Card Details</h2>
            <div class="h-line bg-dark"> </div>
            <form action="bookroom" method="post">
                <h5 class="text-success">
                    <?php 
                        if(isset($run)){ 
                            echo "Course Added Successfully";
                        }
                    ?>
                        
                </h5>
                <div class="col-lg-3 mb-3">
                <label class="form-label">Select A Course</label>
                    <select name="sel_course" class="form-select">
                        <option selected>---</option>
                        <?php
                            while($product=mysqli_fetch_assoc($arr2)):
                        ?>
                        <option value="<?= $product['cid'];?>"><?= $product['coursename']; ?></option>
                        <?php endwhile; ?>
                        <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                    </select>
                    <h6 class="text-danger">
                        <?php  
                            if(isset($_POST['sel_course']) && $_POST['sel_course']=="---") 
                                echo "*  Please Select A Course";
                        ?>
                    </h6>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Name on Card</label>
                    <input type="text" name="name" class="form-control shadow-none">
                    <h6 class="text-danger">
                        <?php  
                        if(isset($_POST['name']) && $_POST['name']=="") 
                            echo "*  Name cannot be empty";
                        ?>
                    </h6>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Card Number</label>
                    <input type="text" name="cardnum" class="form-control shadow-none">
                    <h6 class="text-danger">
                        <?php  
                            if(isset($_POST['cardnum'])){
                                if(strlen($_POST['cardnum'])!=16)
                                    echo "Card Number Must be 16 digits";
                            } 
                        ?>
                    </h6>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Expiration Date</label>
                    <input type="date" name="date" class="form-control shadow-none">
                    <h6 class="text-danger">
                        <?php  
                        if(isset($_POST['date']) && $_POST['date']=="") 
                            echo "*  Date cannot be empty";
                        ?>
                    </h6>
                </div>
                <div class="mb-3">
                    <label class="form-label">CVV</label>
                    <input type="password" name="cvv" class="form-control shadow-none">
                    <h6 class="text-danger">
                        <?php  
                        if(isset($_POST['cvv']) && strlen($_POST['cvv'])!=3) 
                            echo "*  Please Enter correct cvv";
                        ?>
                    </h6>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-8">
                    <button type="submit" name="pay" class="btn btn-dark">Pay</button>
                </div>
            </form>
        </div>
        <?php include 'components/footer.php'?>
    </div>
    
    <?php
        
        if(isset($_POST['pay']) && isset($_SESSION['userloginid'])){
            if(isset($_POST['sel_course']) && isset($_POST['name']) && isset($_POST['cardnum']) && isset($_POST['date']) && isset($_POST['cvv'])){
                $insertquery="insert into cart values('','$_POST[sel_course]','$_SESSION[userloginid]')"; 
                $run=mysqli_query($con,$insertquery);
            }
            
            // if($run)
            //     echo "form submitted successfully";
            // else
            //     echo "form not submitted";
        }
    ?>
</body>
</html>