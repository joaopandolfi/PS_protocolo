<?php
    
    session_start();
    if(!(isset($_SESSION['user_id'])) || ($_SESSION['user_id'] == "false") || ($_SESSION['user_type'] != "Administrador")){
        echo "<script>alert('Voce não esta logado ou não possui permissão para acessar esta pagina!');</script>";
        echo "<script>location.href='../index.php';</script>";
    }

    if (isset($_POST['moveSubmit'])){
        include "conect.php";       
        include "managePackage.php";
        $aplProcess = new AplManageProcess;
        $idDepartment = $_POST['dept'];
        $idProcess = $_POST['id_process'];
        $aplProcess->tramitProcess($idProcess,$idDepartment);
        mysql_close($con);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Protocolos</title>

    <?php include "imports.php"; ?>
    <link href="../dist/css/customStyle.css" rel="stylesheet">
    <script src="../js/function.js"></script>

</head>

<body onload="getList('')">

    <?php include "optionMenu.php"; ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="panel-body" id="content">

                	<form method="post" name="frm">
	                	<div class="alert alert-success" role="alert">
							<div class="input-group custom-search-form">
	                        	<input onkeyup="search()" type="text" class="form-control" name="searchInput" placeholder="Search..." aria-controls="dataTables-example">
	                            <span class="input-group-btn">
	                                <button class="btn btn-default" type="submit" name="searchSubmit">
	                                    <i class="fa fa-search"></i>
	                                </button>
	                            </span>
	                        </div>
	                    </div>
                	</form>

                    <!-- table start -->
					<div class="row">
						<div class="col">
							<div class="table-responsive">
								<div class="panel panel-default">
                                    <!-- Default panel contents -->
                                    <div class="panel-heading">Lista de Protocolos</div>
                                    <table class="table table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Protocolo</th>
                                                <th>Proprietário</th>
                                                <th>Departamento Atual</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_content">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
 
	                </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>