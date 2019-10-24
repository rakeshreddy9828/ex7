
<?php
 session_start();
  foreach ($_POST['shirts'] as $selected){
      $_SESSION['shirts']=$selected;
  }
  $_SESSION['clothingtype']=$_POST['clothingtype'];
  $_SESSION['quantity']=$_POST['quantity'];
  $_SESSION['size']=$_POST['size'];
  $_SESSION['color']=$_POST['color'];
  header("Location:http://webtech.karunya.edu/~urk17cs353/2.php");


