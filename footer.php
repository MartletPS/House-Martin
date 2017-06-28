			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

                    <div class="footer-content">
                           <div class="footer-navigation">
                               <h3>Navigation</h3>

                               <ul>
                                   <li><a href="http://www.martlet.ca/volunteer/">Volunteer</a></li>
                                   <li><a href="http://www.martlet.ca/aboutus/">About</a></li>
                                   <li><a href="http://www.martlet.ca/find-a-location/">Locations</a></li>
                                   <li><a href="http://www.martlet.ca/ads/">Advertising</a></li>
                                   <li><a href="http://www.martlet.ca/contests/">Contests</a></li>
                                   <li><a href="http://www.martlet.ca/jobs/">Jobs</a></li>
                                   <li><a href="http://www.martlet.ca/about/staff/">Staff</a></li>
                                   <br/>
                                   <li><a href="http://www.martlet.ca/wp-login.php">Login</a></li>
                               </ul>
                           </div>
                           <div class="addresses">
                               <h3>Addresses</h3>
                               <div class="mailing-address">
                                <strong>Mailing</strong> <br />
                                   The Martlet <br/>
                                   PO BOX 3035<br />
                                   University of Victoria<br />
                                   Victoria, B.C. <br />
                                   V8W 3P3
                               </div>
                               <div class="courier-address">
                                    <strong>Courier</strong><br />
                                   The Martlet <br/>
                                   Student Union Building <br/>
                                   Room B011 <br />
                                   University of Victoria <br />
                                   3700 Finnerty Road <br />
                                   Victoria, B.C. <br />
                                   V8W 5C2
                               </div>
                           </div>
                          <div class="phone-contact">
                                <h3>Phone</h3>
                              <p>
                              <strong>Newsroom</strong><br />
                              1.250.721.8361
                              </p>
                              <p>
                              <strong>Ads | Business </strong><br />
                              1.250.721.8359 <br />
                              ads@martlet.ca
                              </p>
                          </div>
                          <div class="staff-contact">
                                <h3>Staff Contact</h3>
                              <p>
                                  <strong>Editors-in-Chief</strong><br />
                                  Cormac O'Brien & Sarah Lazin <br />
                                  edit@martlet.ca
                              </p>	
                              <p>
                                  <strong>Business Manager</strong><br />
                                  Alex Coates <br />
                                  business@martlet.ca
                              </p>
                              <p>
                                  <strong>Design Director</strong><br />
                                  Logan Popoff <br />
                                  design@martlet.ca
                              </p>

                          </div>
                    </div>
                    <div class="policy">
                        The Martlet Publishing Society is an incorporated B.C. Society and operates based on our Statement of Principles. We strive to act as an agent of constructive social change and will not publish racist, sexist, homophobic or otherwise oppressive copy.<br />
                        &copy; Copyright Martlet Publishing Society
                    </div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
