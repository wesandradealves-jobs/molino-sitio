<?php /* Template Name: Home */ ?>
<?php 
  get_header(); 
?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/webdoor'); ?>
        <?php get_template_part('template-parts/newsletter'); ?>
        <?php get_template_part('template-parts/produtos'); ?>
        <!-- o que faz um bom pão orgânico -->
        <section class="o-que-faz-um-bom-pao-organico">
          <div class="container">
            <div class="container-inner">
              <h2>O que faz um bom pão orgânico?</h2>
              <div>
                <p>
                  <?php echo get_field('o_que_faz_um_bom_pao_organico_texto'); ?>              
                </p>                
              </div>
              <div>
                <div class="galeria">
                  <div class="featured"></div>
                  <nav>
                    <ul>
                      <ul>
                        <?php 
                          foreach (get_field('o_que_faz_um_bom_pao_organico_galeria') as $key => $value) {
                            # code...
                            ?>
                            <li>
                              <a href="javascript:void(0)" style="background-image: url(<?php echo $value['imagem']; ?>"></a>
                            </li>
                            <?php 
                          }
                        ?>                                                                  
                      </ul>
                    </ul>                    
                  </nav>
                </div>
              </div>              
            </div>
          </div>
        </section>
        <?php get_template_part('template-parts/o-sitio'); ?>	
   <?php endwhile;
   endif; ?>  
 <?php get_footer(); ?>