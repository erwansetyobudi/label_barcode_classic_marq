<?php
/**
 * Plugin Name: Classic Label & Barcode Marq
 * Plugin URI: https://github.com/erwansetyobudi/label_barcode_classic_marq
 * Description: The colorfull label & barcode  Marq you'll like the most. Label & item barcode in one place. Available with QRcode as barcode replacement. This plugins modified from https://github.com/heroesoebekti/label_barcode_classic
 * Version: 0.0.1
 * Author: Erwan Setyo Budi
 * Author URI: https://www.facebook.com/erwan.setyobudi
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus
$plugin->registerMenu('bibliography', 'Classic Label & Barcode Marq', __DIR__ . '/index.php');
$plugin->registerMenu('bibliography', 'Fiction Label', __DIR__ . '/fiction_label.php');
