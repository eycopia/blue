<?php
/*
Template Name Posts: Template 2
*/
?>
 <?php while ( have_posts() ) : the_post(); ?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php the_title(); ?></h3>
</div>
<div class="modal-body">
    <div class="span6">
        <?php the_content('Leer todo'); ?>
    </div>
</div>
<?php endwhile; ?>

  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Salir</button>
  </div>

