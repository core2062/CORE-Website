=== Simple Google Analytics ===
Author: JeromeMeyer62
Contributors: JeromeMeyer62
Tags: google analytics, wordpress statistics, tracking
Plugin link: http://www.arobase62.fr/2011/03/23/simple-google-analytics/
Requires at least: 2.6
Tested up to: 3.3
Version: 2.0.5
Stable tag: 2.0.5

== Description ==
Simple Google Analytics allows you to easilly add your Google Analytics code on all your pages.
Just add your ID, choose if you are on a sub-domain (setting in Google Analytics code), and enter the domain.
That's all, you're ready to go.

You can also choose where to put the code (Header or Footer), and add the SiteSpeed option from Google Analytics.

Simple Google Analytics will not track admin users logged-in.

This plugin is largely inspired by the Google Analytics Input plugin from Roy Duff ( http://wpable.com ).

If you have any question, you can find the plugin page here : http://www.arobase62.fr/2011/03/23/simple-google-analytics/

== Installation ==
This plugin follows the [standard WordPress installation method][]:

1. Upload the 'simple-google-analytics.zip' file to the `/wp-content/plugins/` directory using wget, curl of ftp.
2. 'unzip' the 'simple-google-analyticsz.zip' which will create the folder to the directory `/wp-content/plugins/simple_google_analytics`
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Configure the plugin through 'Simple Google Analytics' submenu in the the 'Settings' section of the Wordpress admin menu
5. Add your google analytics ID there. An example of Google Analytics ID --> UA-0000000-0.
6. Choose if your blog is on a sub-domain or not. This option is defined in your Google Analytics settings page. Do not change if you don't know.
7. Enter the domain where your Wordpress is.
8. Save it & your done.

[standard WordPress installation method]: http://codex.wordpress.org/Managing_Plugins#Installing_Plugins

== Frequently Asked Questions ==
= Where can I find the google analytics ID? =
Login to google analytics, go to the website profile which you want, edit and go to check status and there you see your google analytics code. You just want to copy your google analytics ID which will look like this UA-0000000-0 (but will be your own unique id.)

= Does it track logged in users? =
Yes, except for admin users. Option to choose who is being tracked will be added in the next version of the plugin.

= What versions does it work on? =
It should work from 2.6 upwards.. Has been tested on all current versions and is working.

== Screenshots ==
1. Screenshot Simple Google Analytics Admin Page

== Changelog ==
= version 2.0.5 =
* Add parameter to choose if you want the code to be added for connected users. Thanks to Luke for providing the code.
= version 2.0.4 =
* Corrected a bug where the JS file was loading before jQuery. Thanks to MrZebra for finding that.
= version 2.0.3 =
* Corrected a bug that made all settings link on extension page going to Simple Google Analytics settings page.
= version 2.0.2 =
* Google Code has returned to the original. The optimized code have issues with some users having no stats. All should be fine now.
= version 2.0 =
* Code has been fully rewritten.
* Google Analytics code has been rewritten to load faster.
= version 1.1.6 =
* Code is not showing only when logged as Admin.
* Add option to select where you want to place the code (Header or Footer)
= version 1.1.5 =
* Add settings in the extensions page (Thanks to Vladimir Pavlikov)
* Add Russian Translation (Thanks to Vladimir Pavlikov)
= version 1.1.4 =
* Version 1.1.3 doesn't shows in the repository...
= version 1.1.3 =
* Added a translation for 'Simple Google Analytics Settings'
= version 1.1.2 =
* French Translation Bug
= version 1.1.1 =
* Fixed annoying bug
= version 1.1.0 =
* Added new Site Speed setting from Google
= version 1.0.4 =
* Corriged a bug if you use the Papercite plugin
= version 1.0.3 =
* Clean Readme file and clean code
= version 1.0.2 =
* Added French Translation
= version 1.0 =
* Add multi-subdomain option