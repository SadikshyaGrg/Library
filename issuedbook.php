<?php
    
    session_start();

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
        $book_number="";
        $book_name="";
        $student_name="";
        $status="";
        $issue_date="";

        $query = "select * from issued_books";
               
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issued Book</title>
    
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
    </nav></br></br>

        <button type="button" class="btn btn-warning">
         <a  class="text-decoration-none" href="issuebook_add.php">
        Add New</a></button>
    </br></br>
                
                <table class="table-bordered table table-hover" width="900px" style="text-align:center">
                
                <thead>
                         <tr>
                             <th scope="col">Book Number</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Issued Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php
                            $query_run=mysqli_query($connection,$query);
                              while($row=mysqli_fetch_assoc($query_run)){
                                $book_number=$row['book_number'];
                                $book_name=$row['book_name'];
                                $student_name=$row['student_name'];
                                $status=$row['status'];
                                $issue_date=$row['issue_date'];
                               
                                 ?>
                                 <tr>
                                    <td><?php echo $book_number;?></td>
                                    <td><?php echo $book_name;?></td>
                                    <td><?php echo $student_name;?></td>
                                    <td><?php echo $status;?></td>
                                    <td><?php echo $issue_date;?></td>
                                    <td>
                                        <button class="btn btn-outline-primary " name=""><a class="text-dark text-decoration-none" 
                                        href="update_issuedbook.php?bn=<?php echo $row['book_number']?>">Update</a></button>
                                        <button class="btn btn-outline-danger " name=""><a class="text-dark text-decoration-none"
                                         href="delete_issuedbook.php?bn=<?php echo $row['book_number']?>">Delete</a></button>
                                    </td>
                                 </tr>
                                 <?php
                               }
                                 ?>
                    </thead>
                    <tbody>
                    
  </tbody>
</table>
              
  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>