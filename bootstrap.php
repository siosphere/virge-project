<?php
/**
 * 
 * @author Michael Kramer
 */

/**
 * Add namespaces one by one, this would be the start of your namespace, for
 * example, if I had src/Siosphere, my namespace would be Siosphere
 */
$namespaces = [
    'Example'
];

$baseDir = dirname(__FILE__) . '/';

$loader = require_once $baseDir . 'vendor/autoload.php';

foreach($namespaces as $namespace) {
    $loader->add($namespace, $baseDir . 'src/');
}

require_once 'app/Reactor.php';
