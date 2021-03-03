<?php
    $con = mysqli_connect("localhost","root","","test");
    $num = 0;
    $cat = $_GET["prod"];
    $result = mysqli_query($con,"select * from ".$cat);
    if($cat != ""){
    if($cat == "headphones" || $cat== "wearables")
    {
         while($row = mysqli_fetch_array($result)){
          
    ?>     
        <div class="products">
            <div class="picnprice">
                <div class="pic"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row[0] ).'" height="200"/>';?></div>
                <div class="price" id="price">RS.<?php echo $row[1]?>/-</div>       
            </div>
            <div class="details">
                <div class="name" id="name"><?php echo $row[2]?></div>
                <div class="specs">
                    <p><?php echo $row[3]?></p>
                    <p><?php echo $row[4]?></p>
                    <p><?php echo $row[5]?></p>
                    
                </div>
                <div class="button_cart">
                    <button class="btn btn-warning" type="button" value='<?php echo $row[2];?>'  onClick="addCart(this.value)">ADD TO CART</button>
                </div>
             </div>
            </div>
            <?php
        }
    }
    else{
    while($row = mysqli_fetch_array($result)){    
    ?>     
        <div class="products">
            <div class="picnprice">
                <div class="pic"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row[0] ).'" height="200"/>';?></div>
                <div class="price" id="price">RS.<?php echo $row[1]?>/-</div>       
            </div>
            <div class="details">
                <div class="name" id="name"><?php echo $row[2]?></div>
                <div class="specs">
                    <p><?php echo $row[3]?></p>
                    <p><?php echo $row[4]?></p>
                    <p><?php echo $row[5]?></p>
                    <p><?php echo $row[6]?></p>
                    <p><?php echo $row[7]?></p>
                </div>
                <div class="button_cart">
                    <button class="btn btn-warning" type="button" value='<?php echo $row[2];?>'  onClick="addCart(this.value)">ADD TO CART</button>
                </div>
             </div>
            </div>
            <?php
        }}?>
    
    <?php } ?>