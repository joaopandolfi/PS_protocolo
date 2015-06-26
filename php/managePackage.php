<?php
	class AplManageUser{
		function registerUser($name, $password, $type, $id_dept){
			$sql = "INSERT INTO `user`(`name`, `password`, `type`, `id_dept`) VALUES ('$name', '$password', '$type', $id_dept)";
			if (!mysql_query($sql)){ return False; }else{ return True; }
		}

		function delUser($id){
			$sql = "DELETE FROM `user` WHERE id = $id";
			if (!mysql_query($sql)){ return False; }else{ return True; }
		}
	}

	class AplManageDepartment{
		function registerDept($name){
			$sql = "INSERT INTO `department`(`name`) VALUES ('$name')";
			if (!mysql_query($sql)){ return False; }else{ return True; }
		}

		function delDept($id){
			$sql = "DELETE FROM `department` WHERE id = $id";
			if (!mysql_query($sql)){ return False; }else{ return True; }
		}
	}

	class AplManageProcess{
		function registerProcess($protocol, $type, $detail, $owner, $department, $create_date){
			$sql = "INSERT INTO `process`(`type`, `detail`, `owner`, `department`, `create_date`, `protocol`) VALUES ('$type','$detail',$owner,$department,'$create_date','$protocol')";
			if (!mysql_query($sql)){ return False; }else{ return True; }
		}

		function delProcess($id){
			$sql = "DELETE FROM `process` WHERE id = $id";
			if (!mysql_query($sql)){ return False; }else{ return True; }
		}

		function tramitProcess($idProcess,$idDepartment){
			$date = date('Y-m-d H:i:s');
			$query = "UPDATE `process` SET `department`= $idDepartment WHERE `id` = $idProcess";
       		if (!mysql_query($query)) echo "<script>alert('falha na query');</script>";

        	$query = "INSERT INTO history (idProcess,idDepartment,dateTime) VALUES ($idProcess,$idDepartment,'$date') ";
        	if (!mysql_query($query)) echo "<script>alert('falha ao atualizar o historico');</script>";
		}
	}
?>