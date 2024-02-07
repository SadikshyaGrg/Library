<?php
if(isset($_POST['submit'])){
    $book_name=$_POST['book_name'];
    $book_author=$_POST['book_author'];
    $book_number=$_POST['book_number'];
    $quantity=$_POST['quantity'];
    
    $con= new mysqli('localhost','root','','lms') or die("connection error");
    $insert="INSERT INTO `books`(`book_name`,`book_author`,`book_number`,`quantity`) values ('$book_name','$book_author',
    '$book_number','$quantity')";

    echo "<pre>";
    print_r($con);
    
    $result=mysqli_query($con,$insert)or die("connection error");
    if($result){
        echo "data inserted successfully";
        header('location:registeredbook.php');
    }else{
        die(mysqli_error($con));
   }
}
?>