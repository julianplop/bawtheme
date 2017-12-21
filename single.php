

<?php get_header(); ?>


  <div class="articulo">
    <div class="articulo-img"></div>
    <div class="articulo-txt">
      <div class="articulo-txt-inner">
       
        <div class="articulo-txt-inner-contenido">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1 class="articulo-txt-titulo"><?php the_title(); ?></h1>
          <!-- <div class="articulo-txt-sub">Categoría</div> -->
          <div class="articulo-txt-sub"><?php echo get_the_date(); ?></div>
            <p class="articulo-txt-txt"><?php the_content(); ?></p>
          <?php endwhile; endif; ?>
          
        </div>
      </div>
    </div>
  </div>







<?php get_footer(); ?>








