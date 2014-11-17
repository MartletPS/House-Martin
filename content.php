
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
        <header class="article-header">
            <h1 class="h2 entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
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
