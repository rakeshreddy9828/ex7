<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>shopping site</title>
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
        <div id="backgroundimagediv"><div id="os">Online shopping</div></div>
        <?php
            session_start();
        ?>
        <div class="container">
             <form action="1.php" method="post">
            Shirts<br>
            <img src="https://cdn11.bigcommerce.com/s-405b0/images/stencil/500x659/attribute_rule_images/2004_source_1497994547.jpg">
            <input type="checkbox" name="shirts[]" value="hoodie">hoodie
            <img src="https://cdna.4imprint.com/prod/extras/006729/391089/700/1.jpg">
            <input type="checkbox" name="shirts[]" value="tshirt">tshirt
            <br><br>
            Clothing*<br>
            <input type="radio" name="clothingtype" value="men's">men's<br>
            <input type="radio" name="clothingtype" value="women's">women's<br>
            <input type="radio" name="clothingtype" value="children's">children's<br>
            <br><br>
            Quantity*<br>
            <input type='number' name="quantity"><br>
            Size*<br>
            <select name='size'>
                <option value='small'>s</option>
                <option value='medium'>m</option>
                <option value="large">l</option>
            </select><br>
            Color*<br>
            <select name='color'>
                <option value='red'>red</option>
                <option value='blue'>blue</option>
                <option value="black">black</option>
            </select><br><br>
            <input type="submit" name="submit" value="submit" id="btn">
        </form>
        </div>
    </body>
</html>
