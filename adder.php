<?php
/**
 * Main plugin file for Adder
 *
 * @package Adder
 */

/*
Plugin Name: Adder
Plugin URI: https://adder.pro/
Description: Better ads for WordPress
Version: 0.0.1
Author: Bjørn Johansen
Author URI: https://bjornjohansen.no/
License: GPLv2 or later
Text Domain: adder
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2017 Bjørn Johansen
*/

include dirname( __FILE__ ) . '/inc/taxonomy-adposition.php';
include dirname( __FILE__ ) . '/inc/cpt-adderad.php';

/**
 * Initialize Adder
 *
 * @since 0.0.1
 */
function adder_init() {

}
add_action( 'init', 'adder_init' );
