<?php

namespace App\Controllers;

use App\Controller;
use App\Repositories\ZipsMongo;

class HomeController extends Controller
{
    public function index()
    {
        $city = $_GET['city'];
        if (is_null($city)) {
            $this->render('index');
        } else {
            $repo = new ZipsMongo("mongodb://mongo:mongo@localhost:27017", "zipsdb", "zips");
            $zip = $repo->findByName(strtoupper($city));
            $this->render('index', ['zip' => $zip]);
        }
    }
}