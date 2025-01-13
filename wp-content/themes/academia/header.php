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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
		<nav class="content row navbar navbar-expand-lg">
			<div class="col-4">
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-clubfit.png" alt="Logo do Site" class="logo-nav">
				</a>
			</div>
			<div class="col-8">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#sobre">Sobre nós</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#matricula">Matricule-se</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#modalidade">Modalidades</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contato">Contato</a>
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
					</div>
				</div>
			</div>
		</nav>
	</header>
