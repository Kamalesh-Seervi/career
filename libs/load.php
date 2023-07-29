<?php
global $__site_config;
//Note: Change this path if you run this code outside lab.
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../photogramconfig.json');
Session::start();
//  print_r($_SERVER);
function get_config($key, $default=null)
{
    global $__site_config;
    $array = json_decode($__site_config, true);
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return $default;
    }
}
?>