<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    
    if ($number % 2 == 0) {
        echo "The number $number is even.";
    } else {
        echo "The number $number is odd.";
    }
}
?>

<form method="post" action="">
    Enter a Number: <input type="text" name="number"><br>
    <input type="submit" value="Check">
</form>
