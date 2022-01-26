<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php bloginfo() ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo SITEPATH; ?>assets/img/favicon.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/css/fenf.css" rel="stylesheet">

	<!-- Google Translate -->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
					pageLanguage: 'pt'
				},
				'google_translate_element');
		}
	</script>

	<?php wp_head(); ?>

</head>

<body>

	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-flex align-items-center fixed-top">
		<div class="container d-flex align-items-center justify-content-center justify-content-md-between">
			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li class="dropdown"><a href="#"><span>Acesso Rápido</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="#">Drop Down 1</a></li>
							<li><a href="#">Drop Down 2</a></li>
							<li><a href="#">Drop Down 3</a></li>
							<li><a href="#">Drop Down 4</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Ingresso</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="#">Drop Down 1</a></li>
							<li><a href="#">Drop Down 2</a></li>
							<li><a href="#">Drop Down 3</a></li>
							<li><a href="#">Drop Down 4</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Informações</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="#">Drop Down 1</a></li>
							<li><a href="#">Drop Down 2</a></li>
							<li><a href="#">Drop Down 3</a></li>
							<li><a href="#">Drop Down 4</a></li>
						</ul>
					</li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

			<div id="google_translate_element" class="google-translate"></div>
			
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<a href="/" class="logo me-auto"><img src="<?php echo SITEPATH; ?>assets/img/logo.png" alt="">
				<br><strong>Faculdade de Enfermagem</strong></a>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a class="nav-link scrollto " href="#hero">Início</a></li>
					<li class="dropdown"><a class="nav-link scrollto" href="#about"><span>A Faculdade</span> <i class="bi bi-chevron-down"></i></a>
						<ul>							
							<li class="dropdown"><a href="#"><span>Institucional</span> <i class="bi bi-chevron-right"></i></a>
								<ul>									
									<li><a href="#">Administração</a></li>
									<li><a href="#">Calendário FEnf </a></li>
									<li><a href="#">Diretoria </a></li>
									<li><a href="#">Equipe De Apoio Ao Ensino, Pesquisa E Extensão </a></li>
									<li><a href="#">Equipe Docente E Áreas De Ensino </a></li>
									<li><a href="#">Estrutura </a></li>
									<li><a href="#">Gestão De Pessoas</a></li>
									<li><a href="#">Historia </a></li>
									<li><a href="#">Tecnologia Da Informação (T.I)</a></li>
								</ul>
							</li>
							<li><a href="#">Congregação</a></li>
							<li><a href="#">Comissão De Especialistas </a></li>
							<li><a href="#">CONSI</a></li>
							<li><a href="#">CIPA Setorial </a></li>
							<li><a href="#">Sustentabilidade</a></li>
							<li><a href="#">Comitê De Crise Da FEnf </a></li>
							<li><a href="#">Comunicação </a></li>
							<li><a href="#">Comissão De Pesquisa E Extensão - COPEX </a></li>
							<li><a href="#">Intranet</a></li>
							<li><a href="#">Webmail</a></li>
						</ul>
					</li>					
					<li class="dropdown"><a class="nav-link scrollto" href="#departments"><span>Áreas</span> <i class="bi bi-chevron-down"></i></a>
						<ul>							
							<li class="dropdown"><a href="#"><span>Graduação</span> <i class="bi bi-chevron-right"></i></a>
								<ul>									
									<li><a href="#">Coordenadoria</a></li>
									<li><a href="#">Programas das Disciplinas</a></li>
									<li><a href="#">Disciplinas Regulares - Ementas</a></li>
									<li><a href="#">Grade Horária</a></li>
									<li><a href="#">Calendário dos Cursos de Graduação</a></li>
									<li><a href="#">Programa de Apoio Didático - PAD</a></li>
									<li><a href="#">Programa Ciência sem Fronteiras</a></li>
									<li><a href="#">Disciplinas EN465 - Serious Gamne</a></li>
								</ul>
							</li>
							<li><a href="#">Pós Graduação</a></li>
							<li class="dropdown"><a href="#"><span>Pesquisa</span> <i class="bi bi-chevron-right"></i></a>
								<ul>									
									<li><a href="#">Apoio Técnico</a></li>
									<li><a href="#">Cadastro de Pesquisadores</a></li>
									<li><a href="#">Formulário de Encaminhamento</a></li>
									<li><a href="#">Grupos de Pesquisa</a></li>
									<li><a href="#">Serviços de Estatística</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#"><span>Extensão</span> <i class="bi bi-chevron-right"></i></a>
								<ul>									
									<li><a href="#">Projetos de Extensão</a></li>
									<li><a href="#">Cursos Oferecidos</a></li>
									<li><a href="#">Graduação</a></li>
									<li><a href="#">Ligas Acadêmicas</a></li>
									<li><a href="#">Pós Graduação</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a class="nav-link scrollto" href="#news">Notícias</a></li>
					<li><a class="nav-link scrollto" href="#concourse">Concursos</a></li>										
					<li><a class="nav-link scrollto" href="#contact">Contato</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->