<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<?php if (!$teaser): ?>
  <div class="project-full">
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $submitted ?></span>
    <?php endif; ?>
    <div class="content clearfix"<?php print $content_attributes; ?>>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
      ?>
      <?php print render($content['field_image']); ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php print render($content['body']);?>
    </div>

    <div class="clearfix">
      <?php if (!empty($content['links'])): ?>
        <div class="links"><?php print render($content['links']); ?></div>
      <?php endif; ?>

      <?php print render($content['comments']); ?>
    </div>
  </div>
<?php endif; ?>

<?php if ($teaser): ?>
  <div class="project-teaser">
    <div class="content clearfix"<?php print $content_attributes; ?>>
      <div class="image"><?php print render($content['field_image']); ?></div>
      <div class="content">
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php print render($content['body']);?>
      </div>
    </div>
  </div>
<?php endif; ?>
</div>