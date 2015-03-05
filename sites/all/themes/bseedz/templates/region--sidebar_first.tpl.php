<?php if ($content): ?>
  <div class="<?php print $classes; ?>">
    <?php print $content; ?>
    <div id="static-block-container">
      <?php global $base_path; ?>
      <img src="<?php print $image_sidebar; ?>" id="random-bg-image" />
    </div>
  </div>
<?php endif; ?>