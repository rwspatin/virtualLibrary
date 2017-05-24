<!DOCTYPE html>
<html lang="pt-br">
	<head>
		
		<title>Virtual Library</title>
		
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!--SEO Tags-->
		<meta name="description" content="Leia os melhores livros de autores independentes com uma forma de leitura inovadora">
		
		<meta Name="robots" content="index">
		<meta Name="robots" content="follow">
		
		<meta name="keywords" content="livros, autores independentes, contos">
		
		<meta name="author" content="Renan Winter Spatin">
		<meta name="author" content="Nikollas Gabriel Assumpção">
		<meta name="author" content="Pedro Henrique Ventura Rodrigues">
		<meta name="author" content="Elson Lima Junior">
		<!--end SEO tags-->

		<!--Materialize-->
			
			<!--Import materialize.css-->
	      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
			
			<!--fonts googles-->
			<link type="text/css" rel="stylesheet" href="css/google-fonts.css"/>
				 
	 	
	 	<!--end materialize-->

	 	<!--folha de estilo extra-->
	 	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	 	<!--end folha de estilo-->

	</head>

	<body>
		
		<!-- Sidebar -->
		<div id="wrapper">
	        <div id="sidebar-wrapper" class="blue-grey darken-4">
	            <ul class="sidebar-nav">
	                <li>
	                	<div id="info-user-menu">
	                		<img src="img/people.png" alt="" class="circle center" id="perfil-sidebar">
	                		<h6 class="white-text center" id="user-namer-sidebar">User</h6>
	                	</div>
	                </li>
	                <li class="collection-item search-component">
	                	<form action="#">
	                		<div class="input-field row search-field">
	                			<input type="text" name="search">
								<label for="search">Buscar</label>
	                			<button type="submit" class="btn blue-grey darken-3" style="width: 100%">
	                				<i class="material-icons">search</i>
	                			</button>
	                		</div>
	                	</form>
	                </li>

	                <li class="indent">
	                	<a href="#biblioteca" class="master-menu">
	                		Livros
	                		<i class="material-icons right">books</i>
	                	</a>
	                	<ul class="child-menu blue-grey darken-3">
	                		<li>
	                			<a href="livros/AJR/ajr.html" onClick='javascript:location.href="livros/AJR/ajr.html"' class="master-menu">
	                				<span>As Joias de Rajy</span>
	                				<i class="material-icons right">local_library</i>
	                			</a>	
	                		</li>
	                		<li>
	                			<a href="livros/AJF/ajf.html" onClick='javascript:location.href="livros/AJF/ajf.html"' class="master-menu">
	                				<span>No Rosto do Novo Mestre</span>
	                				<i class="material-icons right">local_library</i>
	                			</a>	
	                		</li>
	                		<li>
	                			<a href="livros/WT/wt.html" onClick='javascript:location.href="livros/WT/wt.html"' class="master-menu">
	                				<span>WT</span>
	                				<i class="material-icons right">local_library</i>
	                			</a>	
	                		</li>
	                	</ul>
	                </li>

	                <li class="indent">
	                	<a href="sobre.html" onClick='javascript:location.href="sobre.html"' class="master-menu">
	                		Sobre
	                		<i class="material-icons right"></i>
	                	</a>
	                </li>
	                <li class="indent">
	                	<a href="javascript:void(0)" class="master-menu">
	                		More
	                		<i class="material-icons right">add</i>
	                	</a>
	                	<ul class="child-menu blue-grey darken-3">
	                		<li>
	                			<a href="javascript:void(0)" onClick='javascript:location.href="http://prtraumer.blogspot.com.br/p/contato.html"' class="master-menu">
	                				<span>Blog do Autor - PR Traumer</span>
	                				<i class="material-icons right">perm_identity</i>
	                			</a>	
	                		</li>
	                	</ul>
	                </li>
	            </ul>
			</div>
		</div>
		<!--header -->
		<header class="navbar-fixed">
			<!-- a cor do menu é no nav-->
			<nav class="blue-grey">
				<div class="nav-wrapper">
					<ul>
						<li>
							<a href="javascript:void(0)" id="btn-sidebar">
								<i class="material-icons">dehaze</i>
							</a>
						</li>
						<li>
							<a href="index.php" id="header-logo">
								Virtual Library
							</a>
						</li>
					</ul>
					<ul class="right hide-on-med-and-down">
						<li>
							<a href="#modal-footer" id="btn-modal-footer">
								<i class="material-icons left">mail</i>
								<span class="new badge amber">4</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="btn-dropdown-perfil" data-activates="dropdown-perfil">
								<img src="img/people.png" alt="" class="circle left mini-perfil">
								<span>User</span>
								<i class="material-icons right">arrow_drop_down</i>
							</a>
							<!-- Dropdown do perfil -->
							<ul id='dropdown-perfil' class="dropdown-content blue-grey ">
								<li><a href='javascript:alert("Essa Função não esta pronta")'>Perfil</a></li>
								<li><a href='javascript:alert("Essa Função não esta pronta")'>Configurações</a></li>
								<li><a href='javascript:alert("Essa Função não esta pronta")'>Logout</a></li>
							</ul>
							
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!--end header menu-->

		<!--main-->
		<main>
		    <!--img parallax banner inicial-->
		    <div class="parallax-container">
		    	<div class="container">
		    		<h4 class="white-text center parallax-title">Estante</h4>
		    	</div>
		      <div class="parallax"><img src="img/parallax.jpg"></div>
		    </div>
		    <!--end parallax-->

		    <!--conteudo-->
		    <div class="row grey lighten-1">
			    <div class="container">
			    	<br/>
			    	<h5>Biblioteca</h5>
			    	<div class="center" id="selecao">
			    		<a href="all.php" class="waves-effect waves-light btn-large blue-grey"><i class="material-icons right">list</i>All</a>
						<a href="atr.php" class="waves-effect waves-light btn-large blue-grey"><i class="material-icons right">book</i>As Joias de Rajy</a>
						<a href="atf.php" class="waves-effect waves-light btn-large blue-grey"><i class="material-icons right">book</i>A Janela da Frente</a>
						<a href="wt.php" class="waves-effect waves-light btn-large blue-grey"><i class="material-icons right">book</i>Gotas da Guerra</a>
			    	</div>

			    	<div id="conteudo">
			    		<div class="preloader-wrapper active" id="carregando">
						    <div class="spinner-layer spinner-red-only">
						      <div class="circle-clipper left">
						        <div class="circle"></div>
						      </div><div class="gap-patch">
						        <div class="circle"></div>
						      </div><div class="circle-clipper right">
						        <div class="circle"></div>
						      </div>
						    </div>
					  	</div>

					  	<?php
					  		include("arquivos/all.php");
					  	?>
			    	</div>
			    	
		    </div>
		    <!--end conteudo-->
	    </main>
		<!--end main-->
		
		<footer class="page-footer grey lighten-4">
		<!-- Modal Footer -->
		<div id="modal-footer" class="modal bottom-sheet">
		    <div class="modal-content">
		      <h4>Modal Header</h4>
		      <p>A bunch of text</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		    </div>
		</div>
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5>Inscreva-se para receber novidades</h5>
						<form action="#" method="post" name="form1">
							<div class="row no-space-row">
								<div class="input-field col l6 s10">
									<input type="text" name="nome" onkeyup="showHint(this.value)">
									<label for="name">Digite seu nome</label>
									<p style="color: gray;">Sugestão: <span id="txtHint"></span></p>
								</div>

							</div>
							<div class="row no-space-row">
								<div class="input-field col l6 s10">
									<input type="text" name="email">
									<label for="email">Digite seu email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col 12">
									<button type="submit" class="btn blue-grey darken-2 waves-effect waves-light" name="action">Enviar
									<i class="material-icons right">send</i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col l6 s12">
						<h5>Siga-nos nas redes sociais</h5>
						<div class="row">
							<div class="col 12">
								<ul class="redes-sociais">
									<li>
										<a href="javascript:void(0)">
											<img src="img/social/youtube.png" alt="" class="responsive-img">
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<img src="img/social/facebook.png" alt="" class="responsive-img">
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<img src="img/social/pinterest.png" alt="" class="responsive-img">
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<img src="img/social/twitter.png" alt="" class="responsive-img">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright blue-grey darken-4">
	            <div class="container">
		            <h6 class="center" style="margin-top: 16px">
		            	© Virtual Library - Todos os direitos reservados
		            </h6>
	            </div>
          </div>
		</footer>

		

		<!--Import jQuery before materialize.js-->
    	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    	<script type="text/javascript" src="js/materialize.min.js"></script>
    	<!--js extra-->
	 	<script type="text/javascript" src="js/app.js"></script>
	 	<script type="text/javascript" src="js/ajax.js"></script>
	 	<!--end js-->
	 	<!--Valida Formulario-->
	 	<script type="text/javascript" src="js/validacaoFormulario.js"></script>
	 	<!--end Valida Formulario-->
	</body>
</html>