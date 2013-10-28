<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage martinzamora
 * @since martin zamora 1.0
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
          </div>
      </section>
<?php get_footer(); ?>
</body>
</html>
