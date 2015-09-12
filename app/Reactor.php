<?php

use Virge\Core\BaseReactor;

/**
 * 
 * @author Michael Kramer
 */
class Reactor extends BaseReactor {
    
    public function registerCapsules($capsules = array()) {
        parent::registerCapsules(array(
            
            new Virge\Cli\Capsule(),
            new Virge\Cron\Capsule(),
            new Virge\Database\Capsule(),
            new Virge\ORM\Capsule(),
            new Virge\Router\Capsule(),
        ));
    }
    
}