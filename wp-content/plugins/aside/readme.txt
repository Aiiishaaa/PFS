=== Aside Widget ===
Contributors:		Paul Reeve
Donate link:		https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=preeve%40pdjr%2eu
Tags:			conditional, aside, pull-quote, php, widget
Requires at least:	2.8
Tested up to:		3.2.1
Stable tag:		0.9

Display arbitrary sidebar content conditional upon a particular post or page.

== Description ==

Aside widget allows a page or post to insert arbitrary content into a
sidebar (or other dynamic widget area), supporting something similar to the
typographic notion of a 'pull-quote'.

Aside widget is triggered by the presence, in those pages which require it,
of one or more 'aside' custom fields with values that specify the content
of one or more widgets.  Shifting the locus of widget content control from
the widget to the page makes for more natural authoring of conditional
content which needs to be associated with just a small number of pages.

As well as text, an 'aside' custom field may contain HTML and/or PHP code.
Of course, any HTML should be crafted so as not to break the containing
page structure.  PHP parsing must be explicitly enabled in the widget
administration panel and any PHP in the 'aside' field value must be enclosed
in the usual tags for it to be recognised.

A little bit of short-form magic can be triggered by formatting the aside
field value in the following way.

    {#|!|!!}id[,prefix,suffix]

A value of the form #id (e.g. '#232') causes the the page or post
identified by the integer id to be used as the widget content.

A value of the form !id (e.g. '!myasidediv') causes the contents of the
HTML DIV identified by id to be used as the widget content.  The selected
DIV must reside withing the current page or post.  Normally, the selected
DIV is removed from display within the page proper, but a value of the form
!!id causes the DIV to remain in the normal page flow.  Processing of page
content for the identified DIV is unsophisticated: the DIV must not itself
contain any other DIVs and the DIV id attribute must be the first attribute
after the tag name.

Prefix and suffix can be used to specify arbitrary text/HTML which will
be used to bracket the selected widget content.  PHP can also be used, but
will only work if parsing is enabled as described above.

== Installation ==

1. Place the zip archive in /wp-content/plugins.
2. Unzip the archive (and then delete it if you wish).
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Use the widget like any other widget.

== Frequently Asked Questions ==

= There's some kind of error on line 43! =

That error means that your PHP code is incorrect or otherwise broken. 

Bugs in this widget on line 43 are not possible.  Any errors attributed to
aside.php at line 43 are errors in code you put into an aside value field.
The reason that it shows the error being in aside.php is because that is
where your code is actually being run from.  Please don't email me about
errors in aside.php on line 43.

== Screenshots ==

1. Widgets admin page showing aside widget in use.

== Changelog ==

= 0.9 =
Release.

== Upgrade Notice ==

= 0.9 =
Not a change - just a release!

== Examples ==

A few examples of the use of magic values in the 'aside' field.

	#232  
Display page 232 in the aside widget.

	!mydiv  
Remove the contents of `<div id='mydiv'>...</div>` from the current
page and display it in the aside widget.

	!!mydiv  
As above, but leave the content in the page.

	!!mydiv,<span style=”bigquote”>,</span>  
As above, but style the widget output in some special way.
