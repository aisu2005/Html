<html>
<body>
<?php
$players=array("Virat kohli","Rohit sharma","KL Rahul","Hardik pandya","Shubman Gill","Ravindra Jadeja");
$player_no=array("45","23","74","31","61","33");
?>

<center><h2>Indian Cricket Players</h2>

<table border="1" width="30%">
<tr>
<th>Player No</th>
<th>Player Name</th>
</tr>

<?php
//use one loop and match both arrays by index
for ($i=0; $i<count($players); $i++) {
echo "<tr>";
echo "<td>". $player_no[$i]."</td>";
echo "<td>". $players[$i]."</td>";
echo "</tr>";
}
?>
</center>
</table>
</body>
</html>
