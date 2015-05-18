<?php

    session_start();
    if(!(isset($_SESSION['user_id'])) || ($_SESSION['user_id'] == "false") || ($_SESSION['user_type'] != "Administrador")){
        echo "<script>alert('Voce não esta logado ou não possui permissão para acessar esta pagina!');</script>";
        echo "<script>location.href='../index.php';</script>";
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

    <title>Lista de Processos</title>

    <?php include "imports.php"; ?>

</head>

<body>

    <?php include "optionMenu.php"; ?>

    <!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="panel-body" id="content">

				<h1>Trabalho realizado por alunos do curso de Sistemas de Informação do Instituto Federal do Espirito Santo</h1>
				<br><br>
				
				<h4>Alunos:</h4>
                <ul> <li>Leonardo Camilo Ribeiro</li>
                <li>João Carlos Pandolfi</li> </ul>
                <h4>Professor:</h4>
                <ul> <li>Paulo</li></ul>
                <br>

                <h4>
				Este trabalho teve como objetivo a criação de um sistema de controle de processos (documentos) de modo que
				facilitasse a localização e resolução dos mesmos.
				</h4>

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