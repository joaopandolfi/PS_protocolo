<?php
	
	session_start();
	include "../conect.php";

	switch ($_SESSION['user_type']) {
		case 'Vizualizador':
			$_GET['condition'] .= " AND process.owner = ".$_SESSION['user_id'];
			break;
		
		case 'Chefe de Setor':
			$_GET['condition'] .= " AND process.department = ".$_SESSION['user_dept'];
			break;	
	}

	$query = "SELECT process.*, user.name AS un, department.name AS dn, process.id AS p_id FROM process INNER JOIN user ON (process.owner = user.id) INNER JOIN department ON (process.department = department.id) ".$_GET['condition'];
	$consult = mysql_query($query, $con);
	#echo $query;
	while($line = mysql_fetch_array($consult))
	  echo "<tr style='cursor:pointer;' onclick='seeDetail(".$line["p_id"].")'><td>".$line["protocol"]."</td><td>".$line["un"]."</td><td>".$line["dn"]."</td></tr>";

	mysql_close($con);

?>