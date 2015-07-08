<?php
	session_start();
	$_SESSION['user_id'] = "false";

	if(isset($_POST["getIn"])){
		include "php/conect.php";
		$name = $_POST["login"];
		$password = $_POST["pwd"];
		$query = "SELECT * FROM user WHERE name=\"$name\" and password=\"$password\"";
		$consult = mysql_fetch_array(mysql_query($query, $con));
		mysql_close($con);

		if (!$consult){
			echo "<script>alert('Senha ou Usuario Invalidos!');</script>";
		}else{
			$_SESSION['user_id'] = $consult["id"];
			$_SESSION['user_type'] = $consult["type"];
			$_SESSION['user_dept'] = $consult["id_dept"];

			if ($consult["type"] == "Vizualizador")
				echo "<script>location.href='php/view.php';</script>";
			
			if ($consult["type"] == "Chefe de Setor")
				echo "<script>location.href='php/departmentView.php';</script>";

			echo "<script>location.href='php/indexs.php';</script>";
		}
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

	<title>Process Control</title>

	<!-- Bootstrap Core CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nome" name="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="********" name="pwd" type="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="getIn" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>