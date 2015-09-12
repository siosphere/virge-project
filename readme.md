# Virge Project
Used to create a new empty Virge project, including most used virge libraries 
(virge/core, virge/db, virge/router, virge/orm)

## Adding your code
Simply add your namespace in the src/ directory, and add your Namespace to the 
bootstrap.php file.

## Capsules
Virge projects are split into Capsules, you register all capsules in the Reactor
 (app/Reactor.php). Each Capsule
must be defined as follows:

```php
namespace Siosphere\MyCapsule;

/**
 * 
 */
class Capsule extends \Virge\Core\Capsule {
    public function registerCapsule() {
        
    }
}
```

Virge will automatically read all configuration files in the *config* directory 
of your capsule. This directory is where you will register new services, routes,
 and API calls.

## Registering Services
Let's say we have the capsule src\Siosphere\MyCapsule, and we had a service
Siosphere\MyCapsule\Service\TestService. Create a file called *services.php*
in the src\Siosphere\MyCapsule\config\ directory. 

```php
use Siosphere\MyCapsule\Service\TestService;
use Virge\Virge;

Virge::registerService("my_service_identifier", new TestService());
```