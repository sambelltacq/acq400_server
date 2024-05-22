<?php
require '../vendor/autoload.php';
$f3 = \Base::instance();

#$f3->set('AUTOLOAD','../app/controllers/; ../app/;');
#$f3->set('UI','../app/views/');

$f3->route('GET /','Root->index');
#$f3->route('GET /tests','Tests->index');
#$f3->route('GET /tests/@test_id','Tests->single');
#$f3->route('GET /tests/compare','Tests->compare');

#$f3->route('POST /tests','Tests->new');


$f3->run();


?>