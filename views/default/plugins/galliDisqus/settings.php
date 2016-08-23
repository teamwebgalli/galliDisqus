<?php
 /**
 *	Elgg - Discus plugin
 *	This plugin allows guests to post their comments to your elgg sites, with out having an account
 *	Author : Sarath C | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Web	: http://webgalli.com 
 *	Skype : 'team.webgalli'
 *	@package Elgg-galliDiscuss
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */

	$forum_shortname = $vars['entity']->forum_shortname;
	echo "<p>";
	echo elgg_echo('galliDisqus:shortname'); 
	echo elgg_view('input/text', array('name' => "params[forum_shortname]", 'value' => $vars['entity']->forum_shortname)); 
	echo "</p>";
	
	echo"<p>" . elgg_echo('galliDisqus:shortname_link') . "</p>";

