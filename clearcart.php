<?php
    $con = mysqli_connect("localhost","root","","test");
    $qry = mysqli_query($con,"select sum(price) from cart");
    $row = mysqli_fetch_array($qry);
    $summ = $row[0];
     
    mysqli_query($con,"DELETE FROM cart;");
    echo "<h1 class='checkout'>Your total amount is <span class='amnt'>RS.$summ/-</span> <br> Thank you for shopping</h1>";
?>
