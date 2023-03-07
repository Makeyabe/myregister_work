<?php include '../local_connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <?php 
    $cid = $_GET['customer_id'];
    $cname= $_GET['customer_name'];
    $cphone = $_GET['customer_phone'];
    $csid = $_GET['salesman_id'];

    $update = "UPDATE `customer` SET `cname`='$cname',`cphone`='$cphone',`csid`='$csid' WHERE cid='$cid'";

    if ($qry = mysqli_query($link, $update)){
        echo "Data updated";
        echo "<a href='../index.php'>Back</a>";
    } else {
        echo "cannot update";
        echo "<a href='../index.php'>Back</a>";

    }

    ?>
</body>
</html>