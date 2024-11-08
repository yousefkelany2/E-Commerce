
<?php if($prive_login==300||$prive_login==250):?>
    <a href="?product=add" class="btn btn-primary">Add product</a>
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
    <th>Price</th>
    <th>Sale</th>
    <th>Count</th>
    <th>Category</th>
    <th>Images</th>
    <?php if($prive_login==300||$prive_login==250):?>
      <th>Edit/Delete</th>
     <?php endif?>
    
    
   
   
  </tr>
</thead>
<?php
$products=$connect->query("SELECT * FROM products");
foreach($products as $key =>$product):
?>

<tbody>
    <tr>
        <td><?=++$key?></td>
        <td><?=$product["name"]?></td>
        <td><?=$product["price"]?></td>
        <td><?=$product["sale"]?></td>
        <td><?=$product["count"]?></td>
        <td><?=$product["catogory"]?></td>
        <td>
          <?php
          $images=explode('/',$product["image"]);
          foreach($images as $image){
            echo '<img height="100" src="images/' . $image . '" alt="">';
          }
          ?>
        </td>
        <td>
        <?php if($prive_login==300||$prive_login==250):?>
   

          <a href="?product=edit&id=<?=$product["id"]?>" class="btn btn-success">Edit</a>
          <?php require "style/model.php"; ?>
          <!-- <a href="" class="btn btn-danger">Delete</a> -->
        </td>
        <?php endif?>
      
      
    </tr>
</tbody>
<?php endforeach ?>
</table>
<!-- $_SERVER["HTTP_REFERER"]
$_SERVER["REQUEST_METHOD"]=="POST" -->