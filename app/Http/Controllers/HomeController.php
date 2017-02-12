<?php
/**
 * Created by PhpStorm.
 * User: Jaime
 * Date: 12/02/2017
 * Time: 0:58
 */

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __home( )
    {
        return '<h1>Hola Controller</h1>';
    }
}