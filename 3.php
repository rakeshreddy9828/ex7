<?php
   session_start();
   $name = $_POST['name'];
   $lname = $_POST['lname'];
   $streetadd = $_POST['streettadd'];
   $lineaddress2 = $_POST['lineaddress2'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $phone = $_POST['phone'];
   $shipping = $_POST['shipping'];
?>
<html>
    <head>
        <title>confirm</title>
        <style>
            #backgroundimagediv{
                background-image: url('https://cdn.pixabay.com/photo/2015/11/19/08/52/banner-1050629__340.jpg');
                width:100%;
                height: 200px;
                color:white;
                padding-top: 90px;
                box-sizing: border-box;
                
            }
            img{
                height:100px;
                width: 100px;
                
            }
            .container{
                margin-left:30%;
                margin-right: auto;
            }
            .btn{
                width:100%;
            }
            body{
                font-family:"Comic Sans MS", cursive, sans-serif; 
            }
            
            #os{
                margin-left: 40%;
                font-size: 30px;
            }
        </style>    
    </head>
    <body>
        <div id="backgroundimagediv"><div id="os">Submission details</div></div>
        <div class="container">
            shirt type: <?php echo $_SESSION['shirts'] ?> <br>
            clothing type: <?php echo $_SESSION['clothingtype'] ?> <br>
            quantity: <?php echo $_SESSION['quantity'] ?> <br>
            size: <?php echo $_SESSION['size'] ?> <br>
            color: <?php echo $_SESSION['color'] ?> <br>
            name: <?php echo $name ?> <br>
            last name: <?php echo $lname ?> <br>
            Street address: <?php echo $streetadd ?> <br>
            Line address 2: <?php echo $lineaddress2 ?> <br>
            city: <?php echo $city ?> <br>
            state: <?php echo $state ?> <br>
            zip: <?php echo $zip ?> <br>
            phone: <?php echo $phone ?> <br>
            shipping: <?php echo $shipping ?> <br>
        </div>
        
    </body>
</html>


