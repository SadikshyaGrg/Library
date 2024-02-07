<?php
    require "functions.php";
	session_start();
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $book_number="";
    $book_name="";
    $student_name="";
    $status="";
    $issue_date="";

    $query="select * from `issued_books` where book_number=$_GET[bn]";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
            $book_number=$row['book_number'];
            $book_name=$row['book_name'];
            $student_name=$row['student_name'];
            $status=$row['status'];
            $issue_date=$row['issue_date'];
            

    }
    
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
    
        <form action="" method="post">
            <div class="mb-3">
                    <label for="bookNumber">Book Number</label>
                            <input type="text" name="book_number" value="<?php echo $book_number;?>" class="form-control">
            </div>                    
            <div class="mb-3">
                    <label for="bookName">Book Name</label>
                        <input type="text" name="book_name" value="<?php echo $book_name;?>"class="form-control">
            </div>

            <div class="mb-3">
                    <label for="studentId">Student Name</label>
                        <input type="text" name="student_name" value="<?php echo $student_name;?>"class="form-control">
            </div>

            <div class="mb-3">
                    <label for="status" value="<?php echo $status;?>">Status</label>
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option value="Returned">Returned</option>
                        <option value="Not Returned">Not Returned</option>
                    </select>
            </div>

            <div class="mb-3">
                    <label for="issueDate">Issued Date</label>
                        <input type="date" name="issue_date" class="form-control" value="<?php echo date("yy-m-d");?>">
                        <script>document.getElementById("issue_date").disabled = true;</script>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
        

  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST['update'])){
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $query="update `issued_books` set book_number='$_POST[book_number]',book_name='$_POST[book_name]',student_name='$_POST[student_name]',status='$_POST[status]'
         where book_number=$_GET[bn]";
        $query_run=mysqli_query($connection,$query);
        header("location:issuedbook.php");
    }

?>