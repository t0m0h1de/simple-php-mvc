<?php

namespace App\Models;

class Zip
{
    public $id;
    public $city;
    public $state;
    public $pop;
    public $loc;

    public function __construct($id, $city, $pop, $loc)
    {
        $this->id = $id;
        $this->city = $city;
        $this->pop = $pop;
        $this->loc = $loc;
    }
}