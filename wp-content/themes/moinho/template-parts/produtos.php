        <!-- produtos -->
        <section class="produtos">
          <div class="container">
            <?php 
              if(get_template_directory() === get_stylesheet_directory()) :
                $_terms = get_terms( array('paes_categories') );

                foreach ($_terms as $term) :

                    $term_slug = $term->slug;
                    $_posts = new WP_Query( array(
                        'post_type'         => 'paes',
                        'order' => 'ASC',
                        'posts_per_page'    => -1, 
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'paes_categories',
                                'field'    => 'slug',
                                'terms'    => $term_slug,
                            ),
                        ),
                    ));

                    if( $_posts->have_posts() ) :

                        if($term_slug === 'paes-assados-e-semiassados' || $term_slug === 'paes-de-forma') :
                          ?>
                          <h2 <?php if(get_theme_mod('whatsapp') && get_template_directory() === get_stylesheet_directory() && $term->parent === 0 && $term->slug === 'paes-assados-e-semiassados') : ?> class="has-wpp" <?php endif; ?>>
                            <?php echo $term->name; ?> 
                            <?php if(get_theme_mod('whatsapp') && get_template_directory() === get_stylesheet_directory() && $term->parent === 0 && $term->slug === 'paes-assados-e-semiassados') : ?>
                              <a href="https://api.whatsapp.com/send?phone=<?php echo preg_replace('/[^\dxX]/', '', get_theme_mod('whatsapp')); ?>&text=Ol%C3%A1%20" title="Atendimento via whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wpp.png" alt="Atendimento via whatsapp"><i class="fab fa-whatsapp"></i>
                            <?php endif; ?>
                          </a>
                        </h2>
                        <ul class="produtos-grid">
                          <?php while ( $_posts->have_posts() ) : $_posts->the_post(); ?>
                              <li class="item">
                                <div class="item-inner">
                                  <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>)">
                                    <p>
                                      <span>
                                        <?php echo (get_the_excerpt()) ? get_the_excerpt() : get_the_content(); ?>
                                      </span>
                                      <small><?php 
                                          foreach (get_the_terms( $post->ID, 'paes_categories' ) as $key => $value) {
                                            if($value->parent !== 0) {
                                              echo $value->name.'<br/>';
                                            }
                                          }
                                        ?></small>
                                    </p>                      
                                  </div>
                                  <h3><?php the_title(); ?></h3>                
                                </div>
                              </li>
                          <?php endwhile; ?>
                        </ul>
                        <?php 
                        endif;
                    endif;
                    wp_reset_postdata();
                endforeach; 
              else :
                $_posts = new WP_Query( array(
                    'post_type'         => 'paes',
                    'order' => 'ASC',
                    'posts_per_page'    => -1
                ));            
                ?>
                <style>
                  .child-theme .pg-home .produtos .container .produtos-grid:first-of-type~*>*:nth-child(even) .thumbnail p,
                  .child-theme .pg-home .produtos .container .produtos-grid:first-of-type>:first-of-type~* .thumbnail p{
                    font-size: .75rem!important
                  }                  
                </style>
                <ul class="produtos-grid">
                  <?php 
                      $j = 0;
                      
                      while ( $_posts->have_posts() ) : $_posts->the_post();

                      if(!get_the_terms( $post->ID, 'paes_categories' ) ) : $j++;
                        if($j <= 3) :
                  ?>
                      <li class="item">
                        <div class="item-inner">
                          <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>)">
                            <p>
                              <span>
                                <?php echo (get_the_excerpt()) ? get_the_excerpt() : get_the_content(); ?>
                              </span>
                            </p>                      
                          </div>
                          <h3><?php the_title(); ?></h3>                
                        </div>
                      </li>
                  <?php endif;
                  endif;
                endwhile; 
                ?>
                </ul>    
                <ul class="produtos-grid">
                  <?php 
                      $j = 0;
                      
                      while ( $_posts->have_posts() ) : $_posts->the_post();

                      if(!get_the_terms( $post->ID, 'paes_categories' ) ) : $j++;
                        if($j > 3 && $j <= 7) :
                  ?>
                      <li class="item">
                        <div class="item-inner">
                          <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>)">
                            <p>
                              <span>
                                <?php echo (get_the_excerpt()) ? get_the_excerpt() : get_the_content(); ?>
                              </span>
                            </p>                      
                          </div>
                          <h3><?php the_title(); ?></h3>                
                        </div>
                      </li>
                  <?php endif;
                  endif;
                endwhile; 
                wp_reset_postdata();
                ?>
                </ul>                             
              <?php endif; ?>  
          </div>
        </section>
        <style>
          .produtos-grid {
            justify-content: flex-start
          }
          .item-inner p small:empty {
            display: none!important
          }
        </style>        