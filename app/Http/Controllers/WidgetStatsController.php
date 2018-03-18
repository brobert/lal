<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetStatsController extends Controller
{
    //
    public function index(Request $request)
    {
        $this->setView('widget');
        return $this->respond(200);
    }
}
