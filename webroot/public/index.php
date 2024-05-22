<?php

echo "TODO";
#die();
echo "<pre>";print_r(getcwd());
require '../vendor/autoload.php';
$f3 = \Base::instance();

$mongoHost = 'mongodb://mongo:27017';
$db = new \DB\Mongo($mongoHost,'test');
die();


/*
boot strap here
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

*/
/*
require '../vendor/autoload.php';
$f3 = \Base::instance();

$mongoHost = 'mongodb://mongo:27017';
$db = new \DB\Mongo($mongoHost,'test');
*/

$dir = ".";
$files = scandir ($dir);
echo "<pre> $dir<br>";print_r($files);

$dir = "../";
$files = scandir ($dir);
echo "<pre> $dir<br>";print_r($files);

$dir = "../vendor";
$files = scandir ($dir);
echo "<pre> $dir<br>";print_r($files);

/*


nginx passes index.php to php container
php runs within php container

require 'vendor/autoload.php';
$mongoHost = 'mongodb://mongo:27017';

$f3 = \Base::instance();
$db = new \DB\Mongo($mongoHost,'test');
$f3->route('GET /',
    function() {
        echo 'F3 and mongodb loaded';
    }
);
$f3->run();
*/

require('../app/init.php');
/*
[Root]: GET /
    Shows active running tests
    links to test filters
    omni search bar

[tests]: GET /tests
    All tests ordered by latest
    omni seach bar
    25 per page, changeable
    checkbox multiselect save to export to json button

[tests]: POST /tests
    Add new test add new data


[test single]: GET /tests/id
    deatails on test 
    save to json save to yaml 



[COVERAGE]: GET /firmware

    list of tested firmwares
    latest to oldest

[COVEAGE SINGLE]: GET /firmaware/653
    successfull tests with that release




*/


?>
