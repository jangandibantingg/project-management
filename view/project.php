<div class="tray tray-center">
  <div class="col-md-12  ">

    <div class="card">
      <div class="card-body">
<?php
  $a=mysqli_query($con, "SELECT * from project where email='$member[email]'");
  while ($r=mysqli_fetch_array($a)) {

?>

      <div class="col-md-4">
        <blockquote class="blockquote-rounded blockquote-info">
          <p> <i class="imoon imoon-quill"></i> <?php echo "$r[project_name]"; ?></p>
          <small><?php echo "$r[project_by]"; ?></small>
        </blockquote>
      </div>




<?php
}
 ?>


</div>
</div>
</div>
</div>
