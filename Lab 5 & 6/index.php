<?php
session_start();
require_once "vendor\autoload.php";


define ("ROOT_URL", "http://127.0.0.1:5000");

use App\Models\Database;
use App\Models\UserModel;
use App\Core\Sessions;

$user = new UserModel();


use App\Core\Route;

new Route;

$session = new Sessions;

