<form method="post" action="function/user/add.php" style="width: 90%;margin:auto;">
  <div class="form-group">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" placeholder="email" class="form-control" id="exampleInputEmail1" >
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>
    
     
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>


  <div class="form-group">
    <?php
    $select=$connect->query("SELECT * FROM   access ");
    ?>
    <label for="exampleFormControlSelect1">Access</label>
    <select name="access" class="form-control" id="exampleFormControlSelect1">
        <?php foreach($select as $sel): ?>
      <option value="<?=$sel["number"]?>" ><?=$sel["name"]?></option>
      <?php endforeach?>
     

    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>