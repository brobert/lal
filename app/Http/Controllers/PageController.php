<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PageController extends Controller
{

    public function starter(Request $request)
    {
        $this->setView('page-starter');
        return $this->respond(200);
    }

    public function blogdefault(Request $request)
    {
        $this->setView('page-blog-default');
        return $this->respond(200);
    }

    public function bloggrid(Request $request)
    {
        $this->setView('page-blog-grid');
        return $this->respond(200);
    }

    public function blogsingle(Request $request)
    {
        $this->setView('page-blog-single');
        return $this->respond(200);
    }

    public function calendar(Request $request)
    {
        $this->setView('page-calendar');
        return $this->respond(200);
    }

    public function emailinbox(Request $request)
    {
        $this->setView('page-email-inbox');
        return $this->respond(200);
    }

    public function emailview(Request $request)
    {
        $this->setView('page-email-view');
        return $this->respond(200);
    }

    public function error404(Request $request)
    {
        $this->setView('page-error-404');
        return $this->respond(200);
    }

    public function error403(Request $request)
    {
        $this->setView('page-error-403');
        return $this->respond(200);
    }

    public function error500(Request $request)
    {
        $this->setView('page-error-500');
        return $this->respond(200);
    }

    public function faq(Request $request)
    {
        $this->setView('page-faq');
        return $this->respond(200);
    }

    public function invoice(Request $request)
    {
        $this->setView('page-invoice');
        return $this->respond(200);
    }

    public function loginreturned(Request $request)
    {
        $this->setView('page-login-returned');
        return $this->respond(200);
    }

    public function mediaalbum(Request $request)
    {
        $this->setView('page-media-album');
        return $this->respond(200);
    }

    public function mediagallery(Request $request)
    {
        $this->setView('page-media-gallery');
        return $this->respond(200);
    }

    public function messagebubble(Request $request)
    {
        $this->setView('page-message-bubble');
        return $this->respond(200);
    }

    public function messagerich(Request $request)
    {
        $this->setView('page-message-rich');
        return $this->respond(200);
    }

    public function timelinev2(Request $request)
    {
        $this->setView('page-timeline-v2');
        return $this->respond(200);
    }
}
