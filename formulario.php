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

				<!-- Main -->
				<!--	<article id="main">
						<header>
							<h2> </h2>
							<p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>Lorem ipsum dolor</h3>
								<p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo, tempus sed finibus eget, fringilla quis risus. Maecenas et lorem quis sem varius sagittis et a est. Maecenas iaculis iaculis sem. Donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>

								<p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec dui cursus, posuere dui eget interdum. Fusce lectus magna, sagittis at facilisis vitae, pellentesque at etiam. Quisque posuere leo quis sem commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius.</p>

								<hr />

								<h4>Feugiat aliquam</h4>
								<p>Nam sapien ante, varius in pulvinar vitae, rhoncus id massa. Donec varius ex in mauris ornare, eget euismod urna egestas. Etiam lacinia tempor ipsum, sodales porttitor justo. Aliquam dolor quam, semper in tortor eu, volutpat efficitur quam. Fusce nec fermentum nisl. Aenean erat diam, tempus aliquet erat.</p>

								<p>Etiam iaculis nulla ipsum, et pharetra libero rhoncus ut. Phasellus rutrum cursus velit, eget condimentum nunc blandit vel. In at pulvinar lectus. Morbi diam ante, vulputate et imperdiet eget, fermentum non dolor. Ut eleifend sagittis tincidunt. Sed viverra commodo mi, ac rhoncus justo. Duis neque ligula, elementum ut enim vel, posuere finibus justo. Vivamus facilisis maximus nibh quis pulvinar. Quisque hendrerit in ipsum id tellus facilisis fermentum. Proin mauris dui, at vestibulum sit amet, auctor bibendum neque.</p>

							</div>
						</section>
					</article>	-->
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
									<h4>Formulário</h4>
									<form method="post" action="cad_pessoa.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												Nome: <input type="text" name="nome" id="nome"  placeholder="Nome" />
											</div>
											<div class="6u 12u$(xsmall)">
												Data de Nascimento: 
												<input type="text" name="dt_nasc" id="dt_nasc"  placeholder="Data de Nascimento" />
											</div>
											<div class="6u 12u$(xsmall)">
												Email: <input type="text" name="email" id="email"  placeholder="Email" />
											</div>
											<div class="6u 12u$(xsmall)">
												Endereço: 
												<input type="text" name="endereco" id="endereco"  placeholder="Endereço" />
											</div>
											<div class="6u 12u$(xsmall)">
												Senha: <input type="text" name="senha" id="senha"  placeholder="Senha" />
											</div>
											<div class="12u$">
												<div class="select-wrapper">
													Categoria:
													<select name='id_categoria'>
														<option selected='selected'>CATEGORIA</option>
														<?php
															include "conecta.php";
															$sql=" SELECT * FROM categoria 
																	WHERE id_categoria > 1";
															$resultado = pg_query($conexao, $sql);
															$linhas = pg_num_rows($resultado);
															echo $sql;
															for($i=0;$i<$linhas; $i++)
															{
																$registro= pg_fetch_array($resultado);
																echo"<option value='".$registro['id_categoria']."'>".$registro['ds_categoria']."</option>";
															}
														?>
													</select></br>
												</div>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="enviar" class="special" /></li>
													<li><input type="reset" value="limpar" /></li>
												</ul>
											</div>
										</div>
									</form>
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