<?php

/**
 * Returns a string containing the sharing buttons HTML
 *
 * @param array $args
 * @return string
 */
function dvk_social_sharing($args = array())
{

    $opts = dvkss_get_options();

    // parse function and/or shortcode arguments
    $defaults = array(
        'element' => 'p',
        'social_options' => join(',', $opts['social_options']),
        'twitter_username' => $opts['twitter_username'],
        'before_text' => $opts['before_text'],
        'linkedin_text' => __('on LinkedIn', 'dvk-social-sharing'),
        'twitter_text' => __('on Twitter', 'dvk-social-sharing'),
        'facebook_text' => __('on Facebook', 'dvk-social-sharing'),
        'icon_size' => $opts['icon_size'],
    );
    $args = wp_parse_args($args, $defaults);

    // sanitize arguments
    $element = in_array($args['element'], ['p', 'div', 'span'], true) ? $args['element'] : 'p';
    $icon_size = abs((int) $args['icon_size']);
    $social_options = array_filter(array_map('trim', explode(',', $args['social_options'])));
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $url = urlencode(get_permalink());

    // start building output string
    ob_start();
    include DVKSS_PLUGIN_DIR . '/includes/views/links.html.php';
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
