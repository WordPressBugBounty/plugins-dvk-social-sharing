
<!-- Social Sharing by Danny - v<?= DVKSS_VERSION ?> - https://wordpress.org/plugins/dvk-social-sharing/ -->
<<?= $element ?> class="dvk-social-sharing ss-icon-size-<?= $icon_size ?>">
    <?php if (! empty($args['before_text'])) : ?>
    <span class="ss-ask"><?php echo esc_html($args['before_text']); ?></span>
    <?php endif; ?>

    <?php foreach ($social_options as $o) : ?>
        <?php include __DIR__ . "/link-{$o}.html.php"; ?>
    <?php endforeach; ?>
</<?=$element?>>
<!-- / Social Sharing By Danny -->
