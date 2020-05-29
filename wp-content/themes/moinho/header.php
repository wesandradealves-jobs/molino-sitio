<?php 
  if ( 'POST' == $_SERVER['REQUEST_METHOD'] && isset( $_POST['newsletter'] ) ) {

    $post_type = 'assinantes';
    $email = $_POST['email'];
    $pessoa = $_POST['pessoa'];
    $nome = $_POST['nome'];

    $new_post = array(
    
    'post_title'    => $nome,

    'post_status'   => 'publish',          

    'post_type'     => $post_type 

    );

    $pid = wp_insert_post($new_post);

    if($pid) {

      add_post_meta($pid, 'email', $email, true);  
      add_post_meta($pid, 'pessoa', $pessoa, true); 

      header("Location: " . $_SERVER['HTTP_REFERER'].'?newsletter='.true);

    }

  }
?>

<!DOCTYPE html>
<html class="<?php echo (get_template_directory() !== get_stylesheet_directory()) ? 'child-theme' : ''; ?>" lang="<?php print_r(get_locale()); ?>">
  <head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Wesley Andrade - github.com/wesandradealves">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
    <meta property="og:description" content="<?php echo get_bloginfo('name'); ?>">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="true">
    <link rel="canonical" href="<?php the_permalink(); ?>">
    <?php 
      wp_head(); 
    ?>
    <style>
      span.wpcf7-not-valid-tip {
          padding: 10px 0 0;
          font-size: .7rem;
          font-weight: bold;
          color: coral;
      }     
      .wpcf7-response-output {
          border: 0 !important;
          padding: 0 !important;
          width: 100%;
          margin: 0!important;
          font-size: .8rem;
          text-align: center;
          color: coral;
      }       
    </style>    
  </head>
  <body data-controller="<?php echo (is_single()) ? str_replace('-','_', get_post_type()) : str_replace('-', '_', $post->post_name); ?>" 
    class="<?php echo (is_single()) ? 'pg-single' : ''; ?> pg-<?php echo (is_single()) ? str_replace('-','_', get_post_type()) : $post->post_name; ?>"> 
    <div id="wrap">
      <header class="header">
        <div class="container">
          <nav>
            <ul>
              <?php $i = 0; 
                foreach (wp_get_nav_menu_items('header') as $key => $value) : $i++; ?>
                  <?php if($i <= 2) : ?>
                    <li><a href="<?php echo $value->url; ?>"><?php echo $value->post_title; ?></a></li>
                  <?php endif; ?>
              <?php endforeach; ?>
                  <li onclick="document.location='<?php echo home_url(); ?>';return false;">
                    <h1 class="logo">
                      <?php if(get_theme_mod('logo')) : ?>
                        <span><img src="<?php echo get_theme_mod('logo'); ?>" alt=""></span>
                      <?php endif; ?>

                      <?php if(get_theme_mod('logo_secundaria')) : ?>
                        <span><img src="<?php echo get_theme_mod('logo_secundaria'); ?>" alt=""></span>
                      <?php endif; ?>
                    </h1>
                  </li>   
                  <style>
                    .logo {
                      cursor: pointer
                    }
                  </style>
              <?php $i = 0; 
                foreach (wp_get_nav_menu_items('header') as $key => $value) : $i++; ?>
                  <?php if($i > 2) : ?>
                    <li><a href="<?php echo $value->url; ?>"><?php echo $value->post_title; ?></a></li>
                  <?php endif; ?>
              <?php endforeach; ?>
              <li><a href="javascript:void(0)" onclick="Util.toggleMenu(this)"><i class="fas fa-bars"></i></a></li> 
            </ul>
          </nav>
        </div>
        <nav class="mobile-navigation">
            <ul>
              <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s', 'container_class'=>'' ) ); ?>   
            </ul>          
        </nav>        
      </header>
      <main class="main">