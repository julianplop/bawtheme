<?php
/*
Template Name: Preguntas
*/
?>

<?php get_header(''); ?>


<div class="contenido preguntas">
    <div class="preguntas-cont">
      <h1 class="preguntas-titulo"> <?php echo pll__('Todo lo que debes saber<br>sobre nosotros, si no lo encuentras acá<br>por favor <span class="preguntas-titulo-link" data-ix="contacto-open">escríbenos.</span>'); ?></h1>
      
      
        <?php $args = array(
            'post_type' => 'pregunta',
        );
        ?>



        <?php $loop = new WP_Query($args); ?>
        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <?php $postids = get_the_ID()?>


                    <div data-delay="0" class="preguntas-item w-dropdown" data-ix="dropdown-open">
                        <div class="preguntas-item-titulo w-dropdown-toggle ">
                        <div class="w-icon-dropdown-toggle"></div>
                        <div class="preguntas-item-titulo-texto"><?php echo the_title(); ?></div>
                        </div>
                        <nav id="preguntas-texto" class="preguntas-texto-cont w-dropdown-list">
                        <p class="preguntas-texto"><?php echo the_field('txt_pregunta'); ?></p>
                        </nav>
                    </div>
      


                            

        <?php endwhile; ?>

        <?php else: ?>
            <h1>No posts here!</h1>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      
      
      
      


    </div>
  </div>



<?php get_footer(''); ?>












