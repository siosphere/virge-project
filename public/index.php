<?php
/**
 * 
 * @author Michael Kramer
 */

require_once '../bootstrap.php';

//handle arguments

$args = array();
if(isset($argv[1])){
    for($i = 1; $i < $argc; $i++) {
        $args[] = $argv[$i];
    }
}

$reactor = new Reactor();
$reactor->run('prod', 'router', 'route', $args);
