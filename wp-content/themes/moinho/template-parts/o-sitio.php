        <!-- o sítio -->
        <section class="o-sitio" style="background-image: url(<?php echo get_field('o_sitio_fundo'); ?>)">
          <?php if(get_field('o_sitio_texto')) : ?>
          <div class="container">
            <div class="container-inner">
              <h2>O Sítio do Moinho</h2>
              <p>
                <?php echo get_field('o_sitio_texto'); ?>               
              </p>
              <?php if(get_field('o_sitio_saiba_mais')) : ?>
                <a href="<?php echo get_field('o_sitio_saiba_mais'); ?>" class="btn btn-1">Saiba mais</a>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>
        </section> 