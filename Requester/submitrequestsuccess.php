
  <html>
    <head>

       <style>
             div{
                border:2px solid black;
                padding:40px;
                width:400px;
                height:400px;
                margin:auto;
                background-color:rgba(100,100,100,0.4);
                margin-top:50px;
             }
             table{
                text-align:left;
                padding:20px;
                width:400px;
            
             }
             .table th,td{
               border:1px solid black;
               padding:7px;
               
               border-collapse:collapse;
             }
             .td2{
               border:none;
             }
   h2{
         text-align:center;
         color: red;
   }
   .buttn{
       width:100px;
       margin-top:30px;
       margin-left:60%;
      padding:10px;
      color:white;
      border:none;
      background-color:red;
   }
         </style>

    </head>
    <body>           
<?php
define('TITLE', 'Success');

include('dbconection.php');

session_start();
if(isset($_SESSION['is_login'])){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='Userlogin.php'; </script>";
}
$id1=$_SESSION['myid'];
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = '$id1' ";
$result = $conn->query($sql);
if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 
 echo " <div class='box3'>
 <h2> Receipt</h2>
 <table class='table'>
  <tbody>
   <tr>
     <th>Request ID</th>
     <td>".$row['request_id']."</td>
   </tr>
   <tr>
     <th>Name</th>
     <td>".$row['requester_name']."</td>
   </tr>
   <tr>
   <th>Email ID</th>
   <td>".$row['requester_email']."</td>
  </tr>
   <tr>
    <th>Request Info</th>
    <td>".$row['request_info']."</td>
   </tr>
   <tr>
    <th>Request Description</th>
    <td>".$row['request_desc']."</td>
   </tr>

   <tr>
    <td class='td2'><form ><input class='buttn' type='submit' value='Print' onClick='window.print()'></form></td>
  </tr>
  </tbody>
 </table> </div>
 ";


} else {
  echo "Failed";
}
?>
<span><a href="RequesterProfile.php" > Back</a> </span>
</body>
<?php
include('includes/footer.php'); 
$conn->close();

?>
