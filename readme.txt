=== WebTimer ===
Contributors: Youcef - Pour le Web
Tags: delay, retard, retardement, contents, contenu, shortcode
Donate link: http://www.pour-le-web.com/
Requires at least: 3.0
Tested up to: 4.2
Stable tag: 4.2
License: GPLv2 or later

WebTimer allows you to delay the display of content for your Website.


== Description ==

Francais:

WebTimer vous propose deux fonctionnalit&eacute;s pour la mise en page de vos page web.
La premiere fonctionnalit&eacute; vous permet d'afficher un contenu au bout d'un temps pr&eacute;d&eacute;fini.
La deuxi&egrave;me fonctionnalit&eacute; vous permet de cacher un contenu apr&egrave;s un temps pr&eacute;d&eacute;fini.

Deux shortcode permettent d'executer ces fonctionnalit&eacute;s.[WebTimer_Delay][/WebTimer_Delay] et [WebTimer_Hide][/WebTimer_Hide]
 
->  [ WebTimer_Delay time = "1m20s"] Votre contenu [ / WebTimer_Delay ]Ce shortcode vous permet d'afficher votre contenu au bout d'un temps pr&eacute;d&eacute;fini.
	La variable "time" prend en param&egrave;tre un temps : avec "m" pour minute et "s" pour seconde.

	Example of use:
	[ WebTimer_Delay time="1m20s"] Ce texte sera affich&eacute; au bout de 1 minutes et 20 secondes. [/WebTimer_Delay]
	Lorsque la page Web contenant ce shortcode a termin&eacute; son rafraichissement , cette phrase apparaît au bout d'une minute et vingt secondes .


->  	[WebTimer_Hide time = "5m30s"] Votre contenu [ / WebTimer_Hide ] Ce shortcode vous permet de cacher votre contenu au bout d'un temps pr&eacute;d&eacute;fini.
	La variable "time" prend en param&egrave;tre un temps : avec "m" pour minute et "s" pour seconde.

	Example of use:
	[WebTimer_Hide time="5m30s"] Ce texte sera cach&eacute; au bout de 5 minutes et 30 secondes [/WebTimer_Hide]
	Lorsque la page Web contenant ce shortcode a termin&eacute; son rafraichissement , cette phrase apparaît au bout de cinq minutes et vingt secondes .

	
   ---   ---   ---   ---   ---   ---   ---

English :

WebTimer allows you to delay the display of content for your Website.
It also allows you to hide a content after a predefined time.

Two shortcodes allow you to run both features :

-> [ WebTimer_Delay time = "1m20s"] Your content [ / WebTimer_Delay ] This shortcode allows you to view your content after a predefined time.
   	The variable "time" take time parameter : with "m" for minute and "s" for second.

   	Example of use:
   	[ WebTimer_Delay time="1m20s"] This text will be displayed after 1 minutes et 20 seconds [/WebTimer_Delay]
   	When the web page containing this shortcode has finished loading, this sentence will appear after 1 minute and 20secondes.



-> 	[WebTimer_Hide time = "5m30s"] Your content [ / WebTimer_Hide ] This shortcode allows you to hide your content after a predefined time.
   	The variable "time" take time parameter : with "m" for minute and "s" for second.

	Example of use:
	[WebTimer_Hide time="5m30s"] This text will be hidden after 5 minutes et 30 seconds [/WebTimer_Hide]
   	When the web page containing this shortcode has finished loading, this sentence will be hidden after 5 minutes and 30 seconds .
