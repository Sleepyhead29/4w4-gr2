<?php 
/**
 * Modele par defaut
 * 
 */

?>
<?php get_header(); ?>
<main>
    <section class="blocflex">
    <?php 
    if (have_posts()): 
      while (have_posts()) : the_post(); ?>
      <article class="blocflex">
      
      <h2>
          <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
      </h2>
      <?php //the_content(); // Affiche le contenu complet de l'article ?>
      <?php the_excerpt(); // Affiche un résumé de l'article ?>
      <p><?php if(is_category('cours')) echo "cours"; ?></p>
      <p><?= wp_trim_words(get_the_excerpt(),10, "<span>&#10148;</span>") ?></p>
      </article>
      <?php endwhile;
            endif;
     ?>
     </section>
</main>
<?php get_footer();?>