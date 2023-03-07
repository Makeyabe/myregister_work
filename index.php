<?php include 'local_connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>CustomerID</th>
            <th>CustomerName</th>
            <th>Customer Phone</th>
            <th>Salesman ID</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $query = "SELECT * FROM customer";
        $conn = mysqli_query($link, $query);    
        foreach ($conn as $data){ ?>
        <tr>
            <td> <?php echo $data['cid']; ?> </td>
            <td> <?php echo $data['cname']; ?> </td>
            <td> <?php echo $data['cphone']; ?> </td>
            <td> <?php echo $data['csid']; ?> </td>
            <td><a href="form/edit_data_customer.php?cid=<?php echo $data['cid'];?>">edit</a></td>
            <td><a href="service/delete_customer.php?cid=<?php echo $data['cid'];?>">delete</a></td>
        </tr>

<?php }?>
    </table>
    <a href="form/create_customer.html">Add new</a><br>
    <a href="form/order_bill.php">หน้าสั่งซื้อสินค้า</a>

</body>
</html>