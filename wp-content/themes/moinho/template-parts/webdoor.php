        <!-- banner -->
        <section class="webdoor" style="background-image: url(<?php echo get_field('banner_background'); ?>)">
          <div class="container">
            <div class="container-inner">
              <h2><?php echo get_field('banner_titulo'); ?></h2>
              <?php if(get_field('banner_texto')) : ?>
                <hr class="separator" />
                <p><?php echo get_field('banner_texto'); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </section>