<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Log;

class LayoutController extends Controller
{
//     protected $data = [];
    
    public function __construct(Request $request) {
    }

    public function default(Request $request)
    {
        $this->setView('layout-default');
        return $this->respond(200);
    }
    
    public function withFooter(Request $request)
    {
        $this->setView('layout-with-footer');
        return $this->respond(200);
    }
    
    public function revealHeader(Request $request)
    {
        $this->setView('layout-reveal-header');
        return $this->respond(200);
    }
    
    public function fixedHeader(Request $request)
    {
        $this->setView('layout-fixed-header');
        return $this->respond(200);
    }
    
    public function fixedSidebar(Request $request)
    {
        $this->setView('layout-fixed-sidebar');
        return $this->respond(200);
    }
    
    public function navbarCollapse(Request $request)
    {
        $this->setView('layout-navbar-collapse');
        return $this->respond(200);
    }
}
