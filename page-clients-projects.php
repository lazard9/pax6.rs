<?php
/**
 * Clients & Projects page templete
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

get_header(); ?>

  <section id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="clients-projects-wrapper">

          <div class="great-partnerships">
            <h1 class="page-title">Great partnerships give valuable outcomes and unforgettable memories.</h1>
          </div>

          <div class="clients-ul">

            <?php            
            if( class_exists('acf') ) {

              $home_query = new WP_Query( 
                array( 
                  'post_type' => 'Clients',
                  'post_status' => 'publish',
                  'meta_key' => 'ordinal_number',
                  'orderby' => 'meta_value_num',
                  'order' => 'asc',
                  'posts_per_page' => -1,
                ) 
              );

              $i = 0;

              if ( $home_query->have_posts() ) : while( $home_query->have_posts() ) : $home_query->the_post(); $i++; ?>
                      
                <div class="client-li">
                  <div class="about-client">
                    <h2>
                      <?php $link = get_field('client_link'); ?>
                      <?php if( $link ) { ?>
                        <a target="_blank" href="<?php echo esc_url( $link ); ?>" rel="noopener">
                          <?php the_title(); ?>
                        </a>
                      <?php } else {
                        the_title();
                      }?>
                    </h2>
                    <?php if( get_field('client_testimonial_before') && get_field('client_name') ) : ?>
                      <div class="excerpt">
                        <input type="checkbox" class="input-state" id="post<?php echo $i; ?>" />
                        <p class="read-more-wrap"><span class="font-change">“<?php echo do_shortcode(get_field('client_testimonial_before'));?><?php if( get_field('client_testimonial_after') ) : ?> <span class="read-less-target"> ... </span><span class="read-more-target"><?php echo do_shortcode(get_field('client_testimonial_after')); ?>”</span><?php else: echo '”'; endif; ?></span></p>
                        <?php if( get_field('client_testimonial_after') ) : ?><label for="post<?php echo $i; ?>" class="read-more-trigger read-more"></label><?php endif; ?>
                      </div>
                      <span class="name"><?php echo do_shortcode(get_field('client_name'));?></span>
                    <?php endif; ?>
                  </div>
                  <div class="for-client">
                    <?php
                      if ( wp_is_mobile() ) {

                        /*if ( "" === $post->post_content ) {
                          if ( has_post_thumbnail() ) {
                            echo '<div class="img">';
                            the_post_thumbnail();
                            echo '</div>';
                          }
                        } else {
                          echo '<div class="img">';
                          the_content();
                          echo '</div>';
                        }*/
						  
						if ( get_field('wp_video_acf_field') ) {

                          $wp_video_acf_field = get_field('wp_video_acf_field');
                          ?>
                          <div class="img">
                            <div class="video-hide-mobile">
                              <div class="video-responsive-mobile">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $wp_video_acf_field; ?>?autoplay=1&mute=1&loop=1&controls=0&playlist=<?php echo $wp_video_acf_field; ?>" frameborder="0" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>

                        <?php } elseif ( has_post_thumbnail() ) {

                          echo '<div class="img">';
                          the_post_thumbnail();
                          echo '</div>';

                        }
						  

                      } else {

                        if ( get_field('wp_video_acf_field') ) {

                          $wp_video_acf_field = get_field('wp_video_acf_field');
                          ?>
                          <div class="img">
                            <div class="video-hide">
                              <div class="video-responsive">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $wp_video_acf_field; ?>?autoplay=1&mute=1&loop=1&controls=0&playlist=<?php echo $wp_video_acf_field; ?>" frameborder="0" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>

                        <?php } elseif ( has_post_thumbnail() ) {

                          echo '<div class="img">';
                          the_post_thumbnail();
                          echo '</div>';

                        }
                      }
                    ?>                 
                    <div class="text">
                      <?php 
                        if( get_field('client_about') ) {
                          echo '<p>';
                          echo do_shortcode(get_field('client_about'));
                          echo '</p>';
                        }
                        if( get_field('client_problem') ) {
                          echo '<div><span>PROBLEM</span><p>';
                            echo do_shortcode(get_field('client_problem'));
                          echo '</p></div>';
                        }
                        if( get_field('client_wwd') ) {
                          echo '<div><span>WHAT WE DO</span><p>';
                            echo do_shortcode(get_field('client_wwd'));
                          echo '</p></div>';
                        }
                        if( get_field('client_how') ) {
                          echo '<div><span>HOW</span><p>';
                            echo do_shortcode(get_field('client_how'));
                          echo '</p></div>';
                        }
                        if( get_field('client_result') ) {
                          echo '<div><span>RESULT</span><p>';
                            echo do_shortcode(get_field('client_result'));
                          echo '</p></div>';
                        }
                        if( get_field('client_year') ) {
                          echo '<p>';
                          echo do_shortcode(get_field('client_year'));
                          echo '</p>';
                        }
                      ?>
                    </div>
                  </div>
                </div>

                <?php endwhile; wp_reset_postdata(); ?>
              <?php endif; ?>
            <?php } ?>
          </div>

          <div class="client-contact">
            <a class="link1" href="<?php  echo esc_url( home_url('/contact-us')); ?>">Contact Us</a>
            <a class="link2" href="<?php  echo esc_url( home_url('/about-us')); ?>">Find out more about us</a>
          </div>

        </div>

    </main><!-- #main -->
  </section><!-- #primary -->

<?php
get_footer();