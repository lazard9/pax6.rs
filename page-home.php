<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

get_header(); ?>

  <section id="primary" class="content-area">
    <main id="main" class="site-main">

      <div class="front-digital">
        <div>
          <h1 class="page-title">Make your digital product right, from the start.</h1>
          <p>We help digital product teams get the information they need, uncomplicate their digital products, make seamless experiences, and achieve success through design.</p>
          <a class="book-afc " href="<?php  echo esc_url( home_url('/booking')); ?>">Book a free consultation</a>
        </div>
      </div>

      <div class="front-organisations">
        <h3>Organizations of all sizes trust us with their products</h3>
        
        <div class="front-logos">
          <?php
          while ( have_posts() ) : the_post();

            the_content();

          endwhile; // End of the loop.
          ?>
        </div>

        <div class="front-logos-2">
          <div class="clients clients-m-b">
            <div class="img1">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/defigo.png" alt="Defigow" width="562" height="217"/>
              <span class="span">Oslo, Norway</span>
            </div>
            <div class="img2">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/susieippolito.png" alt="Susie Ippolito" width="809" height="217"/>
              <span class="span">Syracuse, New York</span>
            </div>
            <div class="img3">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/NowRenting.png" alt="NowRenting" width="1127" height="217"/>
              <span class="span">Rhode Island, USA</span>
            </div>
            <div class="img4">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mist.png" alt="Mist wash" width="501" height="217"/>
              <span class="span">Dubai, UAE</span>
            </div>
            <div class="img5">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/obi.png" alt="Ocean Blue Inovation" width="1285" height="217"/>
              <span class="span">California, USA</span>
            </div>
          </div>
          <div class="clients clients-w">
            <div class="img1 img6">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/olee-logo.jpg" alt="Olee" width="423" height="217"/>
              <span class="span">Novi Sad, Serbia</span>
            </div>
            <div class="img2 img7">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/horn-of-plenty-logo.png" alt="Horn of Plenty" width="423" height="217"/>
              <span class="span">Berlin, Germany</span>
            </div>
            <div class="img3 img8">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/yapp-logo.png" alt="Yapp" width="686" height="217"/>
              <span class="span">Tel Aviv, Israel</span>
            </div>
            <div class="img4 img9">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/merceros-logo.jpg" alt="Merceros" width="857" height="217"/>
              <span class="span">Berlin, Germany</span>
            </div>
          </div>   
        </div>

        <a class="more-clients" href="<?php  echo esc_url( home_url('/clients-projects')); ?>">More about our clients and our work <img class="arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow.png" alt="right arrow" width="20" height="32"/></a>
      </div>

      <div class="front-wwdo"><!-- Front page content -->
        <h2>We can help you</h2>
        <div class="wwdo-list">                
          <div>
            <h3>Create a new product</h3>
            <p>Taking a digital product from idea to functional is a challenging path. It takes a lot of time, money, iterations, rework and waste. We help organizations and startups turn their ideas into viable digital products that bring value both to the business and to users. And we help them save their time and money through meaningful research, strategy and design.</p>
          </div>
          <div>
            <h3>Improve or scale existing products</h3>
            <p>We work with digital product teams to iterate existing digital products and optimize product performance for the business and the user. Our product evaluation methods are designed to detect obstacles to improvement. Our product design is always centered in user experience with an approach that is focused on scalability.</p>
          </div>
        </div>

        <a class="wwdo-c-us" href="<?php  echo esc_url( home_url('/contact-us')); ?>">Contact us <img class="arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow.png" alt="right arrow" width="20" height="32"/></a>
      </div>

      <div class="front-wwdo wwdo-m-b"><!-- Front page content -->
        <h2>What else we do</h2>
        <div class="wwdo-list wwdo-flex">                
          <h3 class="wwdo-h3a">Product evaluation<br> and analyses</h3>
          <h3 class="wwdo-h3a">UX strategy and design</h3>
          <h3 class="wwdo-h3a">Designing through prototyping and testing</h3>
          <h3 class="wwdo-h3a">Positioning and content strategy</h3>
        </div>

        <!--<a class="wwdo-c-us" href="<?php  echo esc_url( home_url('/clients-projects')); ?>">See our services <img class="arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow.png" alt="right arrow" width="20" height="32"/></a>-->
      </div>

      <div class="front-yhpd">
        <div class="front-yhpd-projects">
            <div>
              <h3>Yapp</h3>
              <p>Online market using digital currency</p>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/yapp.jpg" alt="Yapp" width="1076" height="662"/>
            </div>
            <div>
              <h3>Horn of Plenty</h3>
              <p>PR Consulting website</p>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/horn-of-plenty.jpg" alt="Horn of Plenty" width="1076" height="662"/>
            </div>
            <div class="img-first">
              <h3>Project Ajax</h3>
              <p>Comic & Educational platform</p>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/project-ajax.jpg" alt="Project Ajax" width="1076" height="662"/>
            </div>
            <div class="img-first">
              <h3>Defigo</h3>
              <p>Digital intercom & building management software</p>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/defigo.jpg" alt="Defigo" width="1076" height="662"/>
            </div>
        </div>
        <div class="front-yhpd-links">
          <a class="yhpd-o-w" href="<?php  echo esc_url( home_url('/clients-projects')); ?>">Our work <img class="arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow.png" alt="right arrow" width="20" height="32"/></a>
          <a class="yhpd-dribbble" href="https://dribbble.com/Pax6_Design_Consulting" target="_blank" rel=”noopener”><img class="arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dribbble-ball-icon.png" alt="right arrow" width="20" height="32"/> Our work on dribbble</a>
        </div>
      </div>

      <div class="front-testimonials">
        <?php echo do_shortcode( "[testimonials_cycle transition='fade' timer='6000' order='ASC' show_pager_icons='true']" ); ?>
      </div>

      <div class="front-hwdi">
        <div>
          <h2>We can be your creative department, or we can help you build one.</h2>
          <p>Looking to create an in-house creative team and to integrate design into your day-to-day practice? We can help you build one and educate your team to use a design process that plays in your advantage.</p>
          <a class="book-afc " href="<?php  echo esc_url( home_url('/booking')); ?>">Contact us for more information</a>
        </div>
      </div>

      <div class="front-dtrt">
        <h2>Find out how we can help your team</h2>
        <p>Whether you are starting a new project, or you are stuck in a current one, or you want to integrate design into your day-to-day practice, we are your team.</p>
        <p>Join us on a 30 minutes call and see how we can help you.</p>
        <a class="book-afc " href="<?php  echo esc_url( home_url('/booking')); ?>">Book a free consultation</a>
      </div>

    </main><!-- #main -->
  </section><!-- #primary -->

<?php
get_footer();