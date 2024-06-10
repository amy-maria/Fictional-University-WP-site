<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo esc_url(site_url()); ?>"><strong>Fictional</strong> University</a>
            </h1>
            <p><a class="site-footer__link" href="tel:5555555555">tel:555.555.5555</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
                <ul>
                <li <?php
              if (is_page('about-us') or wp_get_post_parent_id(0) == 13) echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/about-us')); ?>">About Us</a></li>
                  <li <?php if(get_post_type()=='program') echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(get_post_type_archive_link('program'));?>">Programs</a></li>
                  <li <?php if (get_post_type() == "event" OR is_page('past-events')) echo 'class="current-menu-item"' ;?>><a href="<?php echo esc_url(get_post_type_archive_link("event")); ?>">Events</a></li>
                  <li <?php if (get_post_type() == 'campus') echo 'class= "current-menu-item"'; ?>> <a href="<?php echo esc_url(get_post_type_archive_link('campus')); ?>">Campuses</a></li>
                </ul>
              </nav>
            </div> 

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
                <ul>
                <li <?php
              if (is_page('cookie-policy') or wp_get_post_parent_id(0) == 21) echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('privacy-policy/cookie-policy')); ?>">Cookies</a></li>
                  <li <?php
              if (is_page('privacy-policy') or wp_get_post_parent_id(0) == 3) echo 'class="current-menu-item"' ?>><a href="<?php echo esc_url(site_url('/privacy-policy')); ?>">Privacy</a></li>
                  
                </ul>
              </nav>
            </div>
          </div> 

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

    
<?php wp_footer();?>
</body>
</html>