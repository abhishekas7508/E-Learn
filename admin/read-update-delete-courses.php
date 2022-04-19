<?php 
    require('admin-navbar.php');
    require('connection.php');
    
?>

<div class="">
    <div class="container-fluid">
        <div class="row" style="height:100%;">
            <div class="col-lg-3 p-0 mb-0 m-0" ">
                <?php require('admin-sidebar.php'); ?>
            </div>
            <div class="col-lg-8 mt-5 justify-content-center">
                <table class="table table-hover">
                    <thead>
                        <tr style="height:10px">
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">University</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Price(in ₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                                $sql="select * from courses";
                                $arr=$con->query($sql);
                                $i=1;
                                while($my_courses=mysqli_fetch_assoc($arr)):
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $my_courses['coursename']; ?></td>
                                <td><?= $my_courses['university']; ?></td>
                                <td><?= $my_courses['rating']; ?></td>
                                <td><?= $my_courses['price']; ?></td>
                                <td><a href="<?= $my_courses['image']; ?>">View Image</a></td>
                                
                                <td>
                                    <a href="update.php?id=<?=$my_courses['cid']?>" class="btn btn-success" name="update">Update</a>
                                </td>
                                <td>
                                    <a href="delete.php?id=<?=$my_courses['cid']?>" class="btn btn-danger" name="delete">Delete</a>
                                </td>

                            </tr>
                        <?php  $i++; endwhile;?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>

