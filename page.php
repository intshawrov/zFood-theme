<?php get_header(); ?>
	


<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>

                        <?php while( have_posts() ) : the_post(); ?>
                        <?php if( !is_front_page() ) : ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endif; ?>
                        <?php endwhile; ?>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">


				<?php while( have_posts() ) : the_post(); ?>

				<article>
					
					<div class="art-content">
						<?php the_content(); ?>
					</div>
					
				</article>

				<?php endwhile; ?>

				
			</div>
		</div>
		
		<?php get_sidebar(); ?>
	</div>
</section>

<!--////////////////////////////////////Footer-->

<?php get_footer(); ?>