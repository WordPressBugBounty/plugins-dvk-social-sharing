<a rel="external nofollow" class="ss-twitter" href="https://x.com/intent/post?text=<?php echo $title; ?>&url=<?php echo $url; ?><?php if (! empty($args['twitter_username'])) {
                                                            echo '&via=', esc_attr($args['twitter_username']);
                                                        } ?>" target="_blank">
<span class="ss-icon ss-icon-twitter"></span>
<span class="ss-text"><?php echo esc_html($args['twitter_text']); ?></span>
</a> 
