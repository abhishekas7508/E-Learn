<?php 

include("connection.php");

if (isset($_POST['add'])) {
	//print_r( $_POST);
	$file = $_FILES['image']['name'];
	$name = $_POST['name'];
    $university= $_POST['university'];
	$price = $_POST['price'];
    $rating= $_POST['rating'];



	if (empty($file)  || empty($name) || empty($price) || empty($university) || empty($rating)) {
		echo "";
	}else{
        $absolute_path='/online-courses/images/courses/'.$file;
		$query = "INSERT INTO courses VALUES('','$name','$university','$rating','$price','$absolute_path')";
		$res = mysqli_query($con,$query);
        // if($res){
        //     echo "success";
        // }
        // else
        //     echo "failed to insert in database";

	}
}

?>





<?php 
    require('admin-navbar.php');
?>



<div class="">
    <div class="container-fluid">
        <div class="row" style="height:100%;">
            <div class="col-lg-3 p-0 mb-0 m-0" ">
                <?php require('admin-sidebar.php'); ?>
            </div>
            <div class="d-flex col-lg-8 mt-5 justify-content-center">
                <div class="shadow rounded pe-5 ps-5" style="width:500px; height:90%"> 
                    <h3 class="text-center">Add New Course</h3>
	 				<h5 class='text-success text-center'>
                            <?php 
                                if(isset($res)){
                                    echo "Course Added Successfully";
                                }else echo "";
                            ?>
                    </h5>
	 				<form method="post" enctype="multipart/form-data">
	 					
	 					<label>Course Name</label>
	 					<input type="text" name="name" class="form-control">
                         <h6 class="text-danger">
                            <?php  
                                if(isset($_POST['name']) && $_POST['name']=="") 
                                    echo "* Course Name cannot be Empty";
                            ?>
                        </h6>
                        <label>university</label>
	 					<input type="text" name="university" class="form-control">
                         <h6 class="text-danger">
                            <?php  
                                if(isset($_POST['university']) && $_POST['university']=="") 
                                    echo "* University cannot be Empty";
                            ?>
                        </h6>
	 					
                        <label>Rating</label>
	 					<input type="number" name="rating" class="form-control">
                         <h6 class="text-danger">
                            <?php  
                                if(isset($_POST['rating']) && $_POST['rating']=="") 
                                    echo "* Rating cannot be Empty";
                            ?>
                        </h6>

                        <label>Price</label>
	 					<input type="number" name="price" class="form-control">
                         <h6 class="text-danger">
                            <?php  
                                if(isset($_POST['price']) && $_POST['price']=="") 
                                    echo "* Price cannot be Empty";
                            ?>
                        </h6>
                        <label>Choose Image</label>
	 					<input type="file" name="image" class="form-control">
                         <h6 class="text-danger">
                            <?php  
                                if(empty($_FILES['image']['name']) && isset($_POST['add'])) 
                                    echo "* Please Choose An Image";
                            ?>
                        </h6>
	 					<input type="submit" name="add" class="btn btn-info my-5" value="Add New Course">
                        
	 				</form>
	 			</div>
                 

            </div>
        </div>
    </div> 
</div>