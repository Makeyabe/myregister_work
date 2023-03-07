<?php include '../local_connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>
    <?php 
    $cid = $_GET['cid'];
    $search = "SELECT * FROM customer WHERE cid = '$cid'";
    $qry = mysqli_query($link, $search);
    foreach ($qry as $data){
    ?>
    <form action="../service/update_customer.php" method="get">
    <label for="customerName">Customer ID</label><input type="text" name="customer_id"readonly value=<?php echo $data['cid'];?>> <br>
    <label for="customerName">Customer Name</label><input type="text" name="customer_name" value=<?php echo $data['cname'];?>> <br>
    <label for="customerName">Customer Phone</label><input type="text" name="customer_phone" value=<?php echo $data['cphone'];?>> <br>
    <label for="customerName">Salesman</label><input type="text" name="salesman_id" value=<?php echo $data['csid'];?>><br>
    <button type="submit">Submit</button>
    </form>

    <?php } ?>
</body>
</html>