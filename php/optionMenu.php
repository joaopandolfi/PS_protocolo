<?php

echo '
    <script>
        function get_out(){
            if(confirm("deseja mesmo sair?"))
                location.href = "../index.php";
        }
    </script>
    
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
                <a class="navbar-brand" href="#">Protocool O.S 3.1</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li> <a href="indexs.php"><i class="fa fa-tasks fa-fw"></i> Processos</a> </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Cadastrar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="userForm.php">Cadastrar Usuarios</a> </li>
                                <li> <a href="deptForm.php">Cadastrar Departamentos</a> </li>
                                <li> <a href="processForm.php">Cadastrar Processos</a> </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Listar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="userList.php">Listar Usuarios</a> </li>
                                <li> <a href="deptList.php">Listar Departamentos</a> </li>
                                <li> <a href="processList.php">Listar Processos</a> </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li> <a href="info.php"><i class="fa fa-question fa-fw"></i> Sobre</a> </li>
                        <li> <a href="#" onclick="get_out()"><i class="fa fa-sign-out fa-fw"></i> Sair</a> </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>';
?>