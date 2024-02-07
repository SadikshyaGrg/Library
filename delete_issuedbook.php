<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $query=" delete from `issued_books` where book_number=$_GET[bn]";
    $query_run=mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
    alert("book Deleted...");
    window.location="issuedbook.php";
</script>