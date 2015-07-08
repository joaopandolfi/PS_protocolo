
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Protocolos</title>

    <?php include "php/imports.php"; ?>
    <link href="dist/css/customStyle.css" rel="stylesheet">
    <script src="js/function.js"></script>

</head>

<body onload="">
    
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Biluga O.S 2.0</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li> <a href="login.php"><i class="fa fa-tasks fa-fw"></i> Login</a> </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>

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