<?php 
    require('admin-navbar.php');
    require('connection.php');
    
?>

<div class="">
    <div class="container-fluid pb-0">
        <div class="row" style="height:100%;">
            <div class="col-lg-3 p-0 mb-0 m-0" ">
                <?php require('admin-sidebar.php'); ?>
            </div>
            <div class="col-lg-8 mt-5 justify-content-center">
                <table class="table table-hover">
                    <thead>
                        <tr style="height:10px">
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                                $sql="select * from users";
                                $arr=$con->query($sql);
                                $i=1;
                                while($users=mysqli_fetch_assoc($arr)):
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $users['username']; ?></td>
                                <td><?= $users['name']; ?></td>
                                <td><?= $users['email']; ?></td>
                            </tr>
                        <?php  $i++; endwhile;?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>

