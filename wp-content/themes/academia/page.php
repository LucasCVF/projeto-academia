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
								<p class="card-text">Ritmos envolventes e movimentos energéticos para você se divertir, queimar calorias e melhorar a coordenação. Movimente-se com alegria!</p>
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
			<section class="card-content-plan">
				<div class="card card-edit-plan">
					<div class="card-body row">
						<div class="col-5">	
							<h1 class="mb-3">Diario</h1>
							<p class="card-text">Ideal para quem quer treinar sem compromisso! Acesse todas as nossas instalações e aproveite um dia de treino completo.</p>
							<h1 class="mb-3">Mensal</h1>
							<p class="card-text">Treine sem limites durante 30 dias! Tenha acesso a todas as modalidades e equipamentos, além de acompanhamento personalizado.</p>
						</div>
						<div class="col-2">
							<i class="fa-solid fa-money-check-dollar fa-10x m-5"></i>
						</div>
						<div class="col-5">
							<h1 class="mb-3">Semestral</h1>
							<p class="card-text">Seis meses para transformar sua rotina! Acesso ilimitado a todas as modalidades, suporte especializado e condições especiais para você manter o foco nos seus objetivos.</p>
							<h1 class="mb-3">Anual</h1>
							<p class="card-text">Compromisso com seus resultados! Treine o ano inteiro com benefícios exclusivos, descontos especiais e suporte contínuo dos nossos profissionais.</p>
						</div>
						</div>
					</div>
				</div>
			</section>
		</article>

		<article id="unidade">
			<hr style="height: 50px;" class="edit-hr">
			<h1 class="text-center mt-5 mb-5 h1">Conheça Nossas Unidades!</h1>
			<section class="card-content">
				<div class="map-container mt-4 text-center row">
					<div class="col-4">
						<div class="card align-items-center">
							<iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31757.97193165947!2d-35.244411894599615!3d-5.749588730885146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3aa41b5590f17%3A0xf09aba16ea76a173!2sClubFit!5e0!3m2!1spt-BR!2sbr!4v1742258211447!5m2!1spt-BR!2sbr" 
								width="500" 
								height="400" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							</iframe>
							<div class="card-body">
								<h3>Unidade Zona norte</h3>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Venha conhecer!</a>
							</div>
						</div>	
					</div>
					<div class="col-4">
						<div class="card align-items-center">
							<iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44911.17588357399!2d-35.24524757199212!3d-5.767031060089852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3070500484c03%3A0xa2796f1cc2b95bc6!2sClubfit%20Redinha!5e0!3m2!1spt-BR!2sbr!4v1742258533521!5m2!1spt-BR!2sbr" 
								width="500" 
								height="400" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							</iframe>
							<div class="card-body">
							<h3>Unidade Redinha</h3>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Venha conhecer!</a>
							</div>
						</div>	
					</div>
					<div class="col-4">
						<div class="card align-items-center">
							<iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63502.40057322635!2d-35.235962618127836!3d-5.869674699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff000f48aebf%3A0x13c7d385651f6af2!2sClubFiT%20Academia%20Ponta%20Negra!5e0!3m2!1spt-BR!2sbr!4v1742258582249!5m2!1spt-BR!2sbr" 
								width="500" 
								height="400" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							</iframe>
							<div class="card-body">
								<h3>Unidade Ponta Negra</h3>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Venha conhecer!</a>
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
