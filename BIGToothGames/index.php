<?php get_header(); ?>
	<main>
		<div class="vid-banner-container">
			<div class="bigtooth-banner abs-center">
				<?php
					$name=get_bloginfo('name'); 
					$pieces=explode(" ", $name);
				?>
				<div class="bigtooth-banner__main">
					<h2 class="abs-centerX_bot"><?php echo $pieces[0];?></h2>
				</div>
				<div class="bigtooth-banner__div"></div>
				<div class="bigtooth-banner__sub">
					<h3 class="abs-centerX_top"><?php echo $pieces[1];?></h3>
				</div>
				
					
				
			</div>
			<div class="vid-gradient"></div>
			<video autoplay muted loop>
				<source src="/wp-content/uploads/2019/07/bg-Vid.mp4" type="video/mp4">
			</video>
		</div>
		<div class="site-section gradient">
			<div class="abs-center">
				our games
			</div>
		</div>
		<div class="post-container drk-bg">
			<div class="post__main">
				<?php 
					while(have_posts())
					{
						the_post(); ?>
							<div class="post-container__sub">
								
											<?php 
												the_content();
												the_title();
											?>
											</h2>
										</div>
									</div>
								</a>
							</div><!-- .post-container__sub -->	
							
							
					<?php }	
				?>
			</div><!-- .post__main -->
		</div><!-- .post-container -->
		<div class="site-section gradient">
			<div class="abs-center">
				next section
			</div>
		</div>
	</main>
	
<?php get_footer(); ?>