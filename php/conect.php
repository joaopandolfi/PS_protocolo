<?php
	$con = mysql_connect("localhost","root","usbw") or die ("não foi possivel conectar!");
	mysql_select_db("protocolcontrol", $con) or die("erro ao conectar o banco de dados!");
?>