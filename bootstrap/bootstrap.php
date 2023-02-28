<?php
#defining needed globals
define('BOOTSTRAP_PATH', dirname(__FILE__));
define('BASE_PATH', dirname(BOOTSTRAP_PATH));
define('HELPERS_PATH', BASE_PATH . '/helpers');
define('VIEWS_PATH', BASE_PATH . '/views');
define('VIEW_PARTIALS_PATH', VIEWS_PATH . '/partials');
define('CONFIG_PATH', BASE_PATH . '/config');
define('LIBS_PATH', BASE_PATH . '/libs');
define('MODELS_PATH', BASE_PATH . '/models');

#defining table aliases
define('T_SERVICES', 'servicios');
define('T_EPITAPHS', 'epitafios');
define('T_ROOMS', 'salas');
define('T_DESTINATIONS', 'destinos');
define('T_MASSES', 'responso');
define('T_WAKES', 'velatorios');
define('T_EVENTS', 'abrazo_vela');
define('T_TRIBUTE', 'homenajes');
define('T_TRIBUTE_CONFIG', 'ni_homenajes');

include_once(HELPERS_PATH . '/dump.php');

#Bootstraping data to be used along app
include_once(BOOTSTRAP_PATH . '/config.php');
include_once(BOOTSTRAP_PATH . '/db.php');

#Data-Models
include_once(MODELS_PATH . '/model.php');
include_once(MODELS_PATH . '/destination.php');
include_once(MODELS_PATH . '/epitaph.php');
include_once(MODELS_PATH . '/event.php');
include_once(MODELS_PATH . '/mass.php');
include_once(MODELS_PATH . '/room.php');
include_once(MODELS_PATH . '/service.php');
include_once(MODELS_PATH . '/tribute_config.php');
include_once(MODELS_PATH . '/tribute.php');
include_once(MODELS_PATH . '/wake.php');

#Including useful helpers
include_once(HELPERS_PATH . '/views.php');
include_once(HELPERS_PATH . '/url.php');

#Initialize main service data
include_once(BOOTSTRAP_PATH . '/service.php');

#Adding main view
include_view('main');
