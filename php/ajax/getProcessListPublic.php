<?php
	
	session_start();
	include "../conect.php";
	
	$query = "SELECT process.*, user.name AS un, department.name AS dn, process.id AS p_id FROM process INNER JOIN user ON (process.owner = user.id) INNER JOIN department ON (process.department = department.id)  WHERE process.protocol = ".$_GET['condition'];
	$consult = mysql_query($query, $con);
	#echo $query;
	while($line = @mysql_fetch_array($consult))
	  echo "<tr style='cursor:pointer;' onclick='seePublicDetail(".$line["p_id"].")'><td>".$line["protocol"]."</td><td>".$line["un"]."</td><td>".$line["dn"]."</td></tr>";

	mysql_close($con);

?>