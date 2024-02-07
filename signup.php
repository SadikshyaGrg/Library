<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <style type="text/css">
        #side_bar{
            background-color:whitesmoke;
            padding: 50px;
            width:300px;
            height:450px;
        }
    </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
         <div class="container-fluid">
            <div class="navvar-header">
           <a href="index.php" class="text-light text-decoration-none fw-bolder fs-3">Library Information Hub</a>
           
            </div>
            <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
            <a class="nav-link text-light" href="admin_index.php">Admin Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php">User Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="signup.php">Register</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4" id="side_bar">
        <h5>Library Timing</h5>
        <ul>
            <li>Opening Timing:8:00pm</li>
            <li>Closing Timing:8:00pm</li>
            
        </ul>
            <h5>What we provide</h5>
        <ul>
            <li>Full Furniture</li>
            <li>Free  Wi-Fi</li>
            <li>News Papers</li>
            <li>Discussion Room</li>
            <li>Peaceful Environment</li>
        </ul>
        </div>
    
    <div class="col-md-8" id="main_content">
        <center><h3>User Registration Form</h3>
        </center>
        <form action="register.php" method="post">
            <div class="mb-3">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone">Mobile Number:</label>
                <input type="number" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Address">Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                
            </div>
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
                
                    <button type="submit" name="submit" class="btn btn-primary">Register</button></br> 
                  <!-- <p style="text-align:right"><a href="admin_register.php"  class="text-primary fs-5"> Register as Admin</a></p>!-->
                    
        </form>
    </div>
    </div>
        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>