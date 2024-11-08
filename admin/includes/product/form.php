<form method="post" action="function/product/add.php" style="width: 90%;margin:auto;"  enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="price" placeholder="price"  class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="text" name="sale" placeholder="sale"  class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Count</label>
    <input type="text" name="count" placeholder="count"  class="form-control" id="exampleInputEmail1">
  </div>

  <div class="form-group">
    <?php
    $category=$connect->query("SELECT * FROM   category ");
    ?>
    <label for="exampleFormControlSelect1">Category</label>
    <select name="cate" class="form-control" id="exampleFormControlSelect1">
        <?php foreach($category as $cate): ?>
      <option value="<?=$cate["name"]?>" ><?=$cate["name"]?></option>
      <?php endforeach?>

    </select>
  </div>
  <div class="form-group">
    <input type="file" name="img[]" multiple id="">
  </div>
   

  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>