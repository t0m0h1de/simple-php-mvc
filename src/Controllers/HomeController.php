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
            if (!empty(getenv('DATABASE_HOST'))) {
                $host = getenv('DATABASE_HOST');
            } else {
                $host = "localhost";
            }
            if (!empty(getenv('DATABASE_USER'))) {
                $user = getenv('DATABASE_USER');
            } else {
                $user = "mongo";
            }
            if (!empty(getenv('DATABASE_PASSWORD'))) {
                $password = getenv('DATABASE_PASSWORD');
            } else {
                $password = "mongo";
            }
            if (!empty(getenv('DATABASE_PORT'))) {
                $port = getenv('DATABASE_PORT');
            } else {
                $port = "27017";
            }
            if (!empty(getenv('DATABASE_NAME'))) {
                $dbname = getenv('DATABASE_NAME');
            } else {
                $dbname = "zipsdb";
            }
            if (!empty(getenv('DATABASE_COLLECTION'))) {
                $collection = getenv('DATABASE_COLLECTION');
            } else {
                $collection = "zips";
            }
            $repo = new ZipsMongo("mongodb://$user:$password@$host:$port", $dbname, $collection);
            $zip = $repo->findByName(strtoupper($city));
            $this->render('index', ['zip' => $zip]);
        }
    }
}