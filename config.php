<?php
/**
 * Created by PhpStorm.
 * User: hylanda69874
 * Date: 2018/1/8
 * Time: 16:15
 */
require __DIR__.'/predis/autoload.php';

$single_server = array(
    'host' => '192.168.13.209',
    'port' => 6379,
    'database' => 15,
);

$multiple_servers = array(
    array(
        'host' => '127.0.0.1',
        'port' => 6379,
        'database' => 15,
        'alias' => 'first',
    ),
    array(
        'host' => '127.0.0.1',
        'port' => 6380,
        'database' => 15,
        'alias' => 'second',
    ),
);
