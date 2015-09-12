<?php

use Virge\Core\Config;

error_reporting(E_ALL &~ E_NOTICE &~ E_STRICT);

/**
 * 
 * @author Michael Kramer
 */

chdir(dirname(__FILE__));

require_once 'bootstrap.php';

// Create new Notifier instance.
global $_airbrakeNotifier;
$config = Config::get('app');

if($config['environment'] === 'production') {
    $_airbrakeNotifier = new \Airbrake\Notifier(array(
        'projectId'     => 115002,
        'projectKey'    => '9280f8dc5b80d03f9a11e56d773dc755',
    ));

    // Set global notifier instance.
    \Airbrake\Instance::set($_airbrakeNotifier);

    // Register error and exception handlers.
    $handler = new \Airbrake\ErrorHandler($_airbrakeNotifier);
    $handler->register();
}

//handle arguments

$args = array();
if(isset($argv[2])){
    for($i = 2; $i <= $argc; $i++) {
        $args[] = isset($argv[$i]) ? $argv[$i] : NULL;
    }
}

$command = isset($argv[1]) ? $argv[1] : null;

$reactor = new Reactor();
$reactor->run('prod', 'cli', 'execute', array($command, $args));