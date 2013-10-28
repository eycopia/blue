<?php
/**
 * The Template for displaying all single posts.
 *
 * @package martinzamora
 * @subpackage Martin Zamora
 * @since Martin Zamora 1.0
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

      <section class="title_page">
        <h1>
         <?php the_title(); ?>
        </h1>
      </section>

      <section id="contenido">
          <div class="uno">
               <?php

                 the_content('Leer todo');
               endwhile;
               ?>
            <?php comments_template(); ?>
          </div>
      </section>
<?php get_footer(); ?>
</body>
</html>
