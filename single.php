<?php get_header(); ?>
	


<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">


				<?php while( have_posts() ) : the_post(); ?>

				<article>
					<div class="art-header">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?> </h3></a>
						<div class="info">
						Posted on <?php the_time('F j, Y'); ?>:
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
					<div class="art-content">
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
					
				</article>

				<?php endwhile; ?>

                        <hr>
                        <?php comments_popup_links( 'no comments' , '1 commente' , '% commments'); ?>
                        <hr>

				
			</div>
		</div>
		
		<?php get_sidebar(); ?>
	</div>
</section>

<!--////////////////////////////////////Footer-->

<?php get_footer(); ?>