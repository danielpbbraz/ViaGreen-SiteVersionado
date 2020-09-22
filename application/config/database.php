<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(

    'default' => array
    (
            'type'       => 'MySQLi',
            'connection' => array(
                    'hostname'   => '',
                    'database'   => '',
                    'username'   => '',
                    'password'   => '',
                    'port'       => NULL,
                    'socket'     => NULL
            ),
            'table_prefix' => '',
            'charset'      => 'utf8',
            'caching'      => FALSE,
    )
);