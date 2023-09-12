<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    
    $larger = ($num1 > $num2) ? $num1 : $num2;
    
    echo "The larger number is: $larger";
}
?>

<form method="post" action="">
    Enter Number 1: <input type="text" name="num1"><br>
    Enter Number 2: <input type="text" name="num2"><br>
    <input type="submit" value="Compare">
</form>
