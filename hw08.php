<?php

require_once __DIR__ . '/vendor/autoload.php';

interface DataBase
{
    public function getData(): string;
}

class Mysql implements DataBase
{
    public function getData(): string
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(DataBase $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        return $this->adapter->getData();
    }
}