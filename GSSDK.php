<?php
/*
 * Gigya PHP SDK
 *
 * version 3.0.2
 *
 * http://developers.gigya.com/display/GD/PHP
 */
if (!function_exists('curl_init')) {
    throw new Exception('Gigya PHP SDK needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('Gigya PHP SDK needs the JSON PHP extension.');
}
require_once('GSSDK.lib/GSException.php');
require_once('GSSDK.lib/GSKeyNotFoundException.php');
require_once('GSSDK.lib/GSRequest.php');
require_once('GSSDK.lib/GSResponse.php');
require_once('GSSDK.lib/GSObject.php');
require_once('GSSDK.lib/GSArray.php');
require_once('GSSDK.lib/SigUtils.php');
require_once('GSSDK.lib/JWTUtils.php');
