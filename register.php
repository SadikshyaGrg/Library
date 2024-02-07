<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
   
    $email=$_POST['email'];
    $password=$_POST['password'];


    $con= new mysqli('localhost','root','','lms') or die("connection error");
    $insert="INSERT INTO `users`(`name`,`phone`,`address`,`email`,`password`) values ('$name','$phone',
    '$address','$email','$password')";

    echo "<pre>";
    print_r($con);
    
    $result=mysqli_query($con,$insert)or die("connection error");
    if($result){
        echo "data inserted successfully";
        header('location:signup.php');
    }else{
        die(mysqli_error($con));
   }
}
?>
<script type="text/javascript">
alert("Registration successfull...You may Login now !!");
window.location.href = "index.php";
</script>
