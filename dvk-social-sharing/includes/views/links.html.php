<?php defined('DVKSS_VERSION') or exit; ?>

<!-- Social Sharing by Danny - v<?= DVKSS_VERSION ?> - https://wordpress.org/plugins/dvk-social-sharing/ -->
<<?= $element ?> class="dvk-social-sharing ss-icon-size-<?= $icon_size ?>">
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
</<?=$element?>>
<!-- / Social Sharing By Danny -->
