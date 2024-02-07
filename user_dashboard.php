<?php
    session_start();
    function get_user_issue_book_count(){
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
         
        $query_run=mysqli_query($connection,$query);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
                <font style="color:white"><span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span></font>
                <font style="color:white"><span><strong>Email:<?php echo $_SESSION['email'];?></strong></span></font>
            <div class="dropdown">
                <button class="btn btn-light" type="button" aria-expanded="false">
                <a class="text-decoration-none fw-bolder text-dark" href="user_logout.php">  
                     Log Out
        </a>
                </button>
            
             
            </div>
        </div>
    </nav></br></br>
    
    <center>
        <div class="col-sm-3 mb-3mb-sm-0 p-2 g-col-6 shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Available Books</h5>
            
                    <a href="available_book.php" class="btn btn-primary" >View Available Books </a>
        </div>
    </div>
  </div>

  
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>