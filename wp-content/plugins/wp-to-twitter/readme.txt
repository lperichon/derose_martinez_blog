=== Plugin Name ===
Contributors: joedolson
Donate link: http://www.joedolson.com/donate.php
Tags: twitter, microblogging, su.pr, bitly, yourls, redirect, shortener, post, links
Requires at least: 2.9.2 (partial)
Tested up to: 3.2.1
Stable tag: trunk

Posts a Twitter update when you update your WordPress blog or post to your blogroll, using your chosen URL shortening service. Requires PHP 5 and cURL. 

== Description ==

WP to Twitter posts a Twitter status update from your WordPress blog using your URL shortening service to provide a link back to your post from Twitter. 

[Make a Pledge at Fundry](https://fundry.com/project/10-wp-to-twitter).

The plugin supports a default message template for updating or editing posts and pages, supports your custom post types, and also allows you to write a custom Tweet for each post which says whatever you want, using a selection of custom shortcodes to generate your text. 

Additional features include: 

* Use tags as Twitter hashtags
* Use alternate URLs in place of post permalinks
* Support for Google Analytics

Any status update you write which is longer than the available space will automatically be truncated by the plugin. This applies to both the default messages and to your custom messages.

Credits:

Contributions by [Thor Erik](http://www.thorerik.net), Bill Berry and [Andrea Baccega](http://www.andreabaccega.com).  Some code previously contributed is no longer in this plug-in. Other bug fixes and related citations can be found in the changelog.

Translations:

* Italian: [Gianni Diurno](http://www.gidibao.net) [2.3.4]
* Ukrainian: [Alyona Lompar](http://www.webhostinggeeks.com) [2.3.3]
* Spanish: [David Gil P&eacute;rez](http://www.sohelet.com)
* Russian: [Burkov Boris](http://chernobog.ru)
* French: [Fr&eacute;d&eacute;ric Million](http://www.traducteurs.com)
* Estonian: [Raivo Ratsep](http://raivoratsep.com)
* Simplified Chinese: [Joe Francis](http://blog.francistm.com)
* Dutch: [Rene at WPwebshop](http://wpwebshop.com/premium-wordpress-plugins/)
* Romanian: [Jibo](http://jibo.ro)
* Danish: [Rasmus Himmelstrup](http://seoanalyst.dk)
* Brazilian Portugese: [Matheus Bratfisch](http://www.matbra.com)
* Japanese: [kndb](http://blog.layer8.sh/)

New translations are always welcome! The translation file is in the download.

== Changelog ==

= 2.3.8 =

* Bug fix: Warning message about 2.9.2 limited support no longer displays on public site.

= 2.3.7 =

* Double tweeting problem fixed.
* Missing custom tweets fixed.
* Revised WordPress version support notes.
* I hope.

= 2.3.6 =

* Error in runtime created function fixed.

= 2.3.5 =

* Bug fix to custom shortcode support to allow use of multiple custom shortcodes simultaneously
* Bug fix to (hopefully) solve duplicate posting when tags are included on scheduled posts.
* Added comparison of your server time to Twitter's server time for information when installing.
* Updated Italian translation.

= 2.3.4 =

* Re-wrote instructions for connecting to OAuth to reflect redesigned Twitter Apps registration process
* Code clean-up to remove some redundancies
* Bug fixes: 
	- Occasional double tweeting on future post seems to be fixed.
	- Tweeting on edits/quick edits when not checked
* Added Ukrainian translation

= 2.3.3 =

* Improved support for non-standard publishing mechanisms. 
* Fixed 'Tweet this' option. 
* Quickpress setting made obsolete
* Now uses wp_get_shortlink() when available for generating WP-based shortlink.

= 2.3.2 =

* Fixed XMLRPC support
* Updated Italian translation

= 2.3.1 =

* Added version check and update cycle into tweet routine

= 2.3.0 =

* Added support for custom post types.
* Added support for tweeting when comments are posted.
* Bug fix: results of checking/unchecking 'Don't tweet this' box not consistent.
* Added Japanese translation. [kndb](http://blog.layer8.sh/)

= 2.2.12 =

* Bug fix release. Sorry.
* Added translation to Brazilian Portugese [Matheus Bratfisch](http://www.matbra.com)

= 2.2.11 = 

* Missing break statement caused remote YOURLS URLs to be replaced with Su.pr URLs

= 2.2.10 =

* Bug in user settings retrieval; don't know how long it's been a problem.
* Added updated Italian translation

= 2.2.9 =

* Blocked posting on custom post types
* Added time check, for servers with incorrect time.
* Added cURL check.
* Due to ongoing problems with Cli.gs, removed that URL shortening service and replaced with Su.pr
* Changed default shortening to 'no shortening'
* Saves every tweet into post meta on save; adds link to re-post status update in WP to Twitter post box.
* Revised error messages to increase detail.

= 2.2.8 =

* Enhancement: protect against duplicate tweets
* Bug fix: hash tag replacement with spaces problematic if alphanumeric limit also set
* Bug fix: issue with scheduled posts posting when 'Do not Tweet' checked.
* Added Danish translation by Rasmus Himmelstrup
* Updates to compensate for changes in YOURLS 1.5

= 2.2.7 =

* Enhancement: strips shortcodes before sending post excerpts to Tweet
* Enhancement: Added PHP version check and warning.
* Added a default case to check on HTTP response code from Twitter.
* Added a specific error message for out of sync server times.
* Added link to [WP to Twitter's Fundry.com page](https://fundry.com/project/10-wp-to-twitter).
* Bug fix: hash tag space removal fixed
* Enhancement: Respects wp content directory constants if set.

= 2.2.6 =

* Modification: renamed OAuth files to maybe avoid collision with alternate OAuth versions which do not include needed methods
* Eliminated postbox toggles
* Clean out deprecated functions
* Updated admin styles and separated into a separate file. 
* Bug fix: Edited pages did not Tweet
* Bug fix: May have reduced occurrences of URL not being sent in status update. Maybe.
* Bug fix: Forced lowercase on Bit.ly API username (Thanks, Bit.ly for NOT DOCUMENTING this.)
* Added option to strip non-alphanumeric characters from hash tags
* Added control to adjust which levels of users will see custom Profile settings
* Found myself becoming unnecessarily sarcastic in Changelog notes. Will fix in next version. :)

= 2.2.5 =

* Bug fix: shouldn't see error 'Could not redeclare OAuth..' again. 
* Bug fix: shouldn't see 'Fatal error: Class 'OAuthSignatureMethod...' again.
* Bug fix: updated API endpoints

= 2.2.4 =

* Blocked global error messages from being seen by non-admin level users.
* Added #account# shortcode to supply Twitter username @ reference in Tweet templates.
* Updated debugging output
* Deletes obsolete options from database

= 2.2.3 =

* Fixed: Bug which added unnecessary duplications of post meta
* Fixed: broken analytics campaign info
* Fix attempt to clear up problems with urlencoding of links
* Fix attempt to clear up problems with some 403 errors and status update truncation

= 2.2.2 = 

* Fixed a bug where new Pages did not Tweet.
* Minor text changes to try and clarify OAuth process.
* Fixed bug where any post with a customized status update would post, regardless of settings.
* Fixed faulty shortening when new links were added.

= 2.2.1 =

* Not a Beta anymore. 
* Fixed issue with non-shortening links when using XMLRPC clients
* Fixed issue with double-urlencoding of links before shortening
* Added Dutch translation
* Updated Italian translation


= 2.2.0 (beta 7) =

* Significantly improved error reporting.
* Completely revamped secondary author support to give some value in Twitter.
* Completely eliminated secondary posting service support. Too much trouble, too little application.
* Removed the custom post meta data clutter; WP to Twitter's post meta data is now private to the plugin.
* Fixed a couple of error situations with Bit.ly
* Made it possible for contributor posts to be Tweeted
* This is the last beta version.

= 2.2.0 (beta 6) =

* Fixed bug where errors were reported on categories not intended to be sent to Twitter
* Allowed OAuth notice to be disabled for users not intending to use that service.
* Added a debugging option to output some process data if OAuth connection fails
* Fixed bug which prevented posting of edited status updates

= 2.2.0 (beta 5) =

* Eliminated an incompatibility with alternate versions of twitterOAuth class
* Significant revisions of error message processes and details
* Fixed some URL shortener problems
* Added simplified Chinese translation

= 2.2.0 (beta 4) =

* Fixed long-standing issue with serialization of option arrays
* Fixed trimming of white space from authentication keys
* Clarification of some texts to help explain some of the changes
* Clarification of some texts to help explain how to connect to Twitter with OAuth
* Added credit for Estonian translation by Raivo Ratsep.

= 2.2.0 (beta 3) =

* Fixed issue with failing to post to Twitter. 

= 2.2.0 (beta 2) =

* Fixed false positive error message on Twitter check routine failure
* Adjusted twitteroauth file to hopefully avoid certain errors

= 2.2.0 (beta) = 

* Added OAuth support
* Fixed problem with default Tweet status not defaulting to 'no.'
* Revised a few other minor issues
* No longer supporting WordPress versions below 2.9.2
* Eliminated features: Author's Twitter account posting; Use of additional service to post to Twitter on a second account. These features are not possible with simple OAuth authentication; they require XAuth. This makes the features of extremely limited value, since you, as the user, would be required to apply for XAuth permissions on your own installation. I regret the necessity to remove these features. Both options will still function with Twitter-compatible API services using Basic authentication.

= 2.1.3 =

* Fixed copy typo.

= 2.1.2 =

* Last update before oAuth integration, I hope.
* Fixed problems with Postie compatibility
* Fixed bug where local YOURLS path could not be unset
* Fixed some issues with upgrades which re-wrote status update templates, occasionally removing the #url# shortcode.
* Despite numerous reports of issues API behavior with Bit.ly or Twitter, I was unable, in testing, to reproduce any issues, including on servers which I know have had failed requests in the past. 
* Revised upgrade routines to avoid future problems. 

= 2.1.1 = 

* Added a control to disable error messages. 
* Separated URL shortener errors from Twitter API errors.
* Added stored value with the error message from Bit.ly to try and identify source of errors.

= 2.1.0 =

* Now compatible through WP 3.0 series
* Fixed bug related to failed responses from URL shortener API requests.
* Added #author# shortcode for status update templates.
* Fixed a problem with non-posting of scheduled posts when default status updates are disabled.

= 2.0.4 = 

* Fixed bug where status updates were not posted when a post changed from pending to published. (Thanks to Justin Heideman for the catch and fix.)
* Fixed bug where passwords with special characters were not used correctly
* Eliminated use of LongURL API due to closure of the service. Hope to replace this functionality at some point, so I've left the framework intact, just removed the API call.
* Improved error reporting in support check routines.

= 2.0.3 = 

* Updated for Bit.ly API v3 (should fix recent issues with incorrect reporting from Bit.ly API and API request failures.)

= 2.0.2 =

* Bug fixed where appended text was placed before hash tags.
* Added method for error messages to be automatically cleared following a successful status update. It seems a lot of people couldn't find the button to clear errors, and thought they were getting an error every time.
* Moved short URL selection option to a more prominent location.

= 2.0.1 = 

* Bug found with YOURLS short url creation when using multiple sites with one YOURLS installation and short URLS are created using post ID. Added option to disable post_ID as shortURL generating key in YOURLS account settings.
* Missing semicolon replaced in uninstall.php

= 2.0.0 = 

* Fixed bug introduced in WordPress 2.9 where logged in users could only edit their own profiles and associated issues.
* Fixed bug which caused #url# to repeatedly be added to the end of tweet texts on reactivation or upgrade.
* Fixed bug which generated shortener API error messages when no URL shortener was used.
* Fixed bug which prevented display of URL on edit screen if no URL shortener was used.
* Added Spanish translation courtesy of [David Gil P&eacute;rez](http://www.sohelet.com)
* Made so many language changes that aforementioned translation is now terribly out of date, as are all others...
* Added ability to restrict posting to certain categories.
* Added option to dynamically generate Google Analytics campaign identifier by category, post title, author, or post id.
* Added option to configure plugin to use other services using the Twitter-compatible API.
* Added support for YOURLS installations as your URL shortener. (Either local or remote.)
* Redesigned administrative interface.
* Removed use of Snoopy and alternate HTTP request methods.
* Discontinued support for WordPress versions below version 2.7.
* Major revisions to support checks.
* Version jumped to 2.0.0

= 1.5.7 = 

* Quick bug fix contributed by DougV from WordPress Forums.

= 1.5.6 = 

* WP 2.9 added support for JSON on PHP versions below 5.2; changes made to do WP version checking before adding JSON support.
* Stripslashes added to viewable data fields.
* Added option for spaces to be removed in hashtags.
* A few post meta updates.
* Barring major disasters, this will be the last release in the 1.x series. Expect version 2 sometime in late January.

= 1.5.5 =

* Fixed issue with stray hashtags appearing when Tweeting edited posts was disabled and adding hashtags was enabled.
* Added shortcode (#date#) for post date. Uses your WordPress date settings to format date, but allows you to customize for WP to Twitter.

= 1.5.4 = 

* Fixed issue with spaces in hashtags. 
* Added configurable replacement character in hashtags.

= 1.5.3 = 

* Revised the function which checks whether your Tweet is under the 140 character limit imposed by Twitter. This function had a number of awkward bugs which have now (hopefully) been eradicated.
* Revised the tags->hashtags generation for better reliability. Fixes bugs with failing to send hashtags to Twitter if they haven't been saved and allowing hashtags on scheduled posts.
* Option to use WP default URL as a short URL. (http://yourdomain.com/yourblog/?p=id).

= 1.5.2 = 

* Minor code cleanup
* Fixed uncommon bug where draft posts would not tweet when published.
* Fixed bug where #title# shortcode wouldn't work due to prior URL encoding. (Also covers some other obscure bugs.) Thanks to [Daniel Chcouri](http://www.anarchy.co.il) for the great catch.
* Added new shortcode (#category#) to fetch the first post category.
* Provided a substitute function for hosts not supportin mb_substr().
* Fixed a bug where a hashtag would be posted on edits when posting updates was not enabled for edits.
* Put Cli.gs change revisions on hold barring updates from Pierre at Cli.gs

= 1.5.1 =

* Because that's what I get for making last minute changes.

= 1.5.0 =

* Due to a large number of problems in the 1.4.x series, I'm launching a significant revision to the base code earlier than initially planned. This is because many of these features were already in development, and it's simply too much work to maintain both branches of the code.
* Added option to export settings in plain text for troubleshooting.
* Simplified some aspects of the settings page.
* Added custom text options for WordPress Pages to match support for Posts.
* Improved tags as hashtags handling.
* Added the ability to use custom shortcodes to access information in custom fields.
* Improved some error messages to clarify certain issues.

= 1.4.11 =

* Fixed a bug which allowed editing of posts to be tweeted if status updates on editing Pages were permitted.
* Fixed a bug in the support check routine which caused all Cli.gs tests to fail.
* Streamlined logic controlling whether a new or edited item should be tweeted.
* Added Italian translation. Thanks to [Gianni Diurno](http://www.gidibao.net)!

= 1.4.10 =

* Was never supposed to exist, except that I *forgot* to include a backup function.

= 1.4.9 =

* Added German translation. Thanks to [Melvin](http://www.toxicavenger.de/)!
* Fixed a bug relating to missing support for a function or two.
* Fixed a bug relating to extraneous # symbols in tags

= 1.4.8 =

* Adds a function to provide PHP5s str_split functionality for PHP4 installations.

= 1.4.7 = 

* Actually resolves the bug which 1.4.6 was supposed to fix.

= 1.4.6 =

* Hopefully resolved bug with empty value for new field in 1.4.5. It's late, so I won't know until tomorrow...

= 1.4.5 =

* Resolved bug with extraneous hash sign when no tags are attached.
* Resolved bug where #url# would appear when included in posting string but with 'link to blog' disabled.
* Added expansion of short URL via longURL.org stored in post meta data.
* Resolved additional uncommon bug with PHP 4.
* Added option to incorporate optional post excerpt.
* Better handling of multibyte character sets. 

= 1.4.4 =

* Resolved two bugs with hashtag support: spaces in multi-word tags and the posting of hashtag-only status updates when posting shouldn't happen.

= 1.4.3 = 

* Resolved plugin conflict with pre-existing function name.

= 1.4.2 =

* No changes, just adding a missing file from previous commit.

= 1.4.1 =

* Revised to not require functions from PHP 5.2
* Fixed bug in hashtag conversion

= 1.4.0 =

* Added support for the Bit.ly URL shortening service.
* Added option to not use URL shortening.
* Added option to add tags to end of status update as hashtag references.
* Fixed a bug where the #url# shortcode failed when editing posts.
* Reduced some redundant code.
* Converted version notes to new Changelog format.

= 1.3.7 = 

* Revised interface to take advantage of features added in versions 2.5 and 2.7. You can now drag and drop the WP to Twitter configuration panel in Post and Page authoring pages.
* Fixed bug where post titles were not Tweeted when using the "Press This" bookmarklet
* Security bug fix.

= 1.3.6 =

*Bug fix release.

= 1.3.5 =

* Bug fix: when "Send link to Twitter" is disabled, Twitter status and shortcodes were not parsed correctly.

= 1.3.4 = 

* Bug fix: html tags in titles are stripped from tweets
* Bug fix: thanks to [Andrea Baccega](http://www.andreabaccega.com), some problems related to WP 2.7.1 should be fixed. 
* Added optional prepend/append text fields.

= 1.3.3 =

* Added support for shortcodes in custom Tweet fields.
* Bug fix when #url# is the first element in a Tweet string.
* Minor interface changes.

= 1.3.2 =

* Added a #url# shortcode so you can decide where your short URL will appear in the tweet.
* Couple small bug fixes.
* Small changes to the settings page.

= 1.3.1 = 

* Modification for multiple authors with independent Twitter accounts -- there are now three options:
 
	1. Tweet to your own account, instead of the blog account. 
	1. Tweet to your account with an @ reference to the main blog account. 
	1. Tweet to the main blog account with an @ reference to your own account.  
	
* Added an option to enable or disable Tweeting of Pages when edited. 
* **Fixed scheduled posting and posting from QuickPress, so both of these options will now be Tweeted.**

= 1.3.0 = 

*Support for multiple authors with independent Twitter &amp; Cligs accounts. 
*Other minor textual revisions, addition of API availability check in the Settings panel. 
*Bugfixes: If editing a post by XMLRPC, you could not disable tweeting your edits. FIXED. 

= 1.2.8 =

*Bug fix to 1.2.7.

= 1.2.7 =

*Uses the Snoopy class to retrieve information from Cligs and to post Twitter updates. Hopefully this will solve a variety of issues.
*Added an option to track traffic from your Tweeted Posts using Google Analytics (Thanks to [Joost](http://yoast.com/twitter-analytics/))

= 1.2.6 =

*Bugfix with XMLRPC publishing -- controls to disable XMLRPC publishing now work correctly.
*Bugfix with error reporting and clearing.
*Added the option to supply an alternate URL along with your post, to be tweeted in place of the WP permalink.

= 1.2.5 =
 
*Support for publishing via XMLRPC 
*Corrected a couple minor bugs 
*Added internationalization support
 
= 1.2.0 =
 
*option to post your new blogroll links to Twitter, using the description field as your status update text.
*option to decide on a post level whether or not that blog post should be posted to Twitter
*option to set a global default 'to Tweet or not to Tweet.'

= 1.1.0 =

*Update to use cURL as an option to fetch information from the Cli.gs API.

== Installation ==

1. Upload the `wp-to-twitter` folder to your `/wp-content/plugins/` directory
2. Activate the plugin using the `Plugins` menu in WordPress
3. Go to Settings > WP->Twitter
4. Adjust the WP->Twitter Options as you prefer them. 
5. Supply your Twitter username and login.
6. **Optional**: Configure your choice of URL shortener. Default is to use the Su.pr URL shortener from Stumbleupon as a short URL.
7. That's it!  You're all set.

== Frequently Asked Questions ==

= I can't connect to Twitter using OAuth. What's wrong? =

The most likely problems that I've found so far are either that you don't have cURL support or that your server time is incorrect. Check with your host to verify these possibilities. 

= Hey! Why did you remove Cli.gs support! =

First, I could no longer get it to work for me. If I can't run a single successful test with it, I can't just randomly trust it will work for somebody else. Second, the number of unsolvable support requests I received for Cli.gs was too great to justify keeping it in the plug-in. Still need it? You can download the [last version with Cli.gs support here](http://downloads.wordpress.org/plugin/wp-to-twitter.2.2.8.zip).

= Do I have to have a Twitter.com account to use this plugin? =

Yes, you need an account with Twitter to use this plugin.

= Do I have to have a URL shortener account to use this plugin? =

You don't need any URL shortener accounts to use this plugin. However, you may need an account with specific URL shorteners to use the plug-in to your best advantage.

= Twitter goes down a lot. What happens if it's not available? =

If Twitter isn't available, you'll get a message telling you that there's been an error with your Twitter status update. The Tweet you were going to send will be saved in your post meta fields, so you can grab it and post it manually if you wish.

= What if my URL shortener isn't available when I make my post? =

If your URL shortening service isn't available, your tweet will be sent using it's normal post permalink. You'll also get an error message letting you know that there was a problem contacting your URL shortener.

= What if my server doesn't support the methods you use to contact these other sites? =

Well, there isn't much I can do about that - but the plugin will check and see whether or not the needed methods work. If they don't, you will find a warning message on your settings page. 

= If I mark a blogroll link as private, will it be posted to Twitter? =

No. They're private. 

= Scheduled posting doesn't work. What's wrong? =

Only posts which you scheduled or edited *after* installing the plugin will be Tweeted. Any future posts written before installing the plugin will be ignored by WP to Twitter.

== Upgrade Notice ==

 - 2.3.8: Warning about 2.9.2 limited support no longer displays on public site.
 - 2.3.7: In WordPress version 2.9.2, scheduled posts will not work correctly. Other features should be fine.

== Screenshots ==

1. WP to Twitter main settings page.
2. WP to Twitter custom Tweet settings.
3. WP to Twitter user settings.