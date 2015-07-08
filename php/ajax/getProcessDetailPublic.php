<?php
	
	session_start();
	function getSelect() {
		include "../conect.php";
        echo "<select class='form-control' name='dept'>";
        $query = "SELECT id, name FROM department ORDER BY id";
        $consult = mysql_query($query, $con);

        while($line = mysql_fetch_array($consult))
            echo "<option value=\"".$line["id"]."\"> ".$line["name"]."</option>";

        echo "</select>";
    }

	include "../conect.php";
    $query = "SELECT process.*, user.name AS un, department.name AS dn, process.id AS p_id FROM process INNER JOIN user ON (process.owner = user.id) INNER JOIN department ON (process.department = department.id) WHERE process.id = ".$_GET['id'];
    $consult = mysql_query($query, $con);
    if (!$consult) echo "<script>alert('falha na query');</script>";
    $line = mysql_fetch_array($consult);
    
    $id = $line['p_id'];
	$protocol = $line['protocol'];
	$type = $line['type'];
	$detail = $line['detail'];
	$owner = $line['un'];
	$department = $line['dn'];
	$create_date = $line['create_date'];

	echo ' <form class="form-horizontal" role="form" method="post">

	<input type="hidden" name="id_process" value="'.$id.'">
	<div class="form-group"> <label class="control-label col-sm-2" for="protocol">Protocolo:</label>
	<div class="col-sm-7"> <input READONLY type="text" class="form-control" value="'.$protocol.'">
	</div> </div>
      
	<div class="form-group"> <label class="control-label col-sm-2" for="type">Tipo:</label>
	<div class="col-sm-7"> <input READONLY type="text" class="form-control" value="'.$type.'">
	</div> </div>

	<div class="form-group"> <label class="control-label col-sm-2" for="dt">Detalhamento:</label>
	<div class="col-sm-7"> <textarea READONLY class="form-control" rows="3">'.$detail.'</textarea>
	</div> </div>
      
	<div class="form-group"> <label class="control-label col-sm-2" for="pwd">Requisitante:</label>
	<div class="col-sm-7">  <input READONLY type="text" class="form-control" value="'.$owner.'">
	</div> </div>
      
	<div class="form-group"> <label class="control-label col-sm-2" for="pwd">Departameto:</label>
	<div class="col-sm-7"> <input READONLY type="text" class="form-control" value="'.$department.'">
	</div> </div>

	<div class="form-group"> <label class="control-label col-sm-2" for="date">Data Criação:</label>
	<div class="col-sm-7"> <input READONLY type="date" class="form-control" value="'.$create_date.'">
	</div> </div>';


    mysql_close($con);
?>