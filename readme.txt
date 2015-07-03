=== WebTimer ===
Contributors: Youcef - Pour le Web
Tags: delay, retard, retardement, contents, contenu, shortcode
Donate link: http://www.pour-le-web.com/
Requires at least: 3.0
Tested up to: 4.2
Stable tag: 4.2
License: GPLv2 or later

WebTimer vous permet de retarder l'affichage d'un contenu d'une page web pedant un temps prédéfini.
Il vous permet également de masquer un contenu après un temps prédéfini .

WebTimer allows you to delay the display of content for your Website.
It also allows you to hide a content after a predefined time.

== Description ==

Francais:
WebTimer vous propose deux fonctionnalités pour la mise en page de vos page web.
La premiere fonctionnalité vous permet d'afficher un contenu au bout d'un temps prédéfini.
La deuxième fonctionnalité vous permet de cacher un contenu après un temps prédéfini.

Deux shortcode permettent d'executer ces fonctionnalités.[WebTimer_Delay][/WebTimer_Delay] et [WebTimer_Hide][/WebTimer_Hide]

->  [WebTimer_Delay][/WebTimer_Delay]
	[ WebTimer_Delay time="1m20s"] Votre contenu [/WebTimer_Delay ] Ce chortcode vous permet d'afficher votre contenu au bout d'un temps prédéfini.
	La variable "time" prend en paramètre un temps : avec "m" pour minute et "s" pour seconde.

	Exemple d'utilisation :
	[WebTimer_Delay time="1m20s"] Ce texte sera affiché au bout de 1 minutes et 20 secondes. [/WebTimer_Delay]
	Lorsque la page Web contenant ce shortcode a terminé son rafraichissement , cette phrase apparaît au bout d'une minute et vingt secondes .


->  [WebTimer_Hide][/WebTimer_Hide]
	[ WebTimer_Delay time="5m30s"] Votre contenu [/WebTimer_Delay ] Ce chortcode vous permet de cacher votre contenu au bout d'un temps prédéfini.
	La variable "time" prend en paramètre un temps : avec "m" pour minute et "s" pour seconde.

	Exemple d'utilisation :
	[WebTimer_Hide time="5m30s"] Ce texte sera caché au bout de 5 minutes et 30 secondes [/WebTimer_Hide]
	Lorsque la page Web contenant ce shortcode a terminé son rafraichissement , cette phrase apparaît au bout de cinq minutes et vingt secondes .



English :
WebTimer allows you to delay the display of content for your Website.
It also allows you to hide a content after a predefined time.

Two shortcodes allow you to run both features :

-> [ WebTimer_Delay time = "1m20s"] Your content [ / WebTimer_Delay ] This shortcode allows you to view your content after a predefined time.
   	The variable "time" take time parameter : with "m" for minute and "s" for second.

   	Example of use:
   	[WebTimer_Delay time="1m20s"] This text will be displayed after 1 minutes et 20 seconds [/WebTimer_Delay]
   	When the web page containing this shortcode has finished loading, this sentence will appear after 1 minute and 20secondes.



-> 	[ WebTimer_Hide time = "5m30s"] Your content [ / WebTimer_Hide ] This shortcode allows you to hide your content after a predefined time.
   	The variable "time" take time parameter : with "m" for minute and "s" for second.

   	Example of use:
   	[WebTimer_Hide time="5m30s"] This text will be hidden after 5 minutes et 30 seconds [/WebTimer_Hide]
   	When the web page containing this shortcode has finished loading, this sentence will be hidden after 5 minutes and 30 seconds .
