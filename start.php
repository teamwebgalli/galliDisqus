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

	elgg_register_event_handler('init','system','galliDisqus_init');

	function galliDisqus_init(){
	//	elgg_extend_view('elgg.css', 'galliDisqus/css');
	}		
?>