							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
							    <header class="article-header">
							        <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							            <p class="byline vcard">
                                                                        <?php
                                                                            if ( function_exists( 'coauthors_posts_links' ) ) {
                                                                                printf( __( '<span class="author">%3$s</span> <time class="updated" datetime="%1$s">%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')),  coauthors_posts_links(null,null, 'By ', null, false) );
                                                                            } else {
                                                                                printf( __( '<span class="author">%3$s</span> <time class="updated" datetime="%1$s">%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), the_author_posts_link() );
                                                                            }
                                                                        ?>
                                                                    </p>
							    </header>
							    <section class="entry-content cf">
                                                                <div class="frontpage_content">
                                                                    <?php the_excerpt(); ?>
                                                                </div>
							    </section>

                                                            <!--
                                                            <footer class="article-footer cf">
                                                                <p class="footer-comment-count">
							            <?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), _n( '<span>%</span> Comments', '<span>%</span> Comments', get_comments_number(), 'bonestheme' ) );?>
							        </p>
                                                                <?php printf( __( '<p class="footer-category">Filed under: %1$s</p>', 'bonestheme' ), get_the_category_list(', ') ); ?>
                                                                <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
							    </footer>
                                                            -->
                                                        </article>
