<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<article class="content-home" style= "background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-content.jpg');background-size: cover; background-repeat: no-repeat;">
			<section>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="d-block carousel-edit">
								<h1>Transforme sua vida hoje!</h1>
								<p>Aqui, você encontra tudo o que precisa para alcançar seus objetivos. Equipamentos modernos, aulas dinâmicas e suporte profissional para todas as etapas do seu treino.</p>
							</div>	
						</div>

						<div class="carousel-item">
							<div class="d-block carousel-edit">
								<h1>Junte-se à nossa comunidade fitness</h1>
								<p>Mais do que uma academia, somos uma família. Ambiente motivador, professores capacitados e atividades personalizadas para você se sentir em casa</p>
							</div>
						</div>
		
						<div class="carousel-item">
							<div class="d-block carousel-edit">
								<h1>Resultados que você merece</h1>
								<p>Com dedicação e o acompanhamento certo, seus resultados estão garantidos. Venha conhecer nossos planos e dar o primeiro passo para uma vida saudável.</p>
							</div>
						</div>

						</div>
					</div>
				</div>
			</section>
			
			<section class="mt-5 card-content">
				<div class="row">
					<div class="col-4">
						<div class="card card-edit">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card card-edit">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card card-edit">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
				</div>
				
			</section>


				

				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
				<h1>home</h1>
			
		</article>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
