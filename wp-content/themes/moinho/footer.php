    <footer id="contato" class="footer">
      <div class="container">
        <h2>Contato</h2>
        <div class="container-inner">
          <div>
            <p>Entre em contato preenchendo o formulário:</p>
            <div class="form">
              <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
            </div>
          </div>
          <div>
            <p>Ou pelos nossos meios de comunicação:</p>
            <p>
              <strong>Telefones:</strong>
              <a href="javascript:void(0)"><?php echo get_theme_mod('telefones'); ?></a><br/><br/>
              <strong>WhatsApp:</strong>
              <a href="https://api.whatsapp.com/send?phone=<?php echo preg_replace('/[^\dxX]/', '', get_theme_mod('whatsapp')); ?>&text=Ol%C3%A1%20"><?php echo get_theme_mod('whatsapp'); ?></a><br/><br/>
              <strong>E-mail:</strong>
              <a href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?> </a>             
            </p>
            <ul class="social">
              <?php if(get_theme_mod('facebook')) : ?>
                <li><a target="_blank" href="<?php echo get_theme_mod('facebook'); ?>"><i class="fab fa-facebook"></i></a></li>
              <?php endif; ?>
              <?php if(get_theme_mod('facebook')) : ?>
                <li><a target="_blank" href="<?php echo get_theme_mod('instagram'); ?>"><i class="fab fa-instagram"></i></a></li>
              <?php endif; ?>
              <?php if(get_theme_mod('website')) : ?>
                <li><a target="_blank" href="http://<?php echo get_theme_mod('website'); ?>"><?php echo get_theme_mod('website'); ?></a></li>
              <?php endif; ?>
            </ul>
          </div>
          <div>
            <h3>Visite nossas lojas</h3>
            <p>
              <?php 
                $_posts = new WP_Query( array(
                    'post_type'         => 'lojas',
                    'order' => 'ASC',
                    'posts_per_page'    => -1,
                    'orderby' => 'title'
                ));
                while ( $_posts->have_posts() ) : $_posts->the_post();
                  ?>
                    <strong><?php the_title(); ?></strong>
                    <?php echo get_field('endereco'); ?><br/>
                    <br/>
                    Tel.: <?php echo get_field('telefone'); ?>
                    <br/><br/>
                  <?php 
                endwhile;
                wp_reset_postdata();
              ?>       
            </p>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <p>
            Razão social: SDM comercializadora de produtos orgânicos ltda<br/>
            CNPJ: 15428902/0001-09  |  Inscrição Estadual: 79640557            
          </p>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <p>Desenvolvido por Imaginatto Design e Marketing</p>
        </div>
      </div>
    </footer>
<!--     <script defer src="assets/js/vendors.js"></script>
    <noscript>Seu Navegador pode não aceitar javascript.</noscript>
    <script defer src="assets/js/commons.js"></script>
    <noscript>Seu Navegador pode não aceitar javascript.</noscript>   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>

<!--     </main>
    <footer id="footer" class="footer">
      <div id="contato" class="footer-top">
        <div>
          <p>Ligue-nos: <span><i class="fas fa-phone"></i> <?php echo get_theme_mod('telefone'); ?></span></p>
          <p>Envie aqui a sua mensagem</p>
          <?php echo do_shortcode('[contact-form-7 id="172" title="Contacto"]'); ?>
        </div>
        <div id="map"></div>
        <script>
          var map;
          function initMap() {
            map = new google.maps.Map(
                document.getElementById('map'),
                {center: new google.maps.LatLng(<?php echo get_theme_mod('coordenadas'); ?>), disableDefaultUI: true, zoom: 16});

            var iconBase = './assets/img/';

            var icons = {
              default: {
                icon: iconBase + 'pin.png'
              }
            };

            var features = [
              {
                position: new google.maps.LatLng(<?php echo get_theme_mod('coordenadas'); ?>),
                type: 'default'
              }
            ];

            for (var i = 0; i < features.length; i++) {
              var marker = new google.maps.Marker({
                position: features[i].position,
                icon: icons[features[i].type].icon,
                map: map
              });
            };
          }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5QMfSnVnSCcmkFag0ygrXzj2QJ9usEG4&callback=initMap"></script>           
      </div>
      <div class="footer-bottom">
        <div class="container">
            <nav>
              <ul>
                <?php wp_nav_menu( array( 'container' => false, 'menu' => 'footer', 'items_wrap' => '%3$s', 'container_class'=>'' ) ); ?>             
              </ul>
            </nav>
          <div>
            <h2 class="logo">
              <a style="background-image: url(<?php echo get_theme_mod('logo'); ?>)" href="<?php echo home_url(); ?>"></a>
            </h2>
            <p>
              <i class="fas fa-map-marker-alt"></i> <span><?php echo get_theme_mod('endereco'); ?></span>
            </p>            
            <p>
              <i class="fas fa-phone"></i> <span><a href="tel:<?php echo str_replace(' ', '', get_theme_mod('telefone')); ?>"><i class="fa fa-phone"></i> <?php echo get_theme_mod('telefone'); ?></a></span>
            </p>
            <p>
              <i class="fas fa-envelope"></i> <span><a href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?></a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <p>© 2018-<?php echo date('Y'); ?>, <?php echo get_bloginfo('title'); ?> - Todos os Direitos Reservados.</p>
        </div>
      </div>
    </footer>
    <a href="javascript:void(0)" data-anchor="main" class="toTop"><i class="fas fa-angle-down"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html> -->