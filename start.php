<?php

 /**
 *	Elgg - Discus wrapper plugin
 *	This plugin allows guests to post their comments to your elgg sites, with out having an account
 *	Author : Sarath C | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Web	: http://webgalli.com 
 *	Skype : 'team.webgalli'
 *	@package Elgg-webgalli_disqus
 * 	Plugin info : Disqus comments for Elgg
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */
	function galliDisqus_init(){
		elgg_extend_view('css/elgg', 'galliDisqus/css');
	}
		
	elgg_register_event_handler('init','system','galliDisqus_init');
?>