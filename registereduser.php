<?php
    
    session_start();

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
        $name="";
        $phone="";
        $address="";
        $email="";

        $query = "select * from `users`";
               
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    
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

    <center>
    <h3>Registered User List</h3></br>
    </center>         
                <table class="table-bordered table table-hover" width="900px" style="text-align:center">
                
                <thead>
                         <tr>
                             <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                        </tr>
                        <?php
                            $query_run=mysqli_query($connection,$query);
                              while($row=mysqli_fetch_assoc($query_run)){
                                $name=$row['name'];
                                $phone=$row['phone'];
                                $address=$row['address'];
                                $email=$row['email'];
                               
                                 ?>
                                 <tr>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $phone;?></td>
                                    <td><?php echo $address;?></td>
                                    <td><?php echo $email;?></td>
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