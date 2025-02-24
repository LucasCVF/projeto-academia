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
		<article id="modalidade" class="content-home" style= "background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-content.jpg');background-size: cover; background-repeat: no-repeat;">
			<section>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="d-block carousel-edit">
								<div class="row">
									<div class="col-10">
										<h1>Transforme sua vida hoje!</h1>
										<h5>Aqui, você encontra tudo o que precisa para alcançar seus objetivos. Equipamentos modernos, aulas dinâmicas e suporte profissional para todas as etapas do seu treino.</h5>
									</div>
									<div class="col-2">
										<i style="width: 500px;" class="fa-solid fa-heart-pulse fa-beat-fade fa-9x"></i>
									</div>	
								</div>
							</div>	
						</div>

						<div class="carousel-item">
							<div class="d-block carousel-edit">
								<div class="row">
									<div class="col-10">
										<h1>Junte-se à nossa comunidade fitness</h1>
										<h5>Mais do que uma academia, somos uma família. Ambiente motivador, professores capacitados e atividades personalizadas para você se sentir em casa</h5>
									</div>
									<div class="col-2">
										<i style="width: 500px;" class="fa-solid fa-users fa-beat-fade fa-9x"></i>
									</div>	
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="d-block carousel-edit">
								<div class="row">
									<div class="col-10">
									<h1>Resultados que você merece</h1>
									<h5>Com dedicação e o acompanhamento certo, seus resultados estão garantidos. Venha conhecer nossos planos e dar o primeiro passo para uma vida saudável.</h5>
									</div>
									<div class="col-2">
										<i style="width: 500px;" class="fa-solid fa-dumbbell fa-beat-fade fa-9x"></i>
									</div>	
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
							<div class="card-body text-center">
							<h1 class="mb-3">Dança</h1>
								<h5>Liberte-se na dança!</h5>
								<i class="fa-solid fa-music fa-8x mt-4 mb-4"></i>
								<p class="card-text">Ritmos envolventes e movimentos energéticos para você se divertir, queimar calorias e melhorar a coordenação. Entre no ritmo e movimente-se com alegria!</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card card-edit">
							<div class="card-body text-center">
								<h1 class="mb-3">Musculação</h1>
								<h5>Força e definição!</h5>
								<i class="fa-solid fa-weight-hanging fa-8x mt-4 mb-4"></i>
								<p class="card-text">Treinos personalizados para ganho de força, resistência e definição muscular. Supere seus limites e conquiste seus objetivos!</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card card-edit">
							<div class="card-body text-center">
								<h1 class="mb-3">Funcional</h1>
								<h5>Agilidade e performance!</h5>
								<i class="fa-solid fa-person-running fa-8x mt-4 mb-4"></i>
								<p class="card-text">Exercícios dinâmicos para melhorar equilíbrio, força e condicionamento. Movimentos naturais que preparam seu corpo para qualquer desafio!</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<hr style="height: 50px;" class="edit-hr">
		</article>

		<article id="planos">
		<hr style="height: 50px;" class="edit-hr">
			<h1 class="text-center mt-5 mb-5 h1">Fique por dentro dos nossos planos!</h1>
			<section class="card-content">
				<div class="row">
					<div class="col-4">
						<div class="card card-edit">
							<div class="card-body text-center">
							<h1 class="mb-3">Diario</h1>
								<i class="fa-solid fa-music fa-8x mt-4 mb-4"></i>
								<p class="card-text">Ritmos envolventes e movimentos energéticos para você se divertir, queimar calorias e melhorar a coordenação. Entre no ritmo e movimente-se com alegria!</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card card-edit">
							<div class="card-body text-center">
								<h1 class="mb-3">Mensal</h1>
								<h5>Força e definição!</h5>
								<i class="fa-solid fa-weight-hanging fa-8x mt-4 mb-4"></i>
								<p class="card-text">Treinos personalizados para ganho de força, resistência e definição muscular. Supere seus limites e conquiste seus objetivos!</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card card-edit">
							<div class="card-body text-center">
								<h1 class="mb-3">Anual</h1>
								<h5>Agilidade e performance!</h5>
								<i class="fa-solid fa-person-running fa-8x mt-4 mb-4"></i>
								<p class="card-text">Exercícios dinâmicos para melhorar equilíbrio, força e condicionamento. Movimentos naturais que preparam seu corpo para qualquer desafio!</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</article>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
