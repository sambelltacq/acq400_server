ACQ400_server

webserver to store test results


uses php, nginx and mongodb docker containers



routes:

GET
/           Homepage
/test       Tests index
/test/<id>  Specific tests
/test/compare/<id>/<id>/<id> compare multiple tests on one page

POST
/tests      recieve new test via json

filesystem setup:

    mongodb/
        -db files

    nginx/
        - nginx config files

    webroot/
        - php file root

        public/
            - index.php, images, css, js
        app/
            - app rooot