<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
    watchdog("content variable", "<pre>" . print_r($content, true) . "</pre>");
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      ?>
      <div class="resume clearfix">
        <dl>
    <?php foreach($content as $fieldname => $field): ?>
          <?php if ($fieldname != 'comments' && $fieldname != 'links') { ?>
    <dt id="<?php print strtolower($field['#title']) ?>dt"><?php print($field['#title']); ?>
                    <dd><?php print render($field); ?></dd>
			            <dd class="clear"></dd>
                  <?php } ?>
    <?php endforeach; ?>
                  </dl>
  </div>
      <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
</div>
