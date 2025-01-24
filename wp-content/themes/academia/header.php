<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package academia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>	
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
		<nav class="content navbar navbar-expand-lg">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-clubfit.png" alt="Logo do Site" class="logo-nav">
				</a>
				<div class="container-fluid text-center">
					<button class="navbar-toggler position-toggle-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon "></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#matricula">Modalidades</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#modalidade">Planos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contato">Contato</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contato">Sobre nós</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#unidade" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Unidades	
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Unidade 1</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Unidade 2</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Unidade 3</a></li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#news">Avisos e comunicados</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#visita">Clubfit news</a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" id="edit-item" aria-current="page" href="#visita">Agendar visita</a>
							</li>
						</ul>
							
					</div>
				</div>
			</div>
		</nav>
	</header>
