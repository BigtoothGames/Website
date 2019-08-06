<?php get_header(); ?>
		<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php 
				while(have_posts())
				{
					the_post(); ?>
					<h1>This be a page - not a post</h1>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				
				<?php }
				
				
			?>
		</div>
		</main>
<?php get_footer(); ?>
