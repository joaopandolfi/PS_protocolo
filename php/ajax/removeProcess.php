<?php
	
    include "../conect.php";
    include "../managePackage.php";

    $aplProcess = new AplManageProcess;
    $aplProcess->delProcess($_GET['id']);
    
    mysql_close();

?>