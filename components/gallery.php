<div class="gallery">
    <div class="gallery_container">
        <?php for ($i = 1; $i < 7; $i++) { ?>
          <div class="gallery_container_item">
            <img src="<?php bloginfo('template_url'); ?>/img/gallery/galery<?php echo $i; ?>.png" alt="gallery_item">
          </div>
        <?php } ?> 
    </div>
</div>