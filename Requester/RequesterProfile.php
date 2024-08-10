<?php
define('TITLE', 'Submit Request');
define('PAGE', 'RequesterProfile');

include('../dbconection.php');
session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];

} 
 else {
      echo "<script> location.href='Userlogin.php'</script>";
}

$sql = "SELECT  r_name, r_email FROM userlogin_tb WHERE r_email='$rEmail'" ;
 $result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $rName = $row['r_name']; }

 if(isset($_REQUEST['nameupdate'])){
  if(($_REQUEST['rname'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   $rName = $_REQUEST["rname"];
   $sql = "UPDATE userlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
   if($conn->query($sql) == TRUE){
   // below msg display on form submit success
   $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
   } else {
   // below msg display on form submit failed
   $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">


  <link rel="stylesheet" href="../css/new.css">

  
    <title>Profile</title>
</head>
<body>
    <nav class="navbar navbar-dark fixed top bg-danger
    flex-md-nowrap p-0 shadaw"><a class="navbar-brand col-sm-3
    col-md-2 mr-0" href="userprofile.php">OCRM</a></nav> 

    <div class="container-fluid" >
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5"style="margin-top:40px; ">
                <div class="sidebar-stickey" style="height:600px;">
                
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link active"  href="RequesterProfile.php">
                          <i class="fas fa-user"  ></i>Profile</a></li>
                          <li class="nav-item">
                        <a class="nav-link"  href='submitrequest.php'>
                          <i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                        <a class="nav-link"  href="servicestatus.php">
                          <i class="fas fa-align center"></i>Service Status</a></li>
                          <li class="nav-item">
                        <a class="nav-link"  href="requesterchangepass.php">
                          <i class="fas fa-key"></i>Change Password </a></li>
                          <li class="nav-item">
                        <a class="nav-link"  href="../logout.php">
                          <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
   </div>
         </nav>
         <div class="col sm-6 "style="margin-top:93px;">
             <form action="" method="post" class="mx-5">
                 <div class="form-group">
                     <label for="rEmail" style="color:white;">Email</label><input type="email" class="form-control" name="remail" id="remail" 
                     value="<?php echo $rEmail ?>" readonly>
                </div>
                <div class="form-group">
                     <label for="rName" style="color:white;">Name</label><input type="name" class="form-control" name="rname" id="rname"
                     value=" <?php echo $rName ?>"> <br>
                </div>
                <button type="submit"  class="btn btn-danger" name="nameupdate">Update</button>
                <?php if(isset($passmsg)) {echo $passmsg; } ?>
            </form>


        </div>

         </div>
                </div>
                
            <!-- Boostrap JavaScript -->
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
    
</body>
</html>