<!DOCTYPE html>
<html>
<head><title>String Manipulation</title></head>
<body>
<h2>String Manipulation</h2>
<form method="post">
    Enter a string: <input type="text" name="inputString" required>
    <input type="submit" value="Process">
</form>
<?php
if (($_SERVER["REQUEST_METHOD"] ?? '') == "POST") {
    $str = $_POST["inputString"] ?? '';
    echo "<h3>Results:</h3>";
    echo "Length: " . strlen($str) . "<br>";
    echo "Reversed: " . strrev($str) . "<br>";
    echo "Uppercase: " . strtoupper($str) . "<br>";
    echo "Lowercase: " . strtolower($str) . "<br>";
}
?>
</body>
</html>