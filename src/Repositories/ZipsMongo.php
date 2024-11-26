<?php

namespace App\Repositories;

use MongoDB\Client;
use App\Models\Zip;

class ZipsMongo
{
    private $mongo;
    private $database;
    private $collection;

    public function __construct($uri, $database, $collection)
    {
        $this->mongo = new Client($uri);
        $this->database = $database;
        $this->collection = $collection;
        $this->mongo->selectDatabase($database)->command(['ping' => 1]);
    }

    public function findByName($name)
    {
        $database = $this->database;
        $collection = $this->collection;
        $result = $this->mongo->$database->$collection->find(['city' => $name]);
        if ($result->isDead()) {
            return null;
        } else {
            foreach ($result as $document) {
                return new Zip(
                    $document['_id'],
                    $document['city'],
                    $document['pop'],
                    $document['loc']
                );
            }
        }
    }
}