<html lang="en">
	<head>
	<meta charset="utf-8" />
	<title>Sistema de Trazabilidad</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
									<h1>
										<i class="icon-leaf green"></i>
										<span class="red">Sistema de Trazabilidad</span>
									</h1>
								</div>
							</div>
							<div class="space-6"></div>
							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													<i class="icon-coffee green"></i>
													Digite su informacion!!
												</h4>
												<div class="space-6"></div>
												<fieldset>
													<label>
														<span class="block input-icon input-icon-right">
															<input type="text" class="span12" placeholder="Username" id="usuario" name="usuario"/>
															<i class="icon-user"></i>
														</span>
													</label>
													<label>
														<span class="block input-icon input-icon-right">
															<input type="password" class="span12" placeholder="Password" id="pass" name="pass"/>
															<i class="icon-lock"></i>
														</span>
													</label>
													<div class="space"></div>
													<!-- zonas-->
													<select class="redondear" id="perfil" name="zona">
														<option value="nada">--Seleccione Zona--</option>	
					                	<option value='Zona Roja'>Zona Roja</option>
					                	<option value='Zona Azul'>Zona Azul</option>
					                	<option value='Zona Verde'>Zona Verde</option>
					                	<option value='Administrador'>Administrador</option>
						            	</select>
										      <!--fin zonas-->
													<div class="space-4"></div>
													<button class="width-35 pull-right btn btn-small btn-primary" onclick="logeo()">
														<i class="icon-key"></i>
														Entrar
													</button>
												</fieldset>
											</div><!--/widget-body-->
										</div><!--/login-box-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php require_once ("alerts.php") ?>

		<script src="js/login.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>


		<!--script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script-->
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<script src="assets/js/flot/jquery.flot.min.js"></script>
		<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script src="assets/js/jquery.dataTables.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
		<script src="assets/js/dataTables.responsive.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/jquery-ui.js"></script>



	</body>
</html>
