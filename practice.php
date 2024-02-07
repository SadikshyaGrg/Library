<?php
    
    session_start();

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
        $book_name="";
        $author_name="";
        $book_number="";
        

        $query = "select * from `books`";
               
?>


<?php
// Get the data from the AJAX request
$id = isset($_POST['id']) ? $_POST['id'] : '';
$book_name = isset($_POST['book_name']) ? $_POST['book_name'] : '';
$book_author = isset($_POST['book_author']) ? $_POST['book_author'] : '';
$book_number = isset($_POST['book_number']) ? $_POST['book_number'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';

// Display the data
echo "ID: $id<br>";
echo "book_name: $book_name";
echo "book_author: $book_author";
echo "book_number: $book_number";
echo "quantity: $quantity";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    
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
    </nav></br>
    <button type="button" class="btn btn-light text-light btn-lg"><a  class="text-decoration-none"  href="user_dashboard.php">Back</a></button>
  <center><h3> <strong> List of Issued Books</strong> </h3></center>
    </br>
                <table class="table-bordered table table-hover" width="900px" style="text-align:center">
                
                <thead>
                         <tr>
                             <th scope="col">sn</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Book Number</th>
                            
                            
                            
                        </tr>
                        <?php
if (isset($_POST['issuebook_user']) && $_POST['issuebook_user'] == true) {
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $id = $row['id'];
        $book_name = $row['book_name'];
        $book_author = $row['book_author'];
        $book_number = $row['book_number'];
        
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $book_name; ?></td>
            <td><?php echo $book_author; ?></td>
            <td><?php echo $book_number; ?></td>
            
        </tr>
        <?php
    }
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
<?php
    if(isset($_POST['issuebook_user'])){
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $query="update `books` set id='$_POST[id]',book_name='$_POST[book_name]',book_author='$_POST[book_author]',
        book_number='$_POST[book_number]',quantity='$_POST[quantity]'where id=$_GET[no]";
        $query_run=mysqli_query($connection,$query);
        header("location:userbook.php");
    }

?>























available Book






<?php
    
    session_start();

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
        $book_name="";
        $author_name="";
        $book_number="";
        $quantity="";

        $query = "select * from `books`";
               
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    
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
    </nav></br>
    <button type="button" class="btn btn-light text-light btn-lg"><a  class="text-decoration-none"  href="user_dashboard.php">Back</a></button>
  <center><h3> <strong> List of Available Books</strong> </h3></center>
    </br>
                <table class="table-bordered table table-hover" width="900px" style="text-align:center">
                
                <thead>
                         <tr>
                             <th scope="col">sn</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Book Number</th>
                            <th scope="col">quantity</th>
                            <th scope="col">Action</th>
                            
                        </tr>
                        <?php
                            $query_run=mysqli_query($connection,$query);
                              while($row=mysqli_fetch_assoc($query_run)){
                                $id=$row['id'];
                                $book_name=$row['book_name'];
                                $book_author=$row['book_author'];
                                $book_number=$row['book_number'];
                                $quantity=$row['quantity'];
                               
                                 ?>
                                 <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $book_name;?></td>
                                    <td><?php echo $book_author;?></td>
                                    <td><?php echo $book_number;?></td>
                                    <td><?php echo $quantity;?></td>
                                    <td>
                                        <button type="button" class="btn btn-outline-success " name="issuebook_user" onclick="borrowBook()">
                                        <a class="text-dark text-decoration-none" href="issuebook_user.php?no=<?php echo $row['book_number']?>">Issue Book</a></button>
                                                
                                             </td>
                                 </tr>
                                 <?php
                               }
                                 ?>
                    </thead>
                    <tbody>
                    
  </tbody>
  <script>
$(document).ready(function() {
    // Attach a click event to all buttons with class "view-button"
    $('.view-button').click(function() {
        // Get the data from the button's data attributes
        var id = $(this).data('id');
        var book_name = $(this).data('book_name');
        var book_author = $(this).data('book_author');
        var book_number = $(this).data('book_number');
        var quantity = $(this).data('quantity');

        // Send the data to the second PHP page using AJAX
        $.ajax({
            type: 'POST',
            url: 'userbook.php',
            data: { id: id, book_name: book_name,book_author:book_author, book_number:book_number,quantity:quantity},
            success: function(response) {
                // Redirect to the second PHP page
                window.location.href = 'userbook.php';
            },
            error: function() {
                alert('Error processing your request.');
            }
        });
    });
});
</script>
  
</table>
              
  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>




<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    
    
?>
<script type="text/javascript">
    alert("book has been issued");
    window.location="userbook.php";
</script>








userbook


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

            <div class="mb-3">
                    <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control" value="<?php echo $quantity;?>">
            </div>

            <button type="submit" class="btn btn-primary" name="issuebook_user">Issue</button>
        </form>
        

  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST['issuebook_user'])){
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $query="update `books` set id='$_POST[id]',book_name='$_POST[book_name]',book_author='$_POST[book_author]',
        book_number='$_POST[book_number]',quantity='$_POST[quantity]'where book_number=$_GET[no]";
        $query_run=mysqli_query($connection,$query);
        header("location:issuebook_user.php");
    }

?>