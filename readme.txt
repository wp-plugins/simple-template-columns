=== Simple Template Columns ===
Contributors: plizzo
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=APEQE63QALKHA&lc=SE&item_name=Simple%20Template%20Columns&item_number=simple%2dtemplate%2dcolumns&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: templates, columns, content, page, loop, custom fields, advanced custom fields
Requires at least: 3.2.1
Tested up to: 3.5.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple template columns is a simple plugin that puts focus on one thing, to easily let you create columns in your templates.

== Description ==

This plugin was made with developers in mind. Being a developer myself I stumbled across the annoyance of creating multi-column templates every time I needed to. Therefore I created this plugin to solve the issue. The plugin registers two new functions called getColumn and countColumns and they both work in a very simple manner.

I recommend the plugin called [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/ "Go to plugin page") in order to create custom fields. *More information on custom fields can be found in the FAQ.*

The columns are created by using the more-tag in the content. As simple as that!
**Refer to the FAQ to learn more about the usage of this plugin.**


== Installation ==

To perform a manual install, do the following:

1. Upload the 'simple-template-columns' folder to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy, and let me know if you run into any issues!

== Frequently Asked Questions ==

= How do I fetch a column in the WordPress loop? =
`<?php echo getColumn(1); ?> // Replace 1 with column`

= How do I fetch a column using a custom field? =
`<?php echo getColumn(1, get_field('FIELD_NAME')); ?> // Replace 1 with column`

= How do I get the column count in the WordPress loop? =
`<?php $columns = countColumns(); ?>`

= How do I get the column count using a custom field? =
`<?php $columns = countColumns(get_field('FIELD_NAME')); ?>`

= How do I go about creating custom fields? =
When it comes to creating custom fields there are many ways. Although, I prefer to use the plugin called [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/ "Go to plugin page") written by [Elliot Condon](http://www.elliotcondon.com/ "Elliot Condon").

= If I have some feature requests, where can I turn to? =
If you have some ideas for new features or improvements I would love to hear about them.. You can get in touch with me by [sending me an email](mailto:contact@jonathanlundstrom.me "My email-address").

== Changelog ==

= 1.0.2 =
* Updated Plugin URI, changed a text string…

= 1.0 =
* Initial plugin release