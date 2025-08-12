<?php

$text = $args['text'] ?? 'Button Secondary';
$link = $args['link'] ?? '#';
$style = $args['style'] ?? 'tertiary'; // options: primary, secondary, tertiary, primary-outline, secondary-outline
$class = $args['class'] ?? '';
$attributes = $args['attributes'] ?? []; // extra attributes as array

// Convert attributes array to HTML string
$attr_string = '';
foreach ($attributes as $key => $value) {
	$attr_string .= sprintf(' %s="%s"', esc_attr($key), esc_attr($value));
}
?>
<a href="<?= esc_attr($link); ?>"
   class="btn <?= esc_attr($style); ?> w-inline-block <?= esc_attr($class); ?>" <?= $attr_string; ?>>
	<div><?= esc_html($text); ?></div>
</a>