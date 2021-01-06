<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>E.C.Esperança</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">E.C.Esperança</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
								<!--	<a href="#menu" class="menuToggle"> -->
										<li><a href="index.html">Home</a></li>
										<li><a href="historia.php">História</a></li>
										<li><a href="diretoria.php">Diretoria</a></li>
										<li><a href="conselho.php">Conselho</a></li>
										<li><a href="futebol.php">Futebol</a></li>
										<li><a href="noticia.php">Noticias</a></li>
										<li><a href="formulario.php">Cadastro</a></li>
								<!--	</a>-->
								</li>
							</ul>
						</nav>
					</header>

					<article id="main">
						<header>
							<h2>E.C.Esperança</h2>
							<p>Fundado em 19 de Outubro de 1913<br/>
							Povo Novo - Rio Grande/RS<br/>
							</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<section>
									<h5>Titulos</h5>
									<div class="table-wrapper">
										<?php
											include "conecta.php";
											$sql = "SELECT  titulo.id_titulo,ds_titulo,ano,ds_time
													FROM titulo,time,time_titulo
													WHERE titulo.id_titulo=time_titulo.id_titulo
													AND time_titulo.id_time= time.id_time";
											$resultado = pg_query($conexao, $sql);
											$linhas = pg_num_rows($resultado);
										?>
										<table>
											<thead>
												<tr>
													<th>Codigo</th>
													<th>Descrição</th>
													<th>Ano</th>
													<th>Time</th>
												</tr>
											</thead>
											<tbody>
												<?php
													for ($i=0; $i < $linhas; $i++) 
													{ 
														$registro = pg_fetch_array($resultado);
													
												?>
												<tr>
													<th><?php echo $registro['id_titulo'];?></th>
													<th><?php echo $registro['ds_titulo'];?></th>
													<th><?php echo $registro['ano'];?></th>
													<th><?php echo $registro['ds_time']; ?></th>
												</tr>
												<?php
													}
												?>
											</tbody>
										</table>
									</div>
								</section>
								<section class="wrapper style5">
							<div class="inner">
								<section>
									<h5>Campeonato</h5>
									<div class="table-wrapper">
										<?php
											include "conecta.php";
											$sql = "SELECT  campeonato.id_campeonato,ds_campeonato,data, ds_time
													FROM campeonato, time, camp_time
													WHERE campeonato.id_campeonato=camp_time.id_campeonato
													AND camp_time.id_time= time.id_time";
											$resultado = pg_query($conexao, $sql);
											$linhas = pg_num_rows($resultado);
										?>
										<table>
											<thead>
												<tr>
													<th>Codigo</th>	
													<th>Descrição</th>
													<th>Ano</th>
													<th>Time</th>
												</tr>
											</thead>
											<tbody>
												<?php
													for ($i=0; $i < $linhas; $i++) 
													{ 
														$registro = pg_fetch_array($resultado);
													
												?>
												<tr>
													<th><?php echo $registro['id_campeonato']; ?></th>
													<th><?php echo $registro['ds_campeonato']; ?></th>
													<th><?php echo $registro['data']; ?></th>
													<th><?php echo $registro['ds_time']; ?></th>
												</tr>
												<?php
													}
												?>
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</section>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="#">Michele Chim</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>