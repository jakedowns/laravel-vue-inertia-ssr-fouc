<?php

namespace App\Http\Controllers;

class InertiaPageController extends Controller {
    public function __invoke(){
        die('hello from inertia page controller');
    }
}