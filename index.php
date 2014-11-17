<?php get_header(); ?>

			<div id="content">

                <div id="inner-content" class="wrap cf">

                    <div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

                        <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'index' ); ?>
                        
                        <div id="postsContent">
                        <?php
                        while (have_posts()) : the_post();

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
        <header class="article-header">
            <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <p class="byline vcard">
                <?php
                    if ( function_exists( 'coauthors_posts_links' ) ) {
                          printf( __( '<span class="author">%3$s</span> <time class="updated" datetime="%1$s">%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')),  coauthors_posts_links(null,null, 'By ', null, false) );
                    } else {
                          printf( __( '<span class="author">%3$s</span> <time class="updated" datetime="%1$s">%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), the_author_posts_link() );
                    } // else
                ?>
              </p>
        </header>
        <section class="entry-content cf">
            <div class="fadeout">
                <?php the_excerpt(); ?>
            </div>
        </section>
    </article>
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
