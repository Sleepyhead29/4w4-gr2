<?php 
/**
 * Modele par defaut
 * 
 */

?>
<?php get_header(); ?>
<main>
    <?php 
    if (have_posts()): 
      while (have_posts()) : the_post(); ?>
      <div class="article-solo">
      <h1>
          <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
      </h1>
      <?php //the_content(); // Affiche le contenu complet de l'article ?>
      <?php the_excerpt(); // Affiche un résumé de l'article ?>
      <?= wp_trim_words(get_the_excerpt(),10, "&#10148;") ?>
      </div>
          <hr>
      <?php endwhile;
  endif;
     ?>
</main>
<?php get_footer();?>