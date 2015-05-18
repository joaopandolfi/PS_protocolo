<?php
	
    include "../conect.php";
    include "../managePackage.php";

    $aplUser = new AplManageUser;
    $aplUser->delUser($_GET['id']);
    
    mysql_close();

?>