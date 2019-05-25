<!doctype html>
<html class="fixed sidebar-left-collapsed">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Painel | Editar Fornecedores</title>
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
	<link rel="stylesheet" href="assets/vendor/select2/select2.css" />

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
<?php
session_start();
$id = $_SESSION['id'];
$razao = $_SESSION['razao'];
$cnpj = $_SESSION['cnpj'];
$fone_um = $_SESSION['fone_um'];
$fone_dois = $_SESSION['fone_dois'];
$email = $_SESSION['email'];
$estado = $_SESSION['estado'];
$cidade = $_SESSION['cidade'];
$cep = $_SESSION['cep'];
$bairro = $_SESSION['bairro'];
$logradouro = $_SESSION['logradouro'];
$complemento = $_SESSION['complemento'];
?>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="../" class="logo">
					<img src="assets/images/logo.png" height="45" alt="Porto Admin" />
					Flor de Seda | Floricultura
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
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
								<a role="menuitem" tabindex="-1" href="pages-signin.php"><i class="fa fa-power-off"></i> Logout</a>
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
					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
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
					<h2><?php echo "Editar dados do cliente " . $razao; ?></h2>

					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="index.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Gerenciar Clientes</span></li>
							<li><span>Editar Cliente</span></li>
						</ol>

						<a class="sidebar-right-toggle" ><i class="fa fa fa-bars"></i></a>
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

								<h2 class="panel-title">Dados do Cliente</h2>
							</header>
							<div class="panel-body">
								<form class="form-horizontal form-bordered" method="POST" action="controller/Fornecedor/fornecedorController.php">

									<div class="form-group">
										<label class="col-md-3 control-label">CNPJ</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-bank"></i>
												</span>
												<input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="__.___.___/____-__" value="<?php echo $cnpj; ?>" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Razão Social</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-header"></i>
												</span>
												<input type="text" name="razao" class="form-control" id="razao" value="<?php echo $razao; ?>" required>
											</div>
										</div>
									</div>

									<h2 class="panel-title">Contato</h2>

									<div class="form-group">
										<label class="col-md-3 control-label">Telefone 1</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="text" name="foneUm" class="form-control" id="foneUm" data-plugin-masked-input data-input-mask="(99)99999-9999" placeholder="(__)_____-____" value="<?php echo $fone_um; ?>" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Telefone 2</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="text" name="foneDois" class="form-control" id="foneDois" data-plugin-masked-input data-input-mask="(99)99999-9999" placeholder="(__)_____-____" value="<?php echo $fone_dois; ?>" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">E-mail</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
												<input type="text" name="mail" class="form-control" id="mail" value="<?php echo $email; ?>" required>
											</div>
										</div>
									</div>

									<h2 class="panel-title">Endereço</h2>

									<div class="form-group">
										<label class="col-md-3 control-label">Estado</label>
										<div class="col-md-6">
											<select data-plugin-selectTwo class="form-control populate" name="estado" required>
												<option value="AC">Acre</option>
												<option value="AL">Alagoas</option>
												<option value="AP">Amapá</option>
												<option value="AM">Amazonas</option>
												<option value="BA">Bahia</option>
												<option value="CE">Ceará</option>
												<option value="DF">Distrito Federal</option>
												<option value="ES">Espírito Santo</option>
												<option value="GO">Goiás</option>
												<option value="MA">Maranhão</option>
												<option value="MT">Mato Grosso</option>
												<option value="MS">Mato Grosso do Sul</option>
												<option value="MG">Minas Gerais</option>
												<option value="PA">Pará</option>
												<option value="PB">Paraíba</option>
												<option value="PR">Paraná</option>
												<option value="PE">Pernambuco</option>
												<option value="PI">Piauí</option>
												<option value="RJ">Rio de Janeiro</option>
												<option value="RN">Rio Grande do Norte</option>
												<option value="RS">Rio Grande do Sul</option>
												<option value="RO">Rondônia</option>
												<option value="RR">Roraima</option>
												<option value="SC">Santa Catarina</option>
												<option value="SP">São Paulo</option>
												<option value="SE">Sergipe</option>
												<option value="TO">Tocantins</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Cidade</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building"></i>
												</span>
												<input type="text" name="cidade" class="form-control" id="cidade" value="<?php echo $cidade; ?>" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">CEP</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building"></i>
												</span>
												<input type="number" name="cep" class="form-control" id="cep" value="<?php echo $cep; ?>" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Bairro</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building"></i>
												</span>
												<input type="text" name="bairro" class="form-control" id="bairro" value="<?php echo $bairro; ?>" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Logradouro</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building"></i>
												</span>
												<input type="text" name="logradouro" class="form-control" id="logradouro" value="<?php echo $logradouro; ?>" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Complemento</label>
										<div class="col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-building"></i>
												</span>
												<input type="text" name="complemento" class="form-control" id="complemento" value="<?php echo $complemento; ?>" required>
											</div>
										</div>
									</div>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">

									<div class="col-md-6 col-md-offset-3">
										<input type="submit" name="alterarDados" class="mb-xs mt-xs mr-xs btn btn-primary" value="Alterar dados">
										<button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Voltar</button>
										<button type="button" class="mb-xs mt-xs mr-xs btn btn-warning">Limpar</button>
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
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>


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