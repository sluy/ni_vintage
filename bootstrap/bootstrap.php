<?php
#defining needed globals
define('BOOTSTRAP_PATH', dirname(__FILE__));
define('BASE_PATH', dirname(BOOTSTRAP_PATH));
define('HELPERS_PATH', BASE_PATH . '/helpers');
define('VIEWS_PATH', BASE_PATH . '/views');
define('VIEW_PARTIALS_PATH', VIEWS_PATH . '/partials');
define('CONFIG_PATH', BASE_PATH . '/config');
define('LIBS_PATH', BASE_PATH . '/libs');

#defining table aliases
define('T_SERVICES', 'servicios');
define('T_EPITAPHS', 'epitafios');
define('T_ROOMS', 'salas');
define('T_DESTINATIONS', 'destinos');
define('T_MASSES', 'responso');
define('T_WAKES', 'velatorios');
define('T_TRIBUTE_CONFIG', 'ni_homenajes');

#Including helper to nicely dump data
include_once(HELPERS_PATH . '/dump.php');

#Including libs (classes) used across app.
include_once(LIBS_PATH . '/MysqliDb.php');

#Bootstraping data to be used along app
include_once(BOOTSTRAP_PATH . '/config.php');
include_once(BOOTSTRAP_PATH . '/db.php');




#Including useful helpers
include_once(HELPERS_PATH . '/views.php');
include_once(HELPERS_PATH . '/url.php');
include_once(BOOTSTRAP_PATH . '/tribute.php');

#Adding main view
include_view('main');
