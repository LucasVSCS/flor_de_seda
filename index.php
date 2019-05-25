<?php
session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['cpf']) == true)) {
	unset($_SESSION['email']);
	unset($_SESSION['cpf']);
	header('location:autentica.php');
}
$nivelAcesso = $_SESSION['nivelAcesso'];
$nome = $_SESSION['nome'];

?>
<!doctype html>
<html class="fixed sidebar-left-collapsed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Painel | Home</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">
	<link rel="shortcut icon" href="assets/images/logo.ico" />

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css" />

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
	include 'model/Cliente/modelDatabase.php';
	include 'model/Estoque/modelDatabase.php';
	include 'model/Fornecedores/modelDatabase.php';
	include 'model/Funcionarios/modelDatabase.php';
	include 'model/Pedidos/modelDatabase.php';
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
							<span class="name"><?php echo $nome ?></span>
							<span class="role"><?php echo $nivelAcesso ?></span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
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
					<h2>Painel principal</h2>

					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="index.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Painel principal</span></li>
						</ol>

						<a class="sidebar-right-toggle"><i class="fa fa-bars"></i></a>
					</div>
				</header>

				<!-- start: page -->
				<p class="text-center" style="font-size: 30px;">Ultimos produtos cadastrados</p>
				<div class="owl-carousel" data-plugin-carousel data-plugin-options='{ "autoPlay": 3000, "items": 6, "itemsDesktop": [1199,4], "itemsDesktopSmall": [979,3], "itemsTablet": [768,2], "itemsMobile": [479,1] }'>
					<div class="item spaced"><img class="img-thumbnail" src="assets/images/1.jpg" alt=""></div>
					<div class="item spaced"><img class="img-thumbnail" src="assets/images/2.jpg" alt=""></div>
					<div class="item spaced"><img class="img-thumbnail" src="assets/images/3.jpg" alt=""></div>
					<div class="item spaced"><img class="img-thumbnail" src="assets/images/4.jpg" alt=""></div>
					<div class="item spaced"><img class="img-thumbnail" src="assets/images/5.jpg" alt=""></div>
					<div class="item spaced"><img class="img-thumbnail" src="assets/images/6.jpg" alt=""></div>
				</div>

				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-primary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-cubes"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Produtos cadastrados</h4>
										<div class="info">
											<strong class="amount"><?php echo $qtndProdutos; ?></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="visualizarEstoque.php">Visualizar registros</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-tertiary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-life-ring"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Funcionários Cadastrados</h4>
										<div class="info">
											<strong class="amount"><?php echo $qtndFuncionarios; ?></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="visualizarFuncionarios.php">Visualizar registros</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-quartenary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-shopping-cart"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Pedidos Feitos</h4>
										<div class="info">
											<strong class="amount"><?php echo $qtndPedidos; ?></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="visualizarPedidos.php">Visualizar registros</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-secondary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-user"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Clientes Cadastrados</h4>
										<div class="info">
											<strong class="amount"><?php echo $qtndClientes; ?></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="visualizarClientes.php">Visualizar registros</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<!-- end: page -->
			</section>
		</div>


		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/owl-carousel/owl.carousel.js"></script>

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