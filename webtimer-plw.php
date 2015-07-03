<?php
/*
Plugin Name: webtimer-plw
Description: 
WebTimer allows you to delay the display of content for your Website.
Version: 2.0
Text Domain: WebTimer
Author: Pour le web
Author URI: http://www.pour-le-web.com/
*/



function theme_name_scripts() {
	wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' ); //appel du fichier jquery


if ( !is_admin() ) {
    add_filter('widget_text', 'do_shortcode', 11);
}// Autoriser l'utilisation du shortcode dans les widgets.



add_filter( 'plugin_action_links', 'ttt_wpmdr_add_action_plugin', 10, 5 );
function ttt_wpmdr_add_action_plugin( $actions, $plugin_file ) 
{
	static $plugin;

	if (!isset($plugin))
		$plugin = plugin_basename(__FILE__);
	if ($plugin == $plugin_file) {

			$settings = array('settings' => '<a href="options-general.php?page=my-slug">' . __('Settings', 'WebTimer') . '</a>');
		
    			$actions = array_merge($settings, $actions);
			
		}
		
		return $actions;
}//Lien Réglage dans Administrateur




add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_menu() {
	add_options_page( 'WebTimer', 'WebTimer', 'manage_options', 'my-slug', 'my_plugin_callback' );
}

function my_plugin_callback() {
	
	echo '<div><div id=plw_header>';
	echo '<img class="logo" src="' . plugins_url( 'logo-plw.png', __FILE__ ) . '" alt="Pour le web - Valorisez votre site internet" style="float: right"></br>';
	
	
	echo '<h1>' . __('Welcome in WebTimer 2.0','WebTimer') . '</h1></div>';
	
	echo '<div id="plw_content">';
	echo __('WebTimer offers two features for the layout of your web page.', 'WebTimer') . '</br></br>';
	echo __('The first feature allows you to display content after a predefined time.', 'WebTimer') . '</br></br>';
	echo __('The second feature allows you to hide a content after a predefined time.', 'WebTimer') . '</br></br>';
	echo __('Two shortcode allow to execute these features:', 'WebTimer'); echo '<span style="color:blue;">[WebTimer_Delay][/WebTimer_Delay]</span> and <span style="color:red;">[WebTimer_Hide][/WebTimer_Hide]</span></br></br></br>';
	
	echo '<h2>[WebTimer_Delay][/WebTimer_Delay]</h2>';
	echo __('[ WebTimer_Delay  time="1m20s"] Your content [/WebTimer_Delay ] This shortcode allows you to view your content after a predefined time.','WebTimer') . '</br></br>';
	echo __('The variable "time" take time parameter : with "m" for minute and " s" for second.','WebTimer') . '</br></br>' ;
	echo __('example of use:','WebTimer').'</br></br>';
	echo '[WebTimer_Delay time="1m20s"] ' . __('This text will be displayed after 1 minutes et 20 seconds','WebTimer') . ' [/WebTimer_Delay]' . '</br></br>';
	echo __('When the web page containing this shortcode has finished loading, this sentence will appear after 1 minute and 20secondes.','WebTimer') . '</br></br></br>';
	
	echo '<h2>[WebTimer_Hide][/WebTimer_Hide]</h2>';
	echo __('[WebTimer_Hide time="5m30s"] Your content [/WebTimer_Hide ] This shortcode allows you to hide your content after a predefined time.','WebTimer') . '</br></br>';
	echo __('The variable "time" take time parameter : with "m" for minute and " s" for second.','WebTimer') . '</br></br>' ;
	echo __('example of use:','WebTimer').'</br></br>';
	echo '[WebTimer_Hide time="5m30s"] ' . __('This text will be hidden after 5 minutes et 30 seconds','WebTimer') . ' [/WebTimer_Hide]' . '</br></br>';
	echo __('When the web page containing this shortcode has finished loading, this sentence will be hidden after 5 minutes and 30 seconds.','WebTimer') . '</br></br>';
	
	
	echo '</div>';
	
	echo '<div id="plw_footer">';
	echo __('If you enjoyed WebTimer plugin and want to make a donation , it is possible to','WebTimer'). ' <a href="http://www.pour-le-web.com/">www.pour-le-web.com</a></div>';
	
	
	echo '</div>';
	echo	'<style type="text/css">
				#plw_header{
					width: 1000px;
					font-size: 20px;
					margin: 0 auto;
					margin-bottom: 100px;
				}
				#plw_content{
					width: 900px;
					margin : 0 auto;
					font-size: 16px;
					margin-bottom: 70px;
				}
				h2{
					font-size: 18px;
					font-weight: bold;
				}
				#plw_footer{
					width: 910px;
					margin : 0 auto;
					font-size: 17px;
					border: 1px black solid;
					padding: 10px;
					background: white;
				}
			</style>';
			
}

add_action('plugins_loaded','WebTimer');

function WebTimer()
{
       $Plw_Webtimer=load_plugin_textdomain( 'WebTimer', false, dirname( plugin_basename(__FILE__) ));
}// Traduction



function retarder_plw($atts, $content = null){
	extract(shortcode_atts(array(
		'time' => "3",
	), $atts));
	
	if ($time == 0 && strlen($time)==0){
		$time = "3";
	}
	
	$duree = 0;
	$dureeM = 0;
	$dureeS = 0;
	for ($i = 0; $i <= strlen($time) -1; $i++) {
		if (ctype_digit($time[$i])){
			$duree .= $time[$i];
		} elseif ($time[$i] == "s"){
			$dureeS = $duree *1000;
			$duree = 0;
		} elseif ($time[$i] == "m"){
			$dureeM = $duree * 1000 * 60;
			$duree = 0;
		} else{
			$duree = 0;
		}
	}
	$time = $dureeS + $dureeM;
	if ($time == 0 && $duree != 0){
		$time = $duree * 1000;
	}
	
	
	$mavariable = '<span class='.$time.'>' .do_shortcode($content). '</span>';
	$mavariable .= '<script>
						jQuery(document).ready(function() {
							jQuery(".'.$time.'").hide().delay('.$time.').fadeIn();
						});
					</script>';
	return $mavariable;
}

function register_shortcodes($atts, $content = null){
  add_shortcode( 'WebTimer_Delay', 'retarder_plw' );
}
add_action( 'init', 'register_shortcodes');


function cacher_plw($atts, $content = null){
	extract(shortcode_atts(array(
		'time' => "10",
	), $atts));
	
	
	if ($time == 0 && strlen($time)==0){
		$time = "10";
	}
	
	$duree_hide = 0;
	$dureeM_hide = 0;
	$dureeS = 0;
	for ($i = 0; $i <= strlen($time) -1; $i++) {
		if (ctype_digit($time[$i])){
			$duree_hide .= $time[$i];
		} elseif ($time[$i] == "s"){
			$dureeS = $duree_hide *1000;
			$duree_hide = 0;
		} elseif ($time[$i] == "m"){
			$dureeM_hide = $duree_hide * 1000 * 60;
			$duree_hide = 0;
		} else{
			$duree_hide = 0;
		}
	}
	$time = $dureeS + $dureeM_hide;
	if ($time == 0 && $duree_hide != 0){
		$time = $duree_hide * 1000;
	}
	
	
	$maphrase = '<span class='.$time.'>' .do_shortcode($content). '</span>';
	$maphrase .= '<script>
						jQuery(document).ready(function() {
							jQuery(".'.$time.'").fadeIn().delay('.$time.').fadeOut();
						});
					</script>';
					
	return $maphrase;
	
	
}
function register_shortcodes2($atts, $content = null){
	add_shortcode( 'WebTimer_Hide', 'cacher_plw' );
}
add_action( 'init', 'register_shortcodes2');


?>