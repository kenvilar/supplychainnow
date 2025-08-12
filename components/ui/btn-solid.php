<?php

$text = $args['text'] ?? 'Button Secondary';
$link = $args['link'] ?? '#';
$style = $args['style'] ?? 'tertiary'; // options: primary, secondary, tertiary, primary-outline, secondary-outline
$class = $args['class'] ?? '';
?>
<a href="<?= esc_attr($link); ?>" class="btn <?= esc_attr($style); ?> w-inline-block <?= esc_attr($class); ?>">
	<div><?= esc_html($text); ?></div>
</a>