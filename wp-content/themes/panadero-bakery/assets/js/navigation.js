/* global panadero_bakeryScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   });
});

function panadero_bakery_open() {
	document.getElementById("sidelong-menu").style.width = "250px";
}
function panadero_bakery_close() {
	document.getElementById("sidelong-menu").style.width = "0";
}