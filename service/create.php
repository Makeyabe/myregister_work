<?php include '../local_connect.php' ?>
<?php 
    $cid = $_GET['customer_id'];
    $cname= $_GET['customer_name'];
    $cphone = $_GET['customer_phone'];
    $csid = $_GET['salesman_id'];
    $sql = "INSERT INTO `customer` (`cid`, `cname`, `cphone`, `csid`) VALUES ('$cid', '$cname', '$cphone', '$csid')";

    if ($conn = mysqli_query($link, $sql)) {
        echo "Insert completed successfully";
        echo "<a href='../index.php'>Back</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>