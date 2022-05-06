<?php

include "db.php";
$pid=  $_GET['pid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="col-md-8   m-auto" style="background-color:#f5f5f5;">
        <div class="p-4">
            <div class="text-center">
                <h4>Receipt</h4>
            </div>
            <span class="mt-4"> Time : </span><span class="mt-4" id="time"></span>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 ">
                    <span id="day"></span> : <span id="year"></span>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>Order No:</p>
                </div>
            </div>
            <div class="row">
                </span>
                <table id="receipt_bill" class="table">
                    <thead>
                        <tr>
                            <th> No.</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody id="new">
                        <?php 
                    $count=1;
                    $sql = "SELECT * FROM fproduct WHERE pid=".$pid;
                    $query = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($query))
                    {
                    
                        ?>
                    </tbody>
                    <tr>
                        <td><?=  $count ?> </td>
                        <td><?=$row['product'] ?> </td>
                        <td class="text-center"><?=$row['quantity'] ?> </td>
                        <td class="text-center"><?=$row['price'] ?> </td>
                        <td class="text-center"><?=$row['price'] ?> </td>
                        <td class="text-right text-dark"></td>
                        </td>
                        <td class="text-center text-dark">
                            <h5> <strong><span id="subTotal"> </strong></h5>
                            <h5> <strong><span id="taxAmount"></strong></h5>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td class="text-right text-dark">
                            <!-- <h5><strong>Gross Total: ₹ </strong></h5> -->
                            <h5><strong>Sub Total: ₹ </strong></h5>
                        </td>
                        <td class="text-center text-danger">
                            <h5 id="totalPayment"><?=$row['price'] ?></h5>

                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            window.print();
        });
    window.onload = displayClock();

    function displayClock() {
        var time = new Date().toLocaleTimeString();
        document.getElementById("time").innerHTML = time;
        setTimeout(displayClock, 1000);
    }
    </script>
</body>

</html>