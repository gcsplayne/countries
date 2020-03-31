<?php

// normalizes slashes (UNIX TYPE)
function normalize_slashes ($path) {
    return str_replace('\\', '/', $path);
}

// sets the includes path
$path = normalize_slashes(dirname(__FILE__) . './_includes');
//var_dump ($path);
set_include_path($path);

// Normalize absolute URLs
$document_root = normalize_slashes ($_SERVER['DOCUMENT_ROOT']);
//var_dump($document_root);

$application_root = normalize_slashes (dirname(__FILE__));
//var_dump($application_root);

$link_path = str_replace($document_root, null, $application_root);
//var_dump($link_path);
define('BASE_PATH', $link_path);

?>