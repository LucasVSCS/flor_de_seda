<!doctype html>
<html class="fixed sidebar-left-collapsed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Painel | Cadastro de Pedidos</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <link rel="shortcut icon" href="assets/images/logo.ico" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet"
    type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="assets/vendor/dropzone/css/basic.css" />
    <link rel="stylesheet" href="assets/vendor/dropzone/css/dropzone.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
    <link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
    <link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
    <link rel="stylesheet" href="assets/vendor/codemirror/lib/codemirror.css" />
    <link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img src="assets/images/logo.png" height="45" alt="Porto Admin" />
                    Flor de Seda | Floricultura
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="assets/images/user.png" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name">Lucas VSCS</span>
                        <span class="role">Administrador</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.php"><i class="fa fa-power-off"></i>
                            Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navegação
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li>
                            <a href="index.php">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Página principal</span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Gerenciar Clientes</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="cadastroClientes.php">
                                        Registrar clientes
                                    </a>
                                </li>
                                <li>
                                    <a href="visualizarClientes.php">
                                        Visualizar clientes
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>Gerenciar Funcionários</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="cadastroFuncionarios.php">
                                        Registrar funcionários
                                    </a>
                                </li>
                                <li>
                                    <a href="visualizarFuncionarios.php">
                                        Visualizar funcionários
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-bank" aria-hidden="true"></i>
                                <span>Gerenciar Fornecedores</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="cadastroFornecedores.php">
                                        Registrar fornecedores
                                    </a>
                                </li>
                                <li>
                                    <a href="visualizarFornecedores.php">
                                        Visualizar fornecedores
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Gerenciar Pedidos</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="cadastroPedidos.php">
                                        Registrar pedidos
                                    </a>
                                </li>
                                <li>
                                    <a href="visualizarPedidos.php">
                                        Visualizar pedidos
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-cubes" aria-hidden="true"></i>
                                <span>Gerenciar Estoque</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="cadastroEstoque.php">
                                        Cadastrar produto
                                    </a>
                                </li>
                                <li>
                                    <a href="entradaEstoque.php">
                                        Dar entrada no estoque
                                    </a>
                                </li>
                                <li>
                                    <a href="visualizarEstoque.php">
                                        Visualizar estoque
                                    </a>
                                </li>
                                <li>
                                    <a href="baixaEstoque.php">
                                        Dar baixa no estoque
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <hr class="separator" />

                <div class="sidebar-widget widget-tasks">
                    <div class="widget-header">
                        <h6>Fornecedores externos</h6>
                        <div class="widget-toggle">+</div>
                    </div>
                    <div class="widget-content">
                        <ul class="list-unstyled m-none">
                            <li><a href="http://www.holambelo.com.br/">Holambelo Flores e Plantas Ltda.</a></li>
                            <li><a href="http://atacadodasflores.com/">Atacadão das Flores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- end: sidebar -->

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Cadastro de Pedido</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Gerenciar Pedidos</span></li>
                    <li><span>Registrar pedido</span></li>
                </ol>

                <a class="sidebar-right-toggle"><i class="fa fa fa-bars"></i></a>
            </div>
        </header>

        <!-- start: page -->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Informações do pedido</h2>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="POST" action="controller/Pedido/pedidoController.php">

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputSuccess">Selecionar cliente</label>
                                <div class="col-md-6">
                                    <select class="form-control mb-md" name="cliente">
                                        <option selected disabled>Selecione um dos clientes registrados</option>
                                        <?php
                                        $con = new mysqli("localhost", "root", "", "floricultura");

                                        $qryLista = mysqli_query($con, "SELECT idClientes, razao FROM clientes");
                                        while ($dados = mysqli_fetch_assoc($qryLista)) {
                                            echo '<option value="' . $dados["idClientes"] . '">' . $dados["idClientes"] . ' - ' . $dados["razao"] . '</option>';
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputSuccess">Selecionar funcionário
                                vendedor</label>
                                <div class="col-md-6">
                                    <select class="form-control mb-md" name="funcionario">
                                        <option selected disabled>Selecione um dos funcionários registrados</option>
                                        <?php
                                        $con = new mysqli("localhost", "root", "", "floricultura");

                                        $qryLista = mysqli_query($con, "SELECT idFuncionarios, nome FROM funcionarios");
                                        while ($dados = mysqli_fetch_assoc($qryLista)) {
                                            echo '<option value="' . $dados["idFuncionarios"] . '">' . $dados["idFuncionarios"] . ' - ' . $dados["nome"] . '</option>';
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputSuccess">Selecionar produto</label>
                                <div class="col-md-6">
                                    <select class="form-control mb-md" name="produto">
                                        <option selected disabled>Selecione um dos produtos disponíveis</option>
                                        <?php
                                        $con = new mysqli("localhost", "root", "", "floricultura");

                                        $qryLista = mysqli_query($con, "SELECT idProdutos, nome FROM produtos");
                                        while ($dados = mysqli_fetch_assoc($qryLista)) {
                                            echo '<option value="' . $dados["idProdutos"] . '">'.$dados["nome"].'</option>';
                                        }
                                        mysqli_close($con);  
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">Quantidade</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-cube"></i>
                                        </span>
                                        <input type="number" name="quantidade" class="form-control" id="quantidade">
                                    </div>
                                </div>
                            </div>


                                       <!--
                                    <div class="form-group">
										<label class="col-md-3 control-label">Selecionar produtos</label>
											<div class="col-md-6">
												<select multiple data-plugin-selectTwo class="form-control populate" name="produtos[]">
                                                        <optgroup label="Produtos disponiveis">
                                                            <?php
                                                            /*
                                                            $con = new mysqli("localhost", "root", "", "floricultura");

                                                            $qryLista = mysqli_query($con, "SELECT idProdutos, nome FROM produtos");
                                                            while ($dados = mysqli_fetch_assoc($qryLista)) {
                                                                echo '<option value="' . $dados["idProdutos"] . '">'.$dados["nome"].'</option>';
                                                            }
                                                            mysqli_close($con);
                                                            */
                                                            ?>
                                                        </optgroup>
												</select>
											</div>
                                        </div>

                                    -->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="textareaDefault">Descrição do pedido</label>
                                        <div class="col-md-6">
                                         <textarea class="form-control" rows="5" data-plugin-maxlength maxlength="140" name="descricao"></textarea>
                                         <p>
                                          Número maximo de caracteres permitidos: 140.
                                      </p>
                                  </div>
                              </div>

                              <div class="col-md-7 col-md-offset-4">
                                <input type="submit" name="enviar" class="mb-xs mt-xs mr-xs btn btn-primary"
                                value="Cadastrar">
                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Voltar</button>
                                <button type="reset" class="mb-xs mt-xs mr-xs btn btn-warning">Limpar</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>

    </div>
</div>


<!-- end: page -->



<!-- Vendor -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>
<script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="assets/vendor/select2/select2.js"></script>
<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="assets/vendor/fuelux/js/spinner.js"></script>
<script src="assets/vendor/dropzone/dropzone.js"></script>
<script src="assets/vendor/bootstrap-markdown/js/markdown.js"></script>
<script src="assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
<script src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script src="assets/vendor/codemirror/lib/codemirror.js"></script>
<script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>
<script src="assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
<script src="assets/vendor/codemirror/mode/javascript/javascript.js"></script>
<script src="assets/vendor/codemirror/mode/xml/xml.js"></script>
<script src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="assets/vendor/codemirror/mode/css/css.js"></script>
<script src="assets/vendor/summernote/summernote.js"></script>
<script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
<script src="assets/vendor/ios7-switch/ios7-switch.js"></script>
<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets/javascripts/theme.init.js"></script>

<!-- Examples -->
<script src="assets/javascripts/ui-elements/examples.charts.js"></script>

</section>
</body>

</html>