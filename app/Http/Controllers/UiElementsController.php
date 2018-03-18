<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiElementsController extends Controller
{

    public function animation(Request $request)
    {
        $this->setView( 'component-animation' );
        return $this->respond(200);
    }
    public function button(Request $request)
    {
        $this->setView( 'component-button' );
        return $this->respond(200);
    }
    public function carousel(Request $request)
    {
        $this->setView( 'component-carousel' );
        return $this->respond(200);
    }
    public function grid(Request $request)
    {
        $this->setView( 'component-grid' );
        return $this->respond(200);
    }
    public function icon(Request $request)
    {
        $this->setView( 'component-icon' );
        return $this->respond(200);
    }
    public function loading(Request $request)
    {
        $this->setView( 'component-loading' );
        return $this->respond(200);
    }
    public function notification(Request $request)
    {
        $this->setView( 'component-notification' );
        return $this->respond(200);
    }
    public function panel(Request $request)
    {
        $this->setView( 'component-panel' );
        return $this->respond(200);
    }
    public function pricing(Request $request)
    {
        $this->setView( 'component-pricing' );
        return $this->respond(200);
    }
    public function slider(Request $request)
    {
        $this->setView( 'component-slider' );
        return $this->respond(200);
    }
    public function sortable(Request $request)
    {
        $this->setView( 'component-sortable' );
        return $this->respond(200);
    }
    public function tabsaccordion(Request $request)
    {
        $this->setView( 'component-tabsaccordion' );
        return $this->respond(200);
    }
    public function typography(Request $request)
    {
        $this->setView( 'component-typography' );
        return $this->respond(200);
    }
    public function others(Request $request)
    {
        $this->setView( 'component-others' );
        return $this->respond(200);
    }
}
