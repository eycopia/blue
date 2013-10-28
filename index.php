<?php
get_header();
?>
<div class="title_page"></div>
      <section class="">

 <?php if (have_posts()) : ?>
    <section id="contenido">
   <?php while (have_posts()) : the_post(); ?>


          <article class="uno">
          <h2 class="title_post"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title(); ?></a></h2>
               <?php

                 the_content('Leer todo'); ?>

                 <div class="tags"><?php the_tags('Tags: ', ', ', ' | '); ?>

                <?php comments_popup_link(' Sin Comentarios;', ' 1 Comentarios', ' % Commentarios'); ?></div>
                <p class="meta">

    <?php    endwhile;   ?>
    </section>
    <div class="boton"><?php next_posts_link('< Entradas Anteriores'); ?></div>
    <div class="right boton"><?php previous_posts_link('Entradas Recientes >'); ?></div>

<?php endif; ?>

</div>
    <!-- footer -->
    <?php get_footer(); ?>

</body>
</html>