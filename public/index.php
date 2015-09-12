<?php
/**
 * 
 * @author Michael Kramer
 */

$loader = require_once '../vendor/autoload.php';
$loader->add('Ingram','../src/');

require_once '../app/Reactor.php';

//handle arguments

$args = array();
if(isset($argv[1])){
    for($i = 1; $i < $argc; $i++) {
        $args[] = $argv[$i];
    }
}

$reactor = new Reactor();
$reactor->run('prod', 'router', 'route', $args);