<?php /* Template Name: Home */ ?>
<?php 
  get_header(); 
?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/webdoor'); ?>
        <?php get_template_part('template-parts/newsletter'); ?>
        <?php get_template_part('template-parts/produtos'); ?>

          <!-- sobre orgânicos -->
          <section class="sobre-organicos">
            <div class="container">
              <h2>Sobre orgânicos</h2>
              <ul class="row">
                <?php 
                  foreach (get_field('sobre_organicos') as $key => $value) {
                    ?>
                    <li>
                      <i><img src="<?php echo $value['icone']; ?>" alt=""></i>
                      <h3><?php echo $value['titulo']; ?></h3>
                      <p><?php echo $value['texto']; ?></p>
                    </li>                    
                    <?php 
                  }
                ?>
              </ul>
            </div>
          </section>
        <?php get_template_part('template-parts/o-sitio'); ?>        		
   <?php endwhile;
   endif; ?>  
 <?php get_footer(); ?>