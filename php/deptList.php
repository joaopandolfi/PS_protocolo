<?php

    session_start();
    if(!(isset($_SESSION['user_id'])) || ($_SESSION['user_id'] == "false") || ($_SESSION['user_type'] != "Administrador")){
        echo "<script>alert('Voce não esta logado ou não possui permissão para acessar esta pagina!');</script>";
        echo "<script>location.href='../index.php';</script>";
    }

    function getList(){
        include "conect.php";
        $query = "SELECT * FROM department";
        $consult = mysql_query($query, $con);
        if (!$consult) echo "<script>alert('falha na query');</script>";
        $button = "<td><div class='removeButton' onclick='removeDept(";

        while($line = mysql_fetch_array($consult))
          echo "<tr style='cursor:pointer;'><td>".$line["id"]."</td><td>".$line["name"]."</td>$button".$line["id"].")'>Remover</div></td></tr>";

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

    <title>Lista de Departamentos</title>

    <?php include "imports.php"; ?>
    <link href="../dist/css/customStyle.css" rel="stylesheet">
    <script src="../js/function.js"></script>

</head>

<body>

    <?php include "optionMenu.php"; ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <div class="panel panel-default">
                                    <!-- Default panel contents -->
                                    <div class="panel-heading">Lista de Departamentos</div>
                                    <table class="table table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php getList(); ?>
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