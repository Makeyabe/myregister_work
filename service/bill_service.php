<?php include '../local_connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bill</title>
</head>
<body>
<?php 
    date_default_timezone_set("Asia/Bangkok");
    $date = date("h:i:sa");
    $customer_id =$_GET['customer_id'];
    $product_id =$_GET['product_id'];
    $amount = $_GET['amount'];
    $bill_code = $_GET['bill_code'];

    // insert input
    $sql0 = "INSERT INTO `billproduct` (`bpid`, `bpbid`, `bppid`, `bpamount`) VALUES (NULL, '$bill_code', '$product_id', '$amount')";
    $sql1 = "INSERT INTO `bill` (`bid`, `bcid`, `bdate`) VALUES ('$bill_code', '$customer_id', '$date')";
    
    if ($qry0 = mysqli_query($link, $sql0) && $qry1 = mysqli_query($link, $sql1)) { 
        $search = "SELECT * FROM customer WHERE cid = '$customer_id'";
        $qry = mysqli_query($link, $search);
        foreach ($qry as $user) {    
            $product = "SELECT * FROM product WHERE pid = '$product_id'";
            $product_data = mysqli_query($link, $product);
            foreach($product_data as $pd) {
    ?>
        <div class="container">
            <div class="card" style="width: 18rem;">
                    <img src="../Cartoon-logistics-express-vectors.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><center><?php echo $date;?></center></p>
                    <p class="card-text"><center>Name : <?php echo $user['cname'];?></center></p>
                    <p class="card-text"><center>product : <?php echo $pd['pname'];?></center></p>
                </div>
            </div>
        </div>
    <a href='../index.php'>Back</a>

<?php
            }
        }
    }else{
        echo "Failed";
    }

?>
</body>
</html>