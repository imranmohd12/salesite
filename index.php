<!Doctype html>
<html>
    <head>
        <title>Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
        <!--script src="ajax.js"></script-->
    </head>
    <body>
        <div class="wrapper">
            <div class="title_head">
                <div class="title">
                    <h1>SHOP</h1>
                </div>
            <div class="menu_options">
                
                <div class="icon_style">
                    Home   
                </div>
                    
                <div class="icon_style">
                    Cart
                </div>
                </div>
            </div>
        <div class="category_select">
            <form action="" method="POST" >
                <select name="category" id="category" onChange="changeprod()" class="browser-default custom-select">
                    <option value="" selected disabled>--Select Category--</option>
                    <option value="mobiles">Mobiles</option>
                    <option value="laptops">Laptops</option>
                    <option value="headphones">Headphones</option>
                    <option value="wearables">Wearables</option>
                </select>
            </form>
        </div>
        <div class="prod_container" id="product">    
        </div>
        <h2 class="cart_title">Cart</h2>
        <h3 class="text">Dashboard</h3>
        <div class="cart table-responsive" id="cart_ret"> 
        </div>
        <script>
         var temp= document.getElementById("category").value;
        function changeprod(){
                var xmlhttp = new XMLHttpRequest();
                var temp = document.getElementById("category").value;
                xmlhttp.open("GET","fetch.php?prod="+temp,false);
                xmlhttp.send(null);
                document.getElementById("product").innerHTML = xmlhttp.responseText;
                
            }
            
            function addCart(str)
            {
                var xmlhttp = new XMLHttpRequest();
                var temp = document.getElementById("category").value;
                var temp1 = str;

                xmlhttp.open("GET","cart.php?a="+temp+"&b="+temp1,false);
                
                xmlhttp.send(null);
                document.getElementById("cart_ret").innerHTML = xmlhttp.responseText;
            }
            function remove(abc)
            {
                var xmlhttp = new XMLHttpRequest();
                
                var temp2 = abc;
                xmlhttp.open("GET","remove.php?c="+temp2,false);
                xmlhttp.send(null);
                document.getElementById("cart_ret").innerHTML = xmlhttp.responseText;
            }
            function clearcart(abc)
            {
                var xmlhttp = new XMLHttpRequest();
               
                xmlhttp.open("GET","clearcart.php?c=",false);
                xmlhttp.send(null);
                document.getElementById("cart_ret").innerHTML = xmlhttp.responseText;
            }
            </script>
        </div>
    </body>
</html>