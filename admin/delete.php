<?php
    require('connection.php');
    if(isset($_GET['id'])){
        $sql="DELETE FROM courses WHERE cid='$_GET[id]'";
        $res=mysqli_query($con,$sql);
        if($res){
            header("location:http://localhost/online-courses/admin/read-update-delete-courses.php");
        }
        else "not deleted";
    }
    else{
        echo 'notset';
    }
?>