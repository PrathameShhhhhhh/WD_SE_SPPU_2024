<!DOCTYPE html>
<html>
<head><title>Welcome Page</title></head>
<body>
<?php
echo "<h1>Welcome</h1>";
date_default_timezone_set("Asia/Kolkata");
echo "<p>Current Date & Time: " . date("d-m-Y H:i:s") . "</p>";
?>
</body>
</html>