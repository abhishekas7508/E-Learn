<?php 
    require('admin-navbar.php');
?>
<div class="">
    <div class="container-fluid pb-0">
        <div class="row" style="height:100%;">
            <div class="col-lg-3 p-0 mb-0 m-0" ">
                <?php require('admin-sidebar.php'); ?>
            </div>
            <div class=" d-flex col-lg-8 mt-5 justify-content-center">
                <h1>
                <?php 
                    if(isset($_SESSION['adminloginid'])){
                        echo 'Welcome, '.$_SESSION['adminloginid'];
                    }
                    
                ?>
                </h1>
            </div>
        </div>
    </div> 
</div>




