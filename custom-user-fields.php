<?php
/**
 * Plugin Name:       Custom user fields
 * Plugin URI:        https://delbem.net/custom-user-fields
 * Description:       It adds some custom fields for users
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rodrigo Vieira Del Bem
 * Author URI:        https://delbem.net
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       custom-user-fields
 * Domain Path:       /languages
 */

 defined ('WPINC') or die();

 require __DIR__ . '/vendor/autoload.php';

 use CustomUserFields\includes\CustomUserFields;

 $insert_user_custom_fields = new CustomUserFields();