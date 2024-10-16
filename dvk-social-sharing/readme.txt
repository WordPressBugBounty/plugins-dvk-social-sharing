=== Social Sharing (by Danny) ===
Contributors: DvanKooten, ibericode
Donate link: https://www.dannyvankooten.com/donate/
Tags: social, social sharing, twitter, linkedin, facebook
Requires at least: 3.7
Requires PHP: 7.2
Tested up to: 6.6
Stable tag: 1.3.9
License: GPL-3.0-or-later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Adds social sharing buttons for Twitter, Facebook and LinkedIn to your blog posts or pages.

== Description ==

= Social Sharing By Danny =

The simplest sharing links possible for Twitter, Facebook and LinkedIn.

Most WordPress plugins that add social sharing functionality are too ugly, heavy, complicated or poorly coded for my liking. This plugin aims to be better: simple, efficient and flexible.

= No script dependencies =

From itself, the buttons are actually plain text links which require <strong>no external scripts</strong>. It makes no sense to load over 50 kilobytes of scripts and styles for a functionality 95% of your users will not use.

= Simple, yet pretty and user-friendly  =

You can have the plugin load two very small files to add icons and a pop-up functionality to the sharing links. This way, users do not have to leave your website after clicking a sharing option. Both files are optional and you are free to craft your own styles.

**Features**

- Sharing links for Twitter, Facebook and LinkedIn
- Simple icon styles with a hover effect
- Simple script of just 426 bytes (with no additional dependencies) which will make the various sharing links open in a pop-up window.
- A shortcode and a template function to display the buttons anywhere you want.
- An overridable filter to customize when and where to display the sharing links.
- Translation ready

**Translations**

Is the plugin not translated into your language? You can [contribute your translations using the translation editor here on WordPress.org](https://translate.wordpress.org/projects/wp-plugins/dvk-social-sharing/).

**About the author**

Danny van Kooten has been developing plugins for WordPress since version 3.0, all the way back in 2010. You can read more about him on [his personal website](https://www.dannyvankooten.com/) or check out his other [WordPress plugins](https://dannyvankooten.com/wordpress-plugins/).


== Frequently Asked Questions ==

= Can I display the sharing buttons using a shortcode? =

Yes, you can use the following shortcode (eg. inside posts or pages).

`
[dvk_social_sharing]
`

= Can I display the sharing buttons using a template function? =
Yes, you can use the following PHP function from your template files.


`
<?php echo dvk_social_sharing(); ?>
`

= I want more control over when to show the sharing options =

Use the `dvkss_display` filter to show the links in more places.

*Example 1: will add the sharing links to everything possible*

`
add_filter('dvkss_display', '__return_true');
`

*Example 2: will add the sharing links to all single posts, pages and other post types.*

`
function my_display_condition() {
	return is_singular();
}

add_filter('dvkss_display', 'my_display_condition');
`


= Shortcode and function arguments =

**element** (string)

The element to use as the wrapping element. Defaults to `p`, a paragraph element.

**twitter_username** (string)

The Twitter username to add to tweets. This will override the value from the settings page.

**social_options** (comma separated string)

The social media buttons to show. You can also use this to change the order of the buttons. Defaults to `twitter, facebook, googleplus`, which are the only 3 possible values.

**before_text**  (string)

The text to show before the links. This will override the value in the settings page.

**twitter_text** (string)
**facebook_text** (string)
**googleplus_text** (string)
**linkedin_text** (string)

The texts for the different links. Defaults to the string set in the translation file.

== Screenshots ==

1. Simple but beautiful sharing links add the end of your posts.
2. Disable the default plugin CSS to create your own styles.
2. The settings page of the plugin.

== Installation ==

= Installing the plugin =

1. In your WordPress admin panel, go to *Plugins > New Plugin*, search for *Social Sharing by Danny* and click "Install now"
1. Alternatively, download the plugin and upload the contents of `dvk-social-sharing.zip` to your plugins directory, which usually is `/wp-content/plugins/`.
1. Activate the plugin.

= Additional Customization =

Have a look at the [frequently asked questions](https://wordpress.org/plugins/dvk-social-sharing/faq/) section for some examples of additional customization.

== Changelog ==


#### 1.3.9 - Oct 16, 2024

- Address PHP warning introduced by version 1.3.8.


#### 1.3.8 - Oct 11, 2024

- Escape shortcode arguments before outputting to prevent stored XSS from users with `edit_post` capability. Thanks to [Peter Thaleikis](https://peterthaleikis.com/) for the responsible disclosure.


#### 1.3.7 - Oct 1, 2024

- Remove Google Plus as an option, since it has long been shut down.
- Add `defer` attribute to pop-up script tag.
- Improved sanitization of settings.
- Disallow the use of `<a>` elements in the `before_text` setting if user lacks `unfiltered_html` capability.
- Get rid of ES6 code in JavaScript files, to support older browsers.


#### 1.3.4 - Dec 23, 2022

- Rewrite admin JavaScript to no longer require jQuery.
- Minor PHP improvements.
- Improved minification of all CSS and JS assets.


#### 1.3.3 - Dec 31, 2019

- Remove unused LinkedIn parameters.
- Switch to WordPress.org managed translations.


#### 1.3.2 - March 23, 2018

- Minor code optimisations
- Added `linkedin_text` shortcode argument to FAQ.


#### 1.3.1 - October 26, 2017

Misc. textual improvements.


#### 1.3 - October 4, 2017

**Additions**

- Added LinkedIn.


#### 1.2.7 - January 6, 2017

**Improvements**

- Use `https://` protocol for sharing links.
- Use SVG icons.

**Additions**

- Add "large" icon size option.
- Choose social network options from settings page.
- Added Italian translations, thanks to Alessandro Guidi.


#### 1.2.6 - March 29, 2016

**Fixes**

- Apostrophes in titles not properly escaped in sharing URL's. Thanks Robin Aldenhoven!

#### 1.2.5 - January 26, 2015

**Improvements**

- Minor improvements to pop-up script

**Additions**

- Added Finnish (fi_FI) translations, thanks to [Ari-Pekka Koponen](http://versi.fi/)


#### 1.2.4 - November 17, 2014

**Improvements**

- Wrapped link text in element so it can be hidden using CSS
- Improvements to pop-up JavaScript

#### 1.2.3 - September 4, 2014

**Improvements**

- Added minified scripts and option to load minified version
- Some textual improvements

#### 1.2.2 - April 30, 2014

**Fixes**

- Fixed not being able to save all "auto add to .." checkboxes unchecked

#### 1.2.1 - April 29, 2014
**Additions**

- Added German translations, thanks Andreas Kuhl!

**Improvements**

- Wrapped non-translatable strings in translation calls.
- Updated Dutch translations

#### 1.2 - March 19, 2014
**Additions**

- Added option to automatically add sharing options to all registered post types
- Added Spanish translations, props to [Luciano A. Ferrer](http://cbasites.net/).

**Improvements**

- Disabled Pop-up JS by default until we figure out a cross-browser compatibility fix.

#### 1.1 - February 19, 2014
- Added: Slovenian translations, thanks to [Domen Hrabar, Viking Marketing](http://www.vikingmarketing.si/)
- Improved: direct file access security


#### 1.0.9 - December 30, 2013
- Added: Danish translation, thanks to [Finn Hoelgaard](http://fhn.dk/)!
- Added: Russian translation, thanks to Nikita!
- Improved: Pop-up script now waits for full page load.

#### 1.0.6 - December 20, 2013
- Improved: Pop-up JS now used addEventListener to enable multiple event listeners (like a Google Analytics plugin) attaching to the sharing links.

#### 1.0.5 - December 9, 2013
- Added: French translations, thanks to [Said](http://www.ninapeople.com/)
- Improved: All backend strings are now translatable
- Improved: Prevented direct access or search engine indexing of plugin files
- Improved: Facebook URL sharing parameters

#### 1.0.4 - December 2, 2013
- Improved: Minified pop-up script to 480 bytes.
- Improved: Removed image attribute from Facebook Share URL. FB will now pick up `og:image` meta tags.

#### 1.0.3 - November 25, 2013
- Fixed: undefined index notice when saving options.

#### 1.0.2 - November 20, 2013

- Added: Dutch translation
- Added: Option to change the text that shows before the sharing links.

#### 1.0.1 - November 20, 2013

- Fixed: Added settings link to plugins overview page
- Fixed: "tweet about" option in admin now tweets about the correct plugin.

#### 1.0 - November 17, 2013

- Initial release.

