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
	}
?>