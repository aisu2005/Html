<!DOCTYPE HTML>
<html>
<head>
<title> Student Array Sorting</title>
</head>
<body>
<?php
$students=array("Aisu","Anju","Nandu","Leya","fidha");
echo "Original Array:<br>";
print_r($students);

asort($students);
echo"<br><br>Ascending order:<br>";
print_r($students);

arsort($students);
echo"<br><br>Descending Order:<br>";
print_r($students);
?>
</body>
</html>
