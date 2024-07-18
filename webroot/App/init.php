<?php
#echo "<h3>init.php loaded</h3>";
require '../vendor/autoload.php';
require 'Utilities/helpers.php';
$f3 = \Base::instance();
$f3->config('Config/setup.cfg');
$f3->run();


/*

/tests
    all tests
/tests/5
    all tests page 5
/tests/api
    can send get requests here to ajax into pages

/test
    redirects to /tests
/test/testid
    signle display 1 test

/test/testid/subtestid
    signle display of subtest



Copy code
$file_path = 'path/to/your/file.txt';
$checksum = sha1_file($file_path);
$checksum_short = substr($checksum, 0, 7);
$id = base64_encode(hex2bin($checksum_short));
$id = rtrim($id, '=');

echo "Generated ID: $id";


*/
#delte me
#$f3->set('AUTOLOAD','../app/controllers/; ../app/;');
#$f3->set('UI','../app/views/');
#$f3->route('GET /','Controllers\Root->index');
#$f3->route('GET /tests','Controllers\Test->index');
#$f3->route('GET /tests/@test_id','Tests->single');
#$f3->route('GET /tests/compare','Tests->compare');
#$f3->route('POST /tests','Tests->new');
//[routes]
#GET / = RootController->index
#GET /tests = TestController->index


