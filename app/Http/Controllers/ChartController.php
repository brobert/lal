<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class ChartController extends Controller
{

    public function flot(Request $request)
    {
        $this->setView('chart-flot');
        return $this->respond(200);
    }
}
