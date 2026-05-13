<!DOCTYPE html>
<html>
<head><title>Array Input</title></head>
<body>
<h2>Enter values (comma separated)</h2>
<form method="post">
    <input type="text" name="values" placeholder="Apple, Banana, Mango" required>
    <input type="submit" value="Submit">
</form>
<?php
if (($_SERVER["REQUEST_METHOD"] ?? '') == "POST") {
    $array = explode(",", $_POST['values'] ?? '');
    echo "<h3>Entered Values:</h3>";
    foreach ($array as $value) {
        echo htmlspecialchars(trim($value)) . "<br>";
    }
}
?>
</body>
</html>