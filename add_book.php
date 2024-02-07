
<?php
include('functions.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    
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

    
    </nav></br></br>
    
        <form action="book.php" method="post">
            <div class="mb-3">
                    <label for="bookName">Book Name</label>
                            <input type="text" name="book_name" class="form-control">
            </div>
                                
            <div class="mb-3">
                    <label for="bookAuthor">Author</label>
                        <input type="text" name="book_author" class="form-control">
            </div>

            <div class="mb-3">
                    <label for="bookNumber">Book Number</label>
                        <input type="text" name="book_number" class="form-control">
            </div>

            <div class="mb-3">
                    <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">ADD BOOK</button>
        </form>
        

  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>