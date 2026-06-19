<?php

defined('DVKSS_VERSION') or exit;

/**
 * @var string $element
 * @var string $icon_size
 * @var array $social_options
 * @var array $share_urls
 */
?>

<!-- Social Sharing by Danny - v<?php echo esc_html(DVKSS_VERSION); ?> - https://wordpress.org/plugins/dvk-social-sharing/ -->
<<?php echo tag_escape($element); ?> class="dvk-social-sharing ss-icon-size-<?php echo esc_attr($icon_size); ?>">
    <?php if (! empty($args['before_text'])) : ?>
    <span class="ss-ask"><?php echo wp_kses($args['before_text'], [
        'br' => [],
        'strong' => [],
        'i' => [],
        'em' => [],
        'b' => [],
        'span' => [],
        'a' => ['href' => []],
    ]); ?></span>
    <?php endif; ?>

    <?php foreach ($social_options as $o) : ?>
        <?php include __DIR__ . '/link-' . basename($o) . '.html.php'; ?>
    <?php endforeach; ?>
</<?php echo tag_escape($element); ?>>
<!-- / Social Sharing By Danny -->
