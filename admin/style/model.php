<!-- Button trigger modal -->
 <?php 
 if(isset($user["id"])){
  $file_back="user";
}
else if(isset($product["id"])){
  $file_back="product";
}
 ?>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?=$user["id"]??$product["id"]?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$user["id"]??$product["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h5 style="color:black">Do You Want Delete <span style="color:red"><?= $user["name"]??$product["name"]?></span></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/<?=$file_back?>/delete.php?id=<?=$user["id"]??$product["id"]?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>