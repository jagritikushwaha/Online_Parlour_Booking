<?php
define('TITLE','Change Password');
define('PAGE', 'requesterchangepass');
include('../dbconection.php');

include('includes/header.php');

session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='Userlogin.php'; </script>";
}
$rEmail = $_SESSION['rEmail'];
if(isset($_REQUEST['passupdate'])){
    if(($_REQUEST['rPassword'] == "")){
        // msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    }
   

  $rPass = $_REQUEST['rPassword'];   
  $sql = "UPDATE userlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";
  if($conn->query($sql) == TRUE){
  // below msg display on form submit success
  $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
   }  else {
  // below msg display on form submit failed
  $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
 }
}


?>



<div class="col-sm-9 col-md-10 "style="margin-top:70px;">
    <form class="mt-5 mx-5" method="POST">
        <div class="form-group">
          <label for="inputEmail" style="color:white;">Email</label>
          <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>"  readonly>
        </div>
        <div class="form-group">
          <label for="inputnewpassword"  style="color:white;">New Password</label>
          <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
    </form>
</div>





<?php
include('includes/footer.php'); 
?>