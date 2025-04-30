<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package academia
 */
get_header();

?>

	<main id="primary" class="site-main">
	<?php
		$args = array(
			'post_type' => 'post', // ou outro tipo de post se não for o padrão
			'posts_per_page' => 10, // 10 exibe posts
		);

		$loop = new WP_Query( $args );

		if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
				<article class="post-item">
					<div class="card mb-4">
						<div class="card-body">
							<h2 class="card-title"><?php the_title(); ?></h2>
							<p class="card-text">Publicado em <?php echo get_the_date(); ?> às <?php echo get_the_time(); ?></p>
							<p class="card-text"><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia mais</a>
						</div>
					</div>

				</article>
				<hr>

			<?php endwhile;
			wp_reset_postdata();
		else :
			echo '<p>Nenhum post encontrado.</p>';
		endif;
	?>
</main>


<?php
get_sidebar();
get_footer();
