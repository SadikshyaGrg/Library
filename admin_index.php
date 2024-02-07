<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LogIn</title>
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
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
         <div class="container-fluid">
            <div class="navvar-header">
           <a href="index.php"class="text-light text-decoration-none fw-bolder fs-3">Library Information Hub</a>
           
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
        <center><h3>Admin Login</h3>
        </center>
        <form action="" method="post">
            
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                
            </div>
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
  
                    <button type="submit" name="submit" class="btn btn-primary">Log In</button>
        </form>
        
           <?php 
           session_start();
           if(isset($_POST['submit'])){
               $connection = mysqli_connect("localhost","root","");
               $db = mysqli_select_db($connection,"lms");
               $query = "select * from `admin` where email = '$_POST[email]'";
               $query_run = mysqli_query($connection,$query);
               while ($row = mysqli_fetch_assoc($query_run)) {
                   if($row['email'] == $_POST['email']){
                       if($row['password'] == $_POST['password']){
                           $_SESSION['name'] =  $row['name'];
                           $_SESSION['email'] =  $row['email'];
                           header("Location: admin_dashboard.php");
                       }
                       else{
                           ?>
                           <br><br><center><span class="alert-danger text-body-danger">Wrong Password !!</span></center>
                       <?php    
                       }
                   }
               }
           }
        ?>
    </div>
    </div>
        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

