<html>
<body>
<?php
$to    = "Shaolun.du@gmail.com";
$name  = $_POST["Name"];
$email = $_POST["Email"];
$msg   = $_POST["Message"];
mail($to,$email,$msg);
?>
</body>
</html>