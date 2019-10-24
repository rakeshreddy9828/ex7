<html>
    <head>
        <title>Address</title>
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
        <div id="backgroundimagediv"><div id="os">Shipping Address</div></div>
        <div class="container">
            <form action="3.php" method="post">
            <div id="address">Shipping address</div>
            First Name:
            <input type="text" name="name">
            Last name:
            <input type="text" name="lname">
            <br><br>
            Street Address:
            <input type="text" name="streetadd">
            <br><br>s
            Address Line 2:
            <input type="text" name="lineaddress2">
            <br><br>
            City:
            <input type="text" name="city">
            State:
            <select name="state">
                <option value="TamilNadu">tamilnadu</option>
                <option value="andhra pradesh">ap</option>
                <option value="kerala">tamilnadu</option>
            </select>
            <br><br>
            Zip:
            <input type="text" name="zip">
            Phone:
            <input type="text" name="phone">
            <br><br>
            Shipping:
            <input type="radio" name="shipping" value="200 express">express rs.200
            <input type="radio" name="shipping" value="50 normal">normal rs.50
            <input type="submit" value="continue">
        </form>
        </div>
        
    </body>
</html>


