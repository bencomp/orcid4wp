<?php
/**
 * Plugin Name: ORCID for WordPress
 * Plugin URI: http://ben.companjen.name/tag/orcid4wp
 * Description: A plugin to add a field to user profiles and comments for ORCIDs
 * Version: 0.5
 * Author: Ben Companjen
 * Author URI: http://companjen.name/id/BC
 * License: GPL2
 
 Copyright 2013  Ben Companjen  (email : ben@companjen.name)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
function orcid4wp_modify_user_contact_methods( $user_contact ){

	/* Add user contact methods */
	$user_contact['orcid'] = __('ORCID (include "http://orcid.org/")');

	return $user_contact;
}

add_filter('user_contactmethods', 'orcid4wp_modify_user_contact_methods');

?>