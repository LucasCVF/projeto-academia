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
					<div class="col-12 col-md-4">
						<div class="card card-edit">
							<div class="card-body text-center">
							<h1 class="mb-3">Dança</h1>
								<h5>Liberte-se na dança!</h5>
								<i class="fa-solid fa-music fa-8x mt-4 mb-4"></i>
								<p class="card-text">Ritmos envolventes e movimentos energéticos para você se divertir, queimar calorias e melhorar a coordenação. Movimente-se com alegria!</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="card card-edit">
							<div class="card-body text-center">
								<h1 class="mb-3">Musculação</h1>
								<h5>Força e definição!</h5>
								<i class="fa-solid fa-weight-hanging fa-8x mt-4 mb-4"></i>
								<p class="card-text">Treinos personalizados para ganho de força, resistência e definição muscular. Supere seus limites e conquiste seus objetivos!</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4">
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
		</article>

		<article id="planos" class="background-article">
			<hr style="height: 50px;" class="edit-hr">
			<h1 class="text-center m-5 color-h1">Fique por dentro dos nossos planos!</h1>
			<section class="card-content-plan">
				<div class="card card-edit-plan">
					<div class="card-body row">
						<div class="col-5">	
							<h1>Diario</h1>
							<div class="mb-3" style="background: yellow; height:5px;"> </div>
							<p class="card-text">Ideal para quem quer treinar sem compromisso! Acesse todas as nossas instalações e aproveite um dia de treino completo.</p>
							<h1>Mensal</h1>
							<div class="mb-3" style="background: yellow; height:5px;"> </div>
							<p class="card-text">Treine sem limites durante 30 dias! Tenha acesso a todas as modalidades e equipamentos, além de acompanhamento personalizado.</p>
						</div>
						<div class="col-2">
							<i class="fa-solid fa-money-check-dollar fa-10x m-5"></i>
						</div>
						<div class="col-5">
							<h1>Semestral</h1>
							<div class="mb-3" style="background: yellow; height:5px;"> </div>
							<p class="card-text">Seis meses para transformar sua rotina! Acesso ilimitado a todas as modalidades, suporte especializado e condições especiais para você manter o foco nos seus objetivos.</p>
							<h1>Anual</h1>
							<div class="mb-3" style="background: yellow; height:5px;"> </div>
							<p class="card-text">Compromisso com seus resultados! Treine o ano inteiro com benefícios exclusivos, descontos especiais e suporte contínuo dos nossos profissionais.</p>
						</div>
						</div>
					</div>
				</div>
			</section>
		</article>

		<article id="unidade" class="background-article">
			<hr style="height: 50px;" class="edit-hr">
			<h1 class="text-center m-5 color-h1">Conheça Nossas Unidades!</h1>
			<section class="card-content">
				<div class="map-container mt-4 text-center row">
					<div class="col-12 col-lg-4">
						<div class="card align-items-center card-uni">
							<iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31757.97193165947!2d-35.244411894599615!3d-5.749588730885146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3aa41b5590f17%3A0xf09aba16ea76a173!2sClubFit!5e0!3m2!1spt-BR!2sbr!4v1742258211447!5m2!1spt-BR!2sbr" 
								width="575" 
								height="400" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							</iframe>
							<div class="card-body">
								<h3>Unidade Zona norte</h3>
								<a href="#" class="btn btn-uni">Venha conhecer!</a>
							</div>
						</div>	
					</div>
					<div class="col-12 col-lg-4">
						<div class="card align-items-center card-uni">
							<iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44911.17588357399!2d-35.24524757199212!3d-5.767031060089852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3070500484c03%3A0xa2796f1cc2b95bc6!2sClubfit%20Redinha!5e0!3m2!1spt-BR!2sbr!4v1742258533521!5m2!1spt-BR!2sbr" 
								width="575" 
								height="400" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							</iframe>
							<div class="card-body">
								<h3>Unidade Redinha</h3>
								<a href="#" class="btn btn-uni">Venha conhecer!</a>
							</div>
						</div>	
					</div>
					<div class="col-12 col-lg-4 mb-5">
						<div class="card align-items-center card-uni">
							<iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63502.40057322635!2d-35.235962618127836!3d-5.869674699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff000f48aebf%3A0x13c7d385651f6af2!2sClubFiT%20Academia%20Ponta%20Negra!5e0!3m2!1spt-BR!2sbr!4v1742258582249!5m2!1spt-BR!2sbr" 
								width="575" 
								height="400" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							</iframe>
							<div class="card-body">
								<h3>Unidade Ponta Negra</h3>
								<a href="#" class="btn btn-uni">Venha conhecer!</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</article>

		<article id="sobre" class="background-article">
			<hr style="height: 50px;" class="edit-hr">
			<h1 class="text-center m-5 color-h1">Sobre nós</h1>
			<section class="card-content-plan">
				<div class="card card-edit-plan">
					<div class="card-body row m-1">
						<div class="col-12 col-md-6 col-xxl-3">
							<div class="card-sobre-nos w-100 h-100 m-2">
								<div class="card__content">
									<p class="card__title">Quem Somos</p>
									<p class="card-text">Na ClubFit, acreditamos que a atividade física vai muito além da estética: é um estilo de vida! Nossa missão é proporcionar um ambiente acolhedor, com estrutura de ponta e profissionais capacitados para ajudar você a atingir seus objetivos.</p>
									<p class="card-text">Desde nossa fundação, buscamos transformar vidas através da saúde e bem-estar, oferecendo treinos personalizados, equipamentos modernos e uma comunidade motivadora.</p>
						
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3">
							<div class="card-sobre-nos w-100 h-100 m-2">
								<div class="card__content">
									<p class="card__title">Nossa Estrutura</p>
									<p class="card-text">
										<ul class="p-2">
											<li>Unidades modernas e bem equipadas</li>
											<li>Equipamentos de última geração</li>
											<li>Instrutores qualificados para acompanhamento personalizado</li>
											<li>Diversas modalidades, incluindo musculação, funcional, dança e muito mais</li>
											<li>Ambiente seguro e higienizado para o seu conforto</li>
										</ul>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3">
							<div class="card-sobre-nos w-100 h-100 m-2">
								<div class="card__content">
									<p class="card__title">Nossa Missão</p>	
									<p class="card-text">Inspirar e transformar vidas por meio da atividade física, promovendo saúde, bem-estar e qualidade de vida para todas as idades.</p>
									<p class="card__title">Nossa Visão</p>
									<p class="card-text">Ser referência em treinamento físico e qualidade de atendimento, proporcionando experiências únicas para cada aluno.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3">
							<div class="card-sobre-nos w-100 h-100 m-2">
								<div class="card__content">
									<p class="card__title">Nossos valores</p>	
									<p class="card-text">
										<ul class="p-2">
											<li>Compromisso com a saúde e o bem-estar</li>
											<li>Atendimento humanizado e acolhedor</li>
											<li>Inovação e excelência em nossos serviços</li>
											<li>Comprometimento com o Resultado</li>
											<li>Comunidade e Parceria</li>
											<li>Respeito e Inclusão</li>
											<li>Incentivamo a criação de vínculos para juntos irmos mais longe</li>
											
										</ul>
									</p>
								</div>
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
