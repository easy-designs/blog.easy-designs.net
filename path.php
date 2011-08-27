<?php

// ------------------------------------------------------
// DO NOT ALTER THIS FILE UNLESS YOU HAVE A REASON TO

// ------------------------------------------------------
// Path to the directory containing your backend files

$system_path = "{$_SERVER['DOCUMENT_ROOT']}/__ee_admin/";

// ------------------------------------------------------
// MANUALLY CONFIGURABLE VARIABLES
// See user guide for more information
// ------------------------------------------------------

$template_group = '';
$template       = '';
$site_url       = "http://{$_SERVER['HTTP_HOST']}/";
$site_index     = '';
$site_404       = '';
$site_name      = 'easy-reader';

$production = TRUE;
if ( strpos( $_SERVER['SERVER_NAME'], 'dev' ) !== FALSE OR
     strpos( $_SERVER['SERVER_NAME'], 'local' ) !== FALSE )
{
    $production = FALSE;
}

// This array must be associative
$global_vars    = array(
    'cdn'   => ( $production ? 'http://cdn3.easy-designs.net' : '/img' )
); 

?>