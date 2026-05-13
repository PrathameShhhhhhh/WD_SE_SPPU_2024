<!DOCTYPE html>
<html>
<body>
<h2>User Form</h2>
<form action="Assignment_10.php" method="post">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if (($_SERVER["REQUEST_METHOD"] ?? '') == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    echo "<h2>Form Data Received</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
}
?>

</body>
</html>