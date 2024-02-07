<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $query=" select from `books` where id=$_GET[no]";
    $query_run=mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
    alert("book Deleted...");
    window.location="available_book.php";
</script>