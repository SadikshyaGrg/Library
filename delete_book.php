<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $query=" delete from `books` where id=$_GET[cn]";
    $query_run=mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
    alert("book Deleted...");
    window.location="registeredbook.php";
</script>