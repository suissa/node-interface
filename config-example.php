<?php

defined( 'NODEMON_RUNNING') || die( 'Access denied.' );

// See https://github.com/xblau/node-interface/wiki/Configuration
// for more info about these options.

$nodeconfig = array(
    'pagetitle' => 'Litecoin Node Interface',
    'pagedesc' => '',
    'autorefresh' => 120,
    'serverurl' => 'http://159.89.231.58:10000/',
    'username' => 'litecoin',
    'password' => 'd5b38bb46ab6b7647c9d0f35da',
    'broadcast' => false,
);

?>
