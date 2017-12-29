<?php get_header(); ?>
  <section id="main">
    <?php
      global $post;
      echo apply_filters('the_content', $post->post_content);
    ?>
  </section>
<?php get_footer(); ?>
