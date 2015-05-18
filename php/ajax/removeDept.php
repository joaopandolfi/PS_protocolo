<?php
	
    include "../conect.php";
    include "../managePackage.php";

    $aplDept = new AplManageDepartment;
    $aplDept->delDept($_GET['id']);
    
    mysql_close();

?>