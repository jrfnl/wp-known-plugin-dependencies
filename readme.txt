=== Known Plugin Dependencies ===
Contributors: jrf
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=995SSNDTCVBJG
Tags: plugin, dependency, composer
Requires at least: 3.1
Tested up to: 4.4
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add-on plugin for the WordPress Plugin Dependencies plugin, injecting additional information about known dependencies between plugins.

== Description ==

The awesome [WordPress Plugin Dependencies](https://wordpress.org/plugins/plugin-dependencies/) plugin introduces plugin dependency management right into your WordPress admin area.

Unfortunately, the reality is that very few plugins currently contain dependency information and until that changes, the effect of having the WordPress Plugin Dependencies plugin activated is minimal.

This plugin enriches the information about dependencies available to the Plugin Dependencies plugin bridging the gap until plugins catch up and start incorporating the `Depends` and `Provides` tags in their file headers properly.

> You'll need to have version **1.3** or higher of the [WordPress Plugin Dependencies](https://wordpress.org/plugins/plugin-dependencies/) plugin installed for this plugin to have any effect.


= Disclaimer: =
The dependency list provided by this plugin is - _and will always be_ - incomplete.

Additional information to be added to the list is [very welcome](https://github.com/jrfnl/wp-known-plugin-dependencies/pulls) and will be gracefully accepted.

Even better: send a pull request or bug report to your favorite add-on plugin requesting them to start using the tags.



= Background =

This plugin was inspired by [this discussion](https://github.com/x-team/wp-plugin-dependencies/issues/34).

Rather than having individual developers create their own lists to enrich the available information, this plugin tries to  bundle the knowledge of dependencies.

The ultimate goal is for the `Depends` tag to be widely adopted and this plugin to become obsolete.


Of course, it would also help **a lot** if the Depends/Provides tags would be officially recognized and mentioned in the [Plugin Developers FAQ](http://wordpress.org/plugins/about/faq/) and if what's expected to be at the top of the main .php file would be as well documented as the readme.txt file in the [Developer Center](http://wordpress.org/plugins/about/), but that's a whole other challenge ;-)

Any lobbying you can do for this will of course be encouraged and applauded!


-----------------------------

If you like this plugin, please [rate and/or review](http://wordpress.org/support/view/plugin-reviews/known-plugin-dependencies) it. If you have ideas on how to make the plugin even better or if you have found any bugs, please report these in the [Support Forum](http://wordpress.org/support/plugin/known-plugin-dependencies) or in the [GitHub repository](https://github.com/jrfnl/wp-known-plugin-dependencies/issues).



== Frequently Asked Questions ==

= How to add dependency information to a plugin: =

Add a 'Depends:' tag to the header of the main plugin .php file of plugin.

`
<?php
/**
 * Plugin name: My Plugin
 * Depends:     Another Plugin
 */
`

__*Sending in Git pull requests/ SVN change requests to plugins with known dependencies is the best way to ensure plugin inter-dependency information is known and I strongly encourage you to do so.*__



== Changelog ==

= 0.1 (2014-09-20) =
* Initial release


== Upgrade Notice ==

= 0.1 =
* Initial release


== Installation ==

1. Extract the .zip file for this plugin and upload its contents to the `/wp-content/plugins/` directory. Alternatively, you can install directly from the Plugin directory within your WordPress Install.
1. Activate the plugin through the "Plugins" menu in WordPress.


== Screenshots ==
1. Before: Plugins page with the Plugin Dependency plugin activated.
1. After: Plugins page with the Plugin Dependency plugin activated + Known Plugin Dependencies plugin activated.
