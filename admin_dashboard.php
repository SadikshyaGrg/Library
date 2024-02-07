<?php
    require('functions.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
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
                <font style="color:white"><span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span></font>
                <font style="color:white"><span><strong>Email:<?php echo $_SESSION['email'];?></strong></span></font>
            <div class="logout">
                <button class="btn btn-light" type="button" aria-expanded="false">
                <a class="text-decoration-none fw-bolder text-dark" href="admin_logout.php">    
                Log Out</a></font>
                </button> 
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FEEEF0">
    <div class="container-fluid">
    <ul class="nav navbar-nav navbar-center">
        <li class="nav-item">
            <a href="admin_dashboard.php " class="nav-link fs-5">Dashboard</a>
        </li>&nbsp &nbsp &nbsp

        
        

    <div class="button1">
        <button class="btn btn-outline-danger  btn-sm me-md-2 text-dark-emphasis fs-5" aria-expanded="false">
           <a class="text-decoration-none" href="add_book.php">Add New Book</a>
    </button>
    <button class="btn btn-outline-danger btn-sm text-dark-emphasis fs-5" aria-expanded="false">
            <a  class="text-decoration-none" href="issuedbook.php">Issue Books</a>
    </button>
    </div>&nbsp &nbsp &nbsp
    </ul>
    </div>
    </nav></br></br>



 <div class="row grid gap-5 column-gap-3 d-flex justify-content-center">
  <div class="col-sm-3 mb-3 mb-sm-0 p-2 g-col-6 shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Registered Users</h5>
                <p class="card-text">No. of total users: <?php echo get_user_count();?></p>
                    <a href="registereduser.php" class="btn btn-info">View Registered Users</a>
        </div>
    </div>
  </div>

  
  <div class="col-sm-3 mb-3 mb-sm-0 p-2 g-col-6 shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Issued Books</h5>
                <p class="card-text">No of  Issued books: <?php echo get_issued_count();?></p>
                    <a href="issuedbook.php" class="btn btn-warning">View Issued Books </a>
        </div>
    </div>
  </div>

  <div class="col-sm-3 mb-3 mb-sm-0  p-2 g-col-6 shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Registered Books</h5>
                <p class="card-text">No of available Books: <?php echo get_book_count();?></p>
                    <a href="registeredbook.php" class="btn btn-success">View Registered Books</a>
        </div>
    </div>
  </div>


</div>

  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>