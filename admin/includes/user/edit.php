<?php
$id=$_GET["id"];
$user=$connect->query("SELECT * FROM users WHERE id='$id'")->fetch_assoc();
if($prive_login==300||$prive_login==250||$id_login==$user["id"]){

}
else{
  include "404.php";
  exit();
}
?>
<form method="post" action="function/user/update.php" style="width: 90%;margin:auto;">
  <input type="hidden" value="<?=$user["id"]?>" name="id">
  <div class="form-group">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name" value="<?=$user["name"]?>"   class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" placeholder="email" value="<?=$user["email"]?>"  class="form-control" id="exampleInputEmail1" >
  </div>

    
     
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" <?=$user["gender"]==0?"checked":"" ?>  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" <?=$user["gender"]==1?"checked":"" ?> id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>


  <div class="form-group">
    <?php
    $select=$connect->query("SELECT * FROM   access ");
    ?>
    <label for="exampleFormControlSelect1">Access</label>
    <select name="access" class="form-control" id="exampleFormControlSelect1">
        <?php foreach($select as $sel): ?>
      <option value="<?=$sel["number"]?>"  <?=$user["prive"]==$sel["number"]?"selected":"" ?> ><?=$sel["name"]?></option>
      <?php endforeach?>
     

    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Update">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>