<?php

define('TITLE', 'Status');
define('PAGE', 'Servicestatus');
include('../dbconection.php');

include('includes/header.php');
session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
 } else {
  echo "<script> location.href='servicestatus.php'; </script>";
 }

?>


<div class="col-sm-9 col-md-10 mt-5">
    <form class="mx-5" action="" method="post" class="form-inline">
        <div class="form-group mr-3">
            <label for="checkid"style="color:white; margin-top:30px;"
            
            >Enter Requester ID: </label>
            <input type="text" class="form-control" name="checkid"
            id="checkid">
        </div>
          <button type="submit" class="btn btn-danger" style="color:white; margin-top:20px;">Search</button>
    </form>
    <?php
  if(isset($_REQUEST['checkid'])){
 
        $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['checkid']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(($row['request_id']) == $_REQUEST['checkid']){ ?>
      <h3 class="text-center mt-5" style="color:white;">Assigned Work Details</h3>
      <table class="table table-bordered">
        <tbody>
          <tr style="color:white;">
            <td style="color:white;">Request ID</td>
            <td>
              <?php if(isset($row['request_id'])) {echo  $row['request_id']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Request Info</td>
            <td>
              <?php if(isset($row['request_info'])) {echo $row['request_info']; } ?>
            </td>
          </tr>
          <tr  style="color:white;">
            <td style="color:white;">Request Description</td>
            <td>
              <?php if(isset($row['request_desc'])) {echo $row['request_desc']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Name</td>
            <td>
              <?php if(isset($row['requester_name'])) {echo $row['requester_name']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Address Line 1</td>
            <td>
              <?php if(isset($row['requester_add1'])) {echo $row['requester_add1']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Address Line 2</td>
            <td>
              <?php if(isset($row['requester_add2'])) {echo $row['requester_add2']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">City</td>
            <td>
              <?php if(isset($row['requester_city'])) {echo $row['requester_city']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">State</td>
            <td>
              <?php if(isset($row['requester_state'])) {echo $row['requester_state']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Pin Code</td>
            <td>
              <?php if(isset($row['requester_zip'])) {echo $row['requester_zip']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Email</td>
            <td>
              <?php if(isset($row['requester_email'])) {echo $row['requester_email']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Mobile</td>
            <td>
              <?php if(isset($row['requester_mobile'])) {echo $row['requester_mobile']; } ?>
            </td>
          </tr>
          
          <tr  style="color:white;">
             <td style="color:white;">Assigned Technician</td>
              <td>
              <?php if(isset($row['assign_tech'])) {echo $row['assign_tech']; } ?>
             </td>
         </tr>
         <tr  style="color:white;" >
            <td style="color:white;">Technician Name</td>
            <td>Zahir Khan</td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Customer Sign</td>
            <td></td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Technician Sign</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center">
        <form class="d-print-none d-inline mr-3"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form>
        <form class="d-print-none d-inline" action="work.php"><input class="btn btn-secondary" type="submit" value="Close"></form>
      </div>
      <?php } else {
          echo '<div class="alert alert-dark mt-4" role="alert">
          Your Request is Still Pending </div>';
        }
    
  }
 ?>

</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
include('includes/footer.php'); 
?>