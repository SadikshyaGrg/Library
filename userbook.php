<?php
    require "functions.php";
	session_start();
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $id="";
    $book_name="";
    $book_author="";
    $book_number="";
    $quantity="";
   

    $query="select * from `books` where book_number= $_GET[no]";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
            $id=$row['id'];
            $book_name=$row['book_name'];
            $book_author=$row['book_author'];
            $book_number=$row['book_number'];
            $quantity=$row['quantity'];
            

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
                    <label for="id">Id</label>
                            <input type="text" name="id" value="<?php echo $id;?>" class="form-control">
            </div>                    
            <div class="mb-3">
                    <label for="bookName">Book Name</label>
                        <input type="text" name="book_name" value="<?php echo $book_name;?>"class="form-control">
            </div>

            <div class="mb-3">
                    <label for="bookAuthor">Book Author</label>
                        <input type="text" name="book_author" value="<?php echo $book_author;?>"class="form-control">
            </div>


            <div class="mb-3">
                    <label for="bookNumber">Book Number</label>
                        <input type="text" name="book_number" class="form-control" value="<?php echo $book_number;?>">
            </div>

          
            <button type="submit" class="btn btn-primary" name="issuebook_user" id="reserveMessage" >Reserve</button>
        </form>

        <script>
    // JavaScript code to display an alert message after button click
    document.getElementById("reserveMessage").addEventListener("click", function() {
        var message = "Reservation for book has been made";
        alert(message);
        window.location = "available_book.php";
    });
</script>

        <script>
        function selectRow(button) {
            var row = button.closest('tr');
            var rowData = Array.from(row.cells).map(cell => cell.innerText);

            // Create a query string with selected data
            var queryString = '?id=' + encodeURIComponent(rowData[0]) + '&book_name=' + encodeURIComponent(rowData[1])
            + '&book_author=' + encodeURIComponent(rowData[2])+ '&book_number=' + encodeURIComponent(rowData[3]);

            // Navigate to a new page with the selected data
            window.location.href = 'issuebook_user.php' + queryString;
        }
        </script>

  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST['issuebook_user'])){
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $query="update `books` set id='$_POST[id]',book_name='$_POST[book_name]',book_author='$_POST[book_author]',
        book_number='$_POST[book_number]' where book_number=$_GET[no]";
        $query_run=mysqli_query($connection,$query);
        header("location:available_book.php");
    }

?>