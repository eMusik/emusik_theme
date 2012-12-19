<?php if ($view_mode == 'teaser'): ?>
<article<?php print $attributes; ?>>
  <div class="node-image">
    <?php print render($content['field_list_image']);?>
  </div>
  <div class="node-content">
    <?php print $user_picture; ?>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <div class="category"><?php print render($content['field_editorial_base_n']);?></div>
    <div class="date"><?php print $date; ?></div>
    <?php if (!$page && $title): ?>
    <header>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    </header>
    <?php endif; ?>
    <div<?php print $content_attributes; ?>>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['field_ding_body']);
      ?>
    </div>
  </div>
</article>
<?php else: ?>
<article<?php print $attributes; ?>>
  <?php print render($content['field_main_image']);?>
  <div class="node-details">
	<div class="date-value"><?php print $date; ?></div>
    <div class="summary"><?php print ($node->field_ding_body['und'][0]['summary']); ?></div>
	<div class="author"><?php print t('by '); ?><?php print $name; ?></div>
	<div class="body"><?php print render($content['field_ding_body']);?></div>
  </div>
</article>
<?php endif; ?>