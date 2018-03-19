<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class TableController extends Controller
{

    public function default(Request $request)
    {
        $this->setView('table-default');
        return $this->respond(200);
    }

    public function datatable(Request $request)
    {
        $this->setView('table-datatable');
        return $this->respond(200);
    }
}
