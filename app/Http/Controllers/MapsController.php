<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class MapsController extends Controller
{

    public function vector(Request $request)
    {
        $this->setView('maps-vector');
        return $this->respond(200);
    }

    public function google(Request $request)
    {
        $this->setView('maps-google');
        return $this->respond(200);
    }
}
