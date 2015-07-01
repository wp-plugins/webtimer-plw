=== WebTimer ===
Contributors: Youcef - Pour le Web
Tags: delay, retard, retardement, contents, contenu, shortcode
Donate link: http://www.pour-le-web.com/
Requires at least: 3.0
Tested up to: 4.2
Stable tag: 4.2
License: GPLv2 or later

WebTimer allows you to delay the display of content for your Website.
It also allows you to hide a content after a predefined time.

== Description ==
WebTimer allows you to delay the display of content for your Website.
It also allows you to hide a content after a predefined time.

Two shortcodes allow you to run both features :

-> [ WebTimer_Delay time = \"1m20s\"] Your content [ / WebTimer_Delay ] This shortcode allows you to view your content after a predefined time.
   The variable "time" take time parameter : with \"m\" for minute and \"s\" for second.

   Example of use:
   [WebTimer_Delay time=\"1m20s\"] This text will be displayed after 1 minutes et 20 seconds [/WebTimer_Delay]
   When the web page containing this shortcode has finished loading, this sentence will appear after 1 minute and 20secondes.



-> [ WebTimer_Hide time = \"5m30s\"] Your content [ / WebTimer_Hide ] This shortcode allows you to hide your content after a predefined time.
   The variable "time" take time parameter : with \"m\" for minute and \"s\" for second.

   Example of use:
   [WebTimer_Hide time=\"5m30s\"] This text will be hidden after 5 minutes et 30 seconds [/WebTimer_Hide]
   When the web page containing this shortcode has finished loading, this sentence will be hidden after 5 minutes and 30 seconds .
