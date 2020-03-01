<?php
/**
 * @package Buddy-carry-backup
 */
/*
Plugin Name: Baddy Carry Backup
Plugin URI: https://github.com/kotkovdev/buddy-carry-backup
Description: Make, restore and transfer your backups
Version: 1.0.0
Author: Kotkovdev
Author URI: https://kotkovdev.pro
License: MIT
Text Domain: kotkovdev
*/

require ('globals.php');

function backupView() {
    $SettingsPath = __DIR__ . '/backup.php';
    add_menu_page( 'Backup', 'Backup', 'administrator', $SettingsPath, '', plugins_url( '/' . __DIR__ . '/buddy-carry-backup.png' ) );
}
add_action( 'admin_menu', 'backupView'); // Register Menus.