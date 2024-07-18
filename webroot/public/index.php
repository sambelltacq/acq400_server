<?php
$APPDIR="../App";
chdir($APPDIR);
require('init.php');

/*
Overview

    web site to display regression test results

Features

    Upload test results via post request or click drag
    show tests results filter by uut, fpga, firmware, data, test type, etc
    compare 2 tests results
    store data and plot image
    show releases and current coverage

Stretch features
    python or bash script to search via cmd line 
    control and see status of running tests
    same thing but for production tests
    subdomains?
        regression.hostname.com
        production.hostname.com
        control.hostname.com

How to
    use bootstrap for css
    use F3 and mongodb for the backend
    use docker for easy setup

Routes:

    [Root]: GET /
        Shows active running tests
        links to test filters
        omni search bar

    [tests]: GET /tests
        All tests ordered by latest
        omni seach bar
        25 per page, changeable
        checkbox select for compareing and exporting

    [tests]: POST /tests
        Add new test add new data, plot


    [test single]: GET /tests/id
        deatails on test 
        export test results to json or yaml

    [coverage]: GET /coverage
        shows each firmware and the test coverage of each


Links:

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
https://fatfreeframework.com/3.8/home
https://netbox-demo.netboxlabs.com/login/?next=/dcim/cables/
    

*/
