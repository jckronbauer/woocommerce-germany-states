<?php

/*
Plugin Name: WooCommerce States Of Germany
Plugin URI: http://github.com/jckronbauer/woocommerce-germany-states
Description: Add the States of Germany to WooCommerce's list of states.
Version: 1.0
Author: Julio Cezar Kronbauer
Author URI: http://jckronbauer.blogspot.com
*/

/**
 * Copyright (c) 2016 Julio Cezar Kronbauer. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */


function wc_add_germany_states( $states ) {

    $states['DE'] = array(
		'BW' => 'Baden-Württemberg',
		'BA' => 'Bavaria (Freistaat Bayern)',
		'BE' => 'Berlin',
		'BD' => 'Brandenburg',
		'BR' => 'Bremen (Freie Hansestadt Bremen)',
		'HA' => 'Hamburg (Freie und Hansestadt Hamburg)',
		'HS' => 'Hesse (Hessen)',
		'LS' => 'Lower Saxony (Niedersachsen)',
		'MV' => 'Mecklenburg-Vorpommern',
		'RW' => 'North Rhine-Westphalia (Nordrhein-Westfalen)',
		'RP' => 'Rhineland-Palatinate (Rheinland-Pfalz)',
		'SR' => 'Saarland',
		'SX' => 'Saxony (Freistaat Sachsen)',
		'SA' => 'Saxony-Anhalt (Sachsen-Anhalt)',
		'SH' => 'Schleswig-Holstein',
		'TH' => 'Thuringia (Freistaat Thüringen)',
	);

    return $states;

}

add_filter( 'woocommerce_states', 'wc_add_germany_states' );
