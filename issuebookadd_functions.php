<?php

if(isset($_POST['submit'])){
        $book_number=$_POST['book_number'];
        $book_name=$_POST['book_name'];
        $student_name=$_POST['student_name'];
        $status=$_POST['status'];
        $issue_date=$_POST['issue_date'];

        $con= new mysqli('localhost','root','','lms') or die("connection error");
        $insert="INSERT INTO `issued_books`(`book_number`,`book_name`,`student_name`,`status`,`issue_date`) values
         ('$book_number','$book_name','$student_name','$status','$issue_date')";
    
        echo "<pre>";
        print_r($con);
        
        $result=mysqli_query($con,$insert)or die("connection error");
        if($result){
            echo "data inserted successfully";
            header('location:issuedbook.php');
        }else{
            die(mysqli_error($con));
       }
    }
    ?>