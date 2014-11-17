<?php get_header(); ?>

			<div id="content">

                <div id="inner-content" class="wrap cf">

                    <div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

                        <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'index' ); ?>
                        
                        <div id="postsContent">
                        <?php
                        while (have_posts()) : the_post();
                            get_template_part( 'content', get_post_format() );
                        endwhile;
                        ?>
                        </div>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
