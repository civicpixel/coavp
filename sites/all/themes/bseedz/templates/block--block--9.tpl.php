<?php $nodeid = 61; ?>
<?php $thisnode = node_load($nodeid); ?>
<?php $image_newsletter = "/sites/default/files/".$thisnode->field_newsletter_signup_image['und']['0']['filename']; ?>

<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<img src="<?php print $image_newsletter; ?>" alt="" />

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print $content; ?>

</div><!-- /.block -->
