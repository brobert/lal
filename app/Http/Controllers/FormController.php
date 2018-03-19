<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class FormController extends Controller
{

    public function element(Request $request)
    {
        $this->setView('form-element');
        return $this->respond(200);
    }

    public function layout(Request $request)
    {
        $this->setView('form-layout');
        return $this->respond(200);
    }

    public function validation(Request $request)
    {
        $this->setView('form-validation');
        return $this->respond(200);
    }

    public function wizard(Request $request)
    {
        $this->setView('form-wizard');
        return $this->respond(200);
    }

    public function wysiwyg(Request $request)
    {
        $this->setView('form-wysiwyg');
        return $this->respond(200);
    }

    public function xeditable(Request $request)
    {
        $this->setView('form-xeditable');
        return $this->respond(200);
    }

    public function fileupload(Request $request)
    {
        $this->setView('form-fileupload');
        return $this->respond(200);
    }

    public function imagecrop(Request $request)
    {
        $this->setView('form-imagecrop');
        return $this->respond(200);
    }
}
