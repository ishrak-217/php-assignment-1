<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];
    
    $average = ($score1 + $score2 + $score3) / 3;
    
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    
    echo "Average Score: $average<br>";
    echo "Grade: $grade";
}
?>

<form method="post" action="">
    Enter Test Score 1: <input type="text" name="score1"><br>
    Enter Test Score 2: <input type="text" name="score2"><br>
    Enter Test Score 3: <input type="text" name="score3"><br>
    <input type="submit" value="Calculate Grade">
</form>
