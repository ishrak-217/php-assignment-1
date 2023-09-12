<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $conversion = $_POST["conversion"];

    if ($conversion == "celsius_to_fahrenheit") {
        $converted_temp = ($temperature * 9/5) + 32;
        echo "Fahrenheit: $converted_temp";
    } elseif ($conversion == "fahrenheit_to_celsius") {
        $converted_temp = ($temperature - 32) * 5/9;
        echo "Celsius: $converted_temp";
    }
}
?>

<form method="post" action="">
    Enter Temperature: <input type="text" name="temperature"><br>
    Conversion: 
    <select name="conversion">
        <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
        <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
    </select>
    <input type="submit" value="Convert">
</form>
