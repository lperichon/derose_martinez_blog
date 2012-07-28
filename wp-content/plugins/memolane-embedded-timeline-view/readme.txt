=== Memolane Embed ===
 Contributors: memolane 
Donate link: http://memolane.com/
 Tags: Memolane, media embedding, timeline view 
Requires at least: 2.0.2
 Tested up to: 3.4 
Stable tag: 3.4

== Description ==

This WordPress plugin adds a simple shortcode to embed the awesome Memolane media timeline view in your blog posts and pages.
When adding a post with a Memolane embed, first add and configure your lane via the Memolane plugin administrator menu.

== Installation ==

1. Plugins >> Add New >> Upload the .zip file OR Unzip ‘memolane.zip’ and place the resulting folder, or just the contained ‘memolane.php’ file, in the ‘/wp-content/plugins/’ directory 
2. Activate the plugin through the 'Plugins' menu in WordPress (in the left bar) 
3. Start using the shortcode! 

== How To Use ==

[youtube http://www.youtube.com/watch?v=66aQDG4P-Y8]

Find "Plug-ins" on the left hand toolbar and click "add new". Here you can search for the Memolane plug-in by typing in "Memolane".

To begin the install process click "install" in the upper right hand corner. You can also install the plug-in by uploading the zip file on this panel or unzipping the contents into the appropriate plug-ins folder. Once the plug-in has been successfully installed, click "activate plug-in" located under the Memolane plug-in in the main plug-in page.

The Memolane plug-in should now be visible on the left side of the toolbar. Click on "Memolane" and then click on "add new".You will be presented with a screen that asks for your lane details and modification options. We suggest that before completing this process you should log into your Memolane account and review the lane you wish to embed. Review the selected filters to make sure that it contains all your desired content. You can always go back and edit these settings once you have embedded the lane.

Return to the Memolane plug-in page. After you are content with the lane content and filters, fill out the desired lane specifics: username and lane title.Next set your size parameters for the embedded lane. Give your lane enough space to show off your wonderful content! A lane that is 200 px by 200px will look cramped and too small. Choose the color you want for the background and border. You can set both to transparent if you want it to easily blend in with your website.

The following parameters are available (these are just sample values--replace with yours):

<strong> Username</strong> - the memolane user name associated with this lane (ex: Eric) can be found on the lane url, this is how you would decipher the URL: memolane.com/username/lane-title

<strong>Title</strong> - the case insensitive title of the lane to be embedded (ex: Memolane Journey). If left blank memolane.com/username is loaded as the embedded lane

<strong> Width</strong> - the width, in px (pixels) or % (percentage) to display for the embedded lane. Default is 500px. If you're having trouble start with 100% and work from there.

<strong> Height</strong> - Same as width, but with respect to height.

<strong> Background Color</strong> - the background color of the iframe of the embedded lane. Use hex codes or 'transparent' for this. Hex codes can be found here: http://www.december.com/html/spec/colorhex.html

<strong> Border</strong> - The border of the iframe of the embedded lane. Use a css value or default. (ex: 1px solid white)
Click "save" to capture all of your parameters. Copy the short code that will appear at the bottom of the parameter page.

Paste the short code into the HTML section of your WordPress blog.

Share with friends!

== Changelog ==

= 1.2 =
* Updated help page
= 1.1 =
 * Bug fix for reading title's of lanes
= 1.0 =
 * Added in admin menu to configure the lane via a ui. Now shortcode only uses id of lane created/configured in wordpress admin.
= 0.02 = 
* Validate parameters
= 0.01 =
 * Initial version
