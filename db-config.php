<?php
return [
    'host' => getenv('DB_HOST') ?: 'localhost',
    'database' => getenv('DB_NAME') ?: 'webserver_demo',
    'username' => getenv('DB_USER') ?: 'webserver_user',
    'password' => getenv('DB_PASS') ?: 'change_this_password',
    'charset' => 'utf8mb4',
];
