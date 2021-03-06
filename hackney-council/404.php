<?php get_header(); ?>
<?php get_template_part('component-phase-banner'); ?>
<?php get_template_part('component-announcement'); ?>
<?php get_template_part('component-breadcrumb'); ?>
<main class="lbh-main-wrapper" role="main">
	<!-- This is a horrible hack to make the anchor link to the right place (because of the fixed header) 
	but it's what the TinyMCE plugin is doing for anchors across the rest of the site anyway -->
	<a id="main-content"></a>
	<div class="lbh-container">
		<article id="post-404">
			<h1 class="lbh-heading-h1"><?php _e( 'Page not found', 'html5blank' ); ?></h1>
			<p class="lbh-body-l"><a href="<?php echo home_url(); ?>" class="lbh-link"><?php _e( 'Return home?', 'html5blank' ); ?></a></p>
		</article>
	</div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
