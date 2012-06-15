<?php

# The directory containing the php5-markdown wiki code
$appRoot = dirname(__FILE__) . '/';
$libDir  = $appRoot . 'lib/';

$config = array(
	'docDir'      => $appRoot . 'pages/',
	'defaultPage' => 'index',
        'language'    => 'bg_BG',
);

# And off we go...
require_once $libDir . 'controller.php';

?>