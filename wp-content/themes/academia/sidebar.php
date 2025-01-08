<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package academia
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<h1 class="mt-5">Depois do home</h1> <!--sdsa-->

		<!--Aqui fica 'Recent post', 'Recent comments , 'Archives' e 'Categories'-->
	<?php dynamic_sidebar( 'sidebar-1' ); ?> 

	<h1 class="mt-5">Depois do home</h1>
	
</aside><!-- #secondary -->
