=== BP + NEXTGEN Gallery integrate ===
Contributors: scaylos
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YG8MZNE45J88N
Tags: ngg, nggallery, buddypress
Requires at least: 3.3.1
Tested up to: 3.3.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This is a plugin to integrate NEXTGEN Gallery with Buddypress profiles.

== Description ==

This plugin adds a "My Gallery" link to each user's profile. When selected, the link will display all galleries where the displayed user is the author.

I am currently developing this plugin for my own use so, any feature requests will probably not be acted upon in a timely manner. If you are a PHP ninja and see ways that my code's efficiency can be increased, please let me know. Here is the current development roadmap (other features may come in between 1.x releases):
*1.1*
    * automatically add the nggallery.css to `<head>`
    * add option to list non-NEXTGEN items where the displayed user is author
*1.2*
    *GUI
*1.3*
    *Automatically create gallery at user registration
    
**Note:** Permissions are far beyond the scope of this plugin (and the PHP skills of its creator). If you want to control permissions for galleries you will need something else such as Role Scoper.

I hope this plugin helps.

== Installation ==

1. Upload `bp-NEXTGEN-Gallery-integrate.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Ensure that nextgen-gallery/css/nggallery.css is included in the `<head>` section of you BP pages. For some reason, Buddypress doesn't seem to want to play nice with NEXTGEN, so this seems to not show up automatically. There are two methods that I can think of:
        * add `"<link rel="stylesheet" href="http://www.yourdomain.com/wp-content/plugins/nextgen-gallery/css/nggallery.css" type="text/css" media="screen" />"` to your BP template's head section.
        OR
        * use the plugin [Add-to-head](http://wordpress.org/extend/plugins/add-to-head/ "Super useful!") to add it to the `<head>` section of every page.
    I will address this issue in future releases.
== Frequently Asked Questions ==

= Are you taking feature requests? =

Sure. I will consider requests for nifty features but any that I add will not be until after the 1.2 release.

= How about a GUI? =

This is the plan for the 1.2 release.

= How do you write a FAQ when you haven't received any questions? =
        
Make stuff up.

= On that note, `something witty and imaginative here` =

Well, you see the thing that most people don't understand about cloned triceratops is that they have very poor instincts for herbivores when it comes to what to eat.

== Changelog ==

= 1.0 =
* Initial commit
