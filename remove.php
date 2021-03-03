<?php
    $con = mysqli_connect("localhost","root","","test");
    $name = $_GET["c"];
    mysqli_query($con,"delete from cart where id ='$name'");
    $sql=mysqli_query($con,"select * from cart");   
    ?>
    <table class="table table-responsive-sm">
    <tr>
        <th>Product Name</th>    
        <th>Price</th>    
        <th>    </th>    
    </tr>
    <?php
    while($row = mysqli_fetch_array($sql)){
          ?>     
        <tr>    
            <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
            <td><button type="button" class="btn btn-info" onclick="remove(this.value)" value="<?php echo $row[2];?>">Remove</button></td>
        </tr>
            <?php
        }
        $qry = mysqli_query($con,"select sum(price) from cart");
        $row = mysqli_fetch_array($qry);
        $summ = $row[0];
        ?>
            <tr>
                <th></th>
                <th><?php echo $summ;?></th>
                <th><button class="btn btn-success" onclick="clearcart()">Checkout</button></th>
            </tr>
    
    </table>