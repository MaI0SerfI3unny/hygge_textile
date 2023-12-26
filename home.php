<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>
<main>
  <?php require 'components/comment.php'; ?>

  <?php require 'components/telegram.php'; ?>
  <?php require 'components/gallery.php'; ?>
</main> 
<?php get_footer() ?>
