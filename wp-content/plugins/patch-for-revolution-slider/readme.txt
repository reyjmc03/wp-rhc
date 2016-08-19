=== Plugin Name ===
Contributors: dragosgaf
Donate link: http://dragosgaftoneanu.com/
Tags: revolutionslider, vulnerability, exploit, security, patch
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 2.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin patches the existent vulnerabilities in Revolution Slider plugin, including the latest SoakSoak vulnerability.

== Description ==

This plugin patches (as long as it is active) the existent vulnerabilities in Revolution Slider plugin, including the latest SoakSoak (Arbitrary File Upload) vulnerability. 

You can also monitor using the "Black list" option all the attackers that attempt to use a Revolution Slider exploit to gain access to your website.

== Installation ==

Just upload the plugin to wp-content/plugins/, activate it and you don't need to worry anymore about anyone trying to access your private information.

== Frequently Asked Questions ==

= Why should I use this plugin? =
It's useful to use it if your Revolution Slider is in a template and you can't update it at the moment (eg. if the template has been modified).

== Changelog ==

= 2.4.2 =
* The plugin now patches an old persistent XSS vulnerability (for versions older than 4.2)

= 2.3.2 =
* Removed http_response_code because not all hosts have this function
* Changed the algorithm for cleaning the post variables in Arbitrary File Upload section (thanks @darookee)

= 2.3.1 =
* Repaired the bug that broke some RevSlider functions

= 2.3 =
* Fixed a bug that broke some Wordpress functions

= 2.2 =
* Fixed a bug to display the Arbitrary File Upload in Black list

= 2.1 =
* Updated Soaksoak patch function.

= 2.0 =
* Rewrote the entire plugin, added more options and filters to keep your Wordpress safe

= 1.0 =
* First release

== Upgrade Notice ==

= 1.0 = 
* First release

== Screenshots ==

No screenshots available.
