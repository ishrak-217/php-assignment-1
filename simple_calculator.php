<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    
    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Division by zero is not allowed.";
            }
            break;
        default:
            echo "Invalid operation.";
    }
    
    if (isset($result)) {
        echo "Result: $result";
    }
}
?>

<form method="post" action="">
    Enter Number 1: <input type="text" name="num1"><br>
    Enter Number 2: <input type="text" name="num2"><br>
    Select Operation: 
    <select name="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select>
    <input type="submit" value="Calculate">
</form>
