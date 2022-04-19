<?php
    require('admin-navbar.php');
    require('connection.php');
    if(isset($_GET['id'])){
        $sql="SELECT * FROM courses WHERE cid='$_GET[id]'";
        $arr=$con->query($sql);
        if($arr){
            $row=mysqli_fetch_assoc($arr);
        }
        else "not found";
    }
    else{
        echo 'notset';
    }
?>


<?php
    if(isset($_POST['update'])){

        $sql1="UPDATE courses SET coursename = '$_POST[name]',university = '$_POST[university]',rating = '$_POST[rating]',price = '$_POST[price]' WHERE cid='$_GET[id]'";
        $res=mysqli_query($con,$sql1);
    }
        

?>


<div class="">
    <div class="container-fluid">
        <div class="row" style="height:100%;">
            <div class="col-lg-3 p-0 mb-0 m-0" ">
                <?php require('admin-sidebar.php'); ?>
            </div>
            <div class="d-flex col-lg-8 mt-5 justify-content-center">
                <div class="shadow rounded pe-5 ps-5" style="width:500px; height:70%"> 
	 				<h3 class="text-center">Update A Course</h3>
	 				<h5 class='text-success text-center'>
                            <?php 
                                if(isset($res)){
                                    echo "Updated Successfully";
                                }else echo "";
                            ?>
                        </h5>
                     <form method="post" >
                        
	 					<label>Course Name</label>
	 					<input type="text" name="name" class="form-control" value="<?= $row['coursename']?>">
                                

                        <label>university</label>
	 					<input type="text" name="university" class="form-control" value="<?= $row['university']?>">
	 					
                        <label>Rating</label>
	 					<input type="number" name="rating" class="form-control" value="<?= $row['rating']?>">

                        <label>Price</label>
	 					<input type="number" name="price" class="form-control" value="<?= $row['price']?>">

	 					<input type="submit" name="update" class="btn btn-info my-5" value="Update">
                        
	 				</form>
	 			</div>
                 

            </div>
        </div>
    </div> 
</div>

