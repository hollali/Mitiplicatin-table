<!DOCTYPE html>
<html>
  
<body>
    <center>
        <h1 style="color: green;">
            Multiplication Table 
        </h1>
  
        <h3>
            Program to print multiplication<br>
            table of any number 
        </h3>
  
        <form method="POST">
            Enter a number: 
            <input type="text" name="number"autocomplete="off">
              
            <!--<input type="Submit" 
                value="Get Multiplication Table">-->
                Please Press Enter
        </form>
    </center>
</body>
  
</html>
  
<?php
if($_POST) {
    $num = $_POST["number"];
  
    echo nl2br("<p style='text-align: center;'>
        Multiplication Table of $num: </p>
    ");
          
    for ($i = 1; $i <= 20; $i++) {
        echo ("<p style='text-align: center;'>$num"
            . " X " . "$i" . " = " 
            . $num * $i . "</p>
        ");
    }
}
?>