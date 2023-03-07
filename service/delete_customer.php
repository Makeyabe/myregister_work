<?php include '../local_connect.php'?>
<?php
    $cid = $_GET['cid'];
    $delete = "DELETE FROM `customer` WHERE cid = '$cid'"; 

    if ($qry = mysqli_query($link, $delete)){
        echo "Deleted";
        echo "<a href='../index.php'>Back</a>";
    } else {
        echo "Cannot delete customer";
        echo "<a href='../index.php'>Back</a>";
    }
?>