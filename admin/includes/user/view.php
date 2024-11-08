
<?php if($prive_login==300||$prive_login==250):?>
    <a href="?user=add" class="btn btn-primary">Add user</a>
 <?php endif?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<table class="table table-bordered table-striped table-hover table-dark text-center">

<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Access</th>
    
    <th>Edit/Delete</th>
   
  </tr>
</thead>
<?php
    $users=$connect->query("SELECT * FROM users");
    foreach($users as $key =>$user):
    
    ?>

<tbody>
   
    <tr>
        <td><?=++$key?></td>
        <td><?=$user["name"]?></td>
        <td><?=$user["email"]?></td>
        <td><?=$user["gender"]==0?"Male":"Female"?></td>
        <td><?php
        if($user["prive"]==300){
            echo "Owner";
        }
        elseif($user["prive"]==250){
            echo"Admin";
        }
        elseif($user["prive"]==200){
            echo "User";
        }
        ?></td>
        <td>
        <?php
            if($prive_login==300||$prive_login==250||$id_login==$user["id"]):
            ?>
            <a href="?user=edit&id=<?=$user["id"]?>" class="btn btn-success">Edit</a>
            <?php 
            require "style/model.php";
            ?>
            <?php endif ?>
            <!-- <a href="" class="btn btn-danger">Delete</a> -->
        </td>
    </tr>
</tbody>
<?php
endforeach?>

</table>