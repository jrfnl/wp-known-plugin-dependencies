WordPress Known Plugin Dependencies
============================

Add-on plugin for the [WordPress Plugin Dependencies](https://github.com/x-team/wp-plugin-dependencies) plugin, injecting additional information about known dependencies between plugins.

Inspired by [this discussion](https://github.com/x-team/wp-plugin-dependencies/issues/34).

Please refer to the [readme.txt](https://github.com/jrfnl/wp-known-plugin-dependencies/blob/master/README.txt) file for more details.

**Disclaimer:** This list is and will always be incomplete.

**Pull requests with more/improved dependency information very welcome!**


#### How to add dependency information:

##### Preferred method:
Add a 'Depends:' tag to the header of the main plugin .php file of plugin.

```php
/**
 * Plugin name: My Plugin
 * Depends:     Another Plugin
 */
```

__*Sending in Git pull requests/ SVN change requests to plugins with known dependencies is the best way to ensure plugin inter-dependency information is known and I strongly encourage you to do so.*__


##### Living in the real world:
Unfortunately, the reality is that very few plugins currently contain dependency information and until that changes, the effect of having the WordPress Plugin Dependencies plugin activated is minimal, if not negligible.

Rather than having individual developers create their own lists to enrich the available information, this plugin tries to  bundle the knowledge of dependencies.

The ultimate goal is for the `Depends` tag to be widely adopted and this plugin to become obsolete.


Of course, it would also help **a lot** if the Depends/Provides tags would be officially recognized and mentioned in the [Plugin Developers FAQ](https://developer.wordpress.org/plugins/wordpress-org/plugin-developer-faq/) and if what's expected to be at the top of the main .php file would be as well documented as the readme.txt file in the [Developer Center](https://wordpress.org/plugins/developers/), but that's a whole other challenge ;-)

Any lobbying you can do for this will of course be encouraged and applauded!
