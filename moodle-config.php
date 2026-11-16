<?php
// Replaces the config.php that the entrypoint of brandkern/moodle generates
// (same values) and adds sslproxy: on the VM the host nginx terminates TLS,
// Moodle itself only sees HTTP.

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('DB_HOST');
$CFG->dbname    = getenv('DB_NAME');
$CFG->dbuser    = getenv('DB_USER');
$CFG->dbpass    = getenv('DB_PASS');
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = '/var/www/moodledata';
$CFG->directorypermissions = 0777;

$CFG->sslproxy  = getenv('MOODLE_SSLPROXY') === 'true';

require_once(__DIR__ . '/lib/setup.php');
