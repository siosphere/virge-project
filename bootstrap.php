<?php
/**
 * 
 * @author Michael Kramer
 */

/**
 * Add namespaces one by one, this would be the start of your namespace, for
 * example, if I had src/Siosphere, my namespace would be Siosphere
 */
$namespaces = array();

$loader = require_once 'vendor/autoload.php';

foreach($namespaces as $namespace) {
    $loader->add($namespace, 'src/');
}

require_once 'app/Reactor.php';