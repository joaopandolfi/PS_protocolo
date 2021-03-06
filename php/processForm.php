<?php

  session_start();
  if(!(isset($_SESSION['user_id'])) || ($_SESSION['user_id'] == "false") || ($_SESSION['user_type'] != "Administrador")){
      echo "<script>alert('Voce não esta logado ou não possui permissão para acessar esta pagina!');</script>";
      echo "<script>location.href='../index.php';</script>";
  }

  if (isset($_POST['processSubmit'])){
    include "conect.php";
    include "managePackage.php";
    $aplProcess = new AplManageProcess;
    if ($aplProcess->registerProcess($_POST['protocol'], $_POST['type'], $_POST['detail'], $_POST['user'], $_POST['department'], $_POST['create_date'])){
      echo "<script>alert('Cadastro Realizado');</script>";
    }else{
      echo "<script>alert('Deu Ruim');</script>";
    }
    
    mysql_close($con);
  }

  function getSelect($option) {
      include "conect.php";

      if ($option == 1) $table = 'user'; else $table = 'department';
      echo "<select class='form-control' name='$table'>";
      $query = "SELECT id, name FROM $table ORDER BY id";
      $consult = mysql_query($query, $con);

      while($line = mysql_fetch_array($consult))
          echo "<option value=\"".$line["id"]."\"> ".$line["name"]."</option>";

      echo "</select>";
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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include "optionMenu.php"; ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="panel-body">
                    
                    <form class="form-horizontal" role="form" method='post'>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="protocol">Protocolo:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="protocol" name="protocol" placeholder="Enter protocol">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="type">Tipo:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="dt">Detalhamento:</label>
                          <div class="col-sm-7">
                            <textarea class="form-control" rows="3" name='detail'></textarea>
                          </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Requisitante:</label>
                        <div class="col-sm-7"> 
                          <?php getSelect(1) ?>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Departameto:</label>
                        <div class="col-sm-7"> 
                          <?php getSelect(2) ?>
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="date">Data Criação:</label>
                          <div class="col-sm-7">
                            <input type="date" class="form-control" id="date" name='create_date' placeholder="Enter type">
                          </div>
                      </div>
                      
                      <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name='processSubmit' class="btn btn-default">Cadastrar</button>
                        </div>
                      </div>
                    </form>
                    
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