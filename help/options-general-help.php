<h1>Welocally Places Core For Wordpress Guide</h1>
<a title="welocally places wordpress" href="http://wordpress.org/extend/plugins/welocally-places/">Welocally Places Plugin</a> for wordpress is intended to help site authors link real places to their content quickly, and then help their readers find those places quickly. This document is intended to help the blog owner or wordpress developer install, configure and use the plugin. It is structured by the administrative and user components associated with the plugin.

<strong>PLEASE NOTE:</strong> This is software, we need your help to make the product, the documentation, and the community better. Here are some helpful links so that you can get involved.
<ul>
	<li><a href="http://support.welocally.com/categories/welocally-places-wp-basic" target="_new">Get Support</a></li>
	<li><a href="http://www.welocally.com/wordpress/?page_id=104" target="_new">Welocally Places User Reference</a></li>
	<li><a href="http://welocally.com/?page_id=139" target="_new">Contact Us</a></li>
</ul>
<h2><a name="Requirements"></a>Requirements</h2>
<ul>
	<li>Wordpress 3.3.1 or Greater</li>
	<li>jQuery 1.6.1 or Greater (included in Wordpress)</li>
	<li>jQuery UI 1.8.16 or Greater (enqueued during load via Google CDN)</li>
</ul>
<h3>Authoring Browser Support</h3>
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/support_author.png"><img class="aligncenter size-full wp-image-1049" title="support_author" src="http://welocally.com/wp-content/uploads/2011/09/support_author.png" alt="" width="356" height="128" /></a></p>

<h3>End User Browser Support</h3>
These are the browsers we have tested for end user support, that is the people who come to your website and use welocally places. It will look different in different browsers but all of these browsers will see places and maps. Our most supported browsers are Chrome, Firefox and Safari.
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/tested_matrix.png"><img class="aligncenter size-full wp-image-1048" title="tested_matrix" src="http://welocally.com/wp-content/uploads/2011/09/tested_matrix.png" alt="" width="380" height="200" /></a></p>

<h2><a name="Installation"></a>Installation</h2>
<h3>Manual Plugin Installation</h3>
To install the Welocally Places plugin, the following are the general directions to follow. Remember: BACKUP - just in case.
<ol>
	<li>Read through the "readme" file thoroughly that accompanies a plugin.</li>
	<li>Upload the plugin to the <tt>wp-content/plugins</tt> folder in your WordPress directory online.</li>
	<li>Make any changes to templates or files as required by the Plugin instructions including adding Plugin template tags. (None known at this time)</li>
	<li>Activate the Plugin:
<ol>
	<li>Access the Plugin Panel in your <a title="Administration Panels" href="http://codex.wordpress.org/Administration_Panels">Administration Panels</a></li>
	<li>Scroll down through the list of Plugins to find the newly installed Welocally Places Plugin (if not visible, start from the beginning to check to see if you followed the instructions properly and uploaded the file correctly).</li>
	<li>Click on the<strong>Activate</strong>link to turn the Plugin<strong>on</strong>.</li>
</ol>
</li>
</ol>
<h2><a name="User_Components"></a>User Components</h2>
<h3>Basics</h3>
Throughoutthe plugin there are basic components that are used in multiple places, for example the Map Info Box, is used in the same way in the Map Widget, The Category Map and in the Single Post info pages.
<h4>The Place Tag</h4>
The place tag is the foundation of welocally places and it is what allows the plugin to actually lookup and link the place to the post or page that you are authoring. Welocally places tags each have a unique ID that allows it to look up the information about that place and make a map. This tag looks something like this:
<p style="text-align: center;"><img class="aligncenter size-full wp-image-843" style="margin-top: 5px;" title="tag01" src="http://welocally.com/wp-content/uploads/2012/02/tag01.png" alt="" width="600" height="31" /></p>

<h4>Places Map Widget</h4>
<p>The Places Map Widget is a custom widget that is installed with the plugin. Every time you add a place to a post the Places Map widget will show it, as well as all the other places you have posted, on a single map. It can be used in any theme sidebar on the site. It will attempt to show related places to the category page or post that your user has navigated to, that is it automatically filters places on the map based on context.</p>

<p>It acts identically like the Category Tag Map by making a map with selectable markers and a list which can also be selected. When a user selects either a marker or a list item an infobox will pop up at the location of the selected item on the map.</p>

<span style="font-size: 15px; font-weight: bold; clear: both;">Category Map Tag</span>

<a href="http://welocally.com/wp-content/uploads/2011/07/Screen-Shot-2012-04-09-at-4.06.56-PM.png"><img class="alignleft size-full wp-image-1029" style="margin-top: 10px;" title="Screen Shot 2012-04-09 at 4.06.56 PM" src="http://welocally.com/wp-content/uploads/2011/07/Screen-Shot-2012-04-09-at-4.06.56-PM.png" alt="" width="207" height="354" /></a>
The category map allows your users to filter the posts associated with specific categories on a single map, just like the Map Widget. This is helpful if you want to segment different places by type and show them to your readers on a page. making a directory? Just insert the tag "Shopping" or "Bars &amp; Pubs" on a page and you have a simple map for a shopping guide of all the places you have written about.
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2012/04/Screen-Shot-2012-04-09-at-5.37.34-PM.png"><img class="aligncenter size-full wp-image-1064" title="Screen Shot 2012-04-09 at 5.37.34 PM" src="http://welocally.com/wp-content/uploads/2012/04/Screen-Shot-2012-04-09-at-5.37.34-PM.png" alt="" width="354" height="24" /></a></p>
For example; if you had a pizza blog you might assign The Ugly Duck Pizza with the "Thin Cust" and "Rustic Wood Oven" categories. When your reader was looking for the pizzas of the New York Style only the pizza restaurants that had thin crust pizzas would show as ordered markers, and it would link the places back to the posts where you wrote about them. When a user selects a specific post excerpt, an info box identifying that place on the map will appear.
<h3 style="clear: both; margin-top: 10px;">Associating A Place to A Post</h3>
All place to post associations (aka "linking") are done by either looking or generating place tags. To use an existing place the place search wizard is used which is a simple step based process that easily guides you through keyword search and geocoding. If a place does not exist you can easily add it.
<h3>Adding New Places - Add Place Meta Box</h3>
While there are are very many places in our database it is possible that a very cool place you want to use is not there. In that case please add it to the database. When you do try to use the real name of the place and the full address, if your not sure use the name most people call it. Pressing the <strong>tab key</strong> will take you to the next field.
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-04-10-at-12.55.12-PM.png"><img class="aligncenter size-full wp-image-1087" title="Screen Shot 2012-04-10 at 12.55.12 PM" src="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-04-10-at-12.55.12-PM.png" alt="" width="502" height="78" /></a></p>
<p style="text-align: left;">Now you will want to enter the real address for the place you want to add. Its important to give as full an adress as you can because driving directions and the location is determined by this. If you dont give enough information you will see a message like this:</p>
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-04-10-at-12.56.07-PM.png"><img class="aligncenter size-full wp-image-1088" title="Screen Shot 2012-04-10 at 12.56.07 PM" src="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-04-10-at-12.56.07-PM.png" alt="" width="489" height="127" /></a></p>
<p style="text-align: left;">Once you have entered enough information the location of the new place will be geocoded for you, and you will be prompted to enter the optional fields for the place, Phone number and Website. <em><strong>While we dont require these fields we strongly recommend that you add them.</strong></em> If you can find them, it grows your site's reputation as a local referrer to have as much rich information about the places you are writing about as possible.</p>
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-05-12-at-11.52.06-AM.png"><img class="aligncenter size-full wp-image-1262" title="Screen Shot 2012-05-12 at 11.52.06 AM" src="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-05-12-at-11.52.06-AM.png" alt="" width="440" height="333" /></a></p>
<p style="text-align: left;">Now you are ready to add the place, just press the "Add Place" button and it will be added to our database and will become searchable. You can then select the new tag for the place you created then copy and paste it into your post.</p>
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-05-12-at-11.52.38-AM.png"><img class="aligncenter size-full wp-image-1263" title="Screen Shot 2012-05-12 at 11.52.38 AM" src="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-05-12-at-11.52.38-AM.png" alt="" width="482" height="43" /></a></p>

<h2>Administration</h2>
Options allow you to control the plugin, and we have created a custom option. We have a custom sidebar options tab, so in setting up welocally places just select the side tab item.
<p style="text-align: center;"><a href="http://www.welocally.com/wordpress/wp-content/uploads/2011/09/options_01.png"><img class="aligncenter size-medium wp-image-316" style="border-style: initial; border-color: initial; border-width: 0px;" title="options_01" src="http://www.welocally.com/wordpress/wp-content/uploads/2011/09/options_01-211x300.png" alt="" width="211" height="300" /></a></p>

<h3>Options Overview</h3>
<ul>
	<li><strong>Welocally Places General Options</strong> - (This page) Basic configuration for the mapbehaviorsof the plugin.</li>
	<li><strong><a href="admin.php?page=welocally-places-about">About</a></strong> - Requirements status and the api server that is being used. Better not to play with this one unless we tell you to.</li>
	<li><strong><a href="admin.php?page=welocally-places-manager">Places Manager</a></strong> - A simple places manager that lets you see all your post places in on UI, you can also delete place posts if you want to.</li>
</ul>
<h3><strong>Welocally Places General Options</strong></h3>
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-05-12-at-11.33.10-AM.png"><img class="aligncenter size-full wp-image-1259" title="Screen Shot 2012-05-12 at 11.33.10 AM" src="http://welocally.com/wp-content/uploads/2011/09/Screen-Shot-2012-05-12-at-11.33.10-AM.png" alt="" width="602" height="255" /></a></p>

<h4 style="text-align: left;">General Map Options, Infobox Place Links</h4>
<p style="text-align: left;">This option, if checked, will make the title of the place in the map infobox, or in the list selector a link back to the post in which it was placed.</p>

<h4 style="text-align: left;"><a href="http://welocally.com/wp-content/uploads/2011/09/link_options.png"><img class="aligncenter size-full wp-image-1101" title="link_options" src="http://welocally.com/wp-content/uploads/2011/09/link_options.png" alt="" width="538" height="314" /></a></h4>
<h4 style="text-align: left;">Show Indexed Markers</h4>
When checked, this option will show up to 25 place markers on the map with letters indexed based on their order of results, and indexed markers for the select list. When not checked all the marker items on the map will have the same marker and the list will only have text.
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/indexed_options.png"><img class="aligncenter size-full wp-image-1102" title="indexed_options" src="http://welocally.com/wp-content/uploads/2011/09/indexed_options.png" alt="" width="363" height="480" /></a></p>

<h4>Show Section Item Markers</h4>
The selection item list is the list of selectable boxes below a category tag map or
map widget map. It lists the places related to the markers shown related to the map.
<p style="text-align: center;"><a href="http://welocally.com/wp-content/uploads/2011/09/items_options.png"><img class="aligncenter size-full wp-image-1104" title="items_options" src="http://welocally.com/wp-content/uploads/2011/09/items_options.png" alt="" width="373" height="499" /></a></p>

<h1><a name="Errors_Messages"></a>Errors and Info Messages</h1>
Most AJAX errors are related to communication between javascript and your wordpress database since we
do not communicate with any other servers. If you experience an error and would like us to investigate it please <a href="http://welocally.com/?page_id=139">contact us</a>.
