<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="alert alert-success" role="alert">
 Your account is created you can login!
</div>
    <center>
    <div style="height: 60%; width: 50%; margin-top: 20px;
    padding: 20px; background-color: antiquewhite; ">
    <h2>Fill  Out Your Detail</h2>
    <form action ="db_connect.php" method="post">
        <div class="row">
            <div class="mb-3 mt-4 col-md-6">
                <label class="form-label" for="fname">First Name</label>
                <input class="form-control" name="fname" type="text" placeholder="First Name" id="fname">
            </div>

            <div class="mb-3  mt-4 col-md-6">
                <label class="form-label" for="lname">Last Name</label>
                <input class="form-control" name="lname" type="password" placeholder="Last Name" id="lname">
            </div>

            <div class="mb-3  mt-4 col-md-6">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" name="email" type="email" placeholder="email" id="email">
            </div>

            <div class="mb-3  mt-4 col-md-6">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" name="password" type="password" placeholder="password" id="password">
            </div>

            <div class="mb-3  mt-4 col-md-6">
              <label class="form-label" for="mnumber">Phone number 1</label>
              <input class="form-control" name="phone1" type="number" placeholder="9125538798" id="mnumber">
            </div>
              <div class=" mb-3  mt-4 col-md-6">
                <label class="form-label" for="mnumber">Phone number 2</label>
              <input class="form-control" name="phone2" type="number" placeholder="9125538798" id="mnumber">
              </div>
              <div class=" mb-3  mt-4 col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="address1" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class=" mb-3  mt-4 col-md-6">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="mb-3  mt-4 col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="inputCity">
              </div>
             
              <div class="mb-3  mt-4 col-md-6">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" name="zip" id="inputZip">
              </div>  
              
              <div class="mb-3  mt-4 col-md-6">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState"  name="state"class="form-select">
                  <option selected>Choose...</option>
                  <option>U.P</option>
                  <option>U.k</option>
                  <option>Delhi</option>
                  <option>kanpur</option>
                  <option>....</option>

                </select>
              </div>
              <div class="mb-3  mt-4 col-md-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <div class=" mb-3  mt-4 col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            
        </div>
    </form>
</div>
</center>
</body>
</html>