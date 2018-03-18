<?php

namespace App\Traits;

use Illuminate\Support\Facades\View;
use Auth;
use Log;

trait ResponseTrait {

    /**
     * handler for respons data ( for view or JSON )
     * @var $data {array}
     */
    protected $data = [];

    protected $view = '';

    /**
     *
     */
    protected function setView( $viewName )
    {

        $format = '%s%s';
        $this->view = $viewName;
    }

    /**
     *
     * @method setData
     * AppController
     * @param string|array $keyOrData
     * @param unknown $data
     */
    protected function setData( $keyOrData, $data = null )
    {
        if ( $data === null )
        {
            $this->data = $keyOrData;
        }
        else if ( is_string( $keyOrData ) && $data !== null )
        {
            $this->data[ $keyOrData ] = $data;
        }
    }

    protected function respond( $httpCode = 200 )
    {
        if ( !View::exists($this->view)) {
            $this->view = 'errors.503';
            $httpCode = 404;
        }
//         Log::debug('try to load view: ' . $this->view . print_r($this->data, 1) );
        $this->data['user'] = Auth::user();
        return response()->view($this->view, $this->data, $httpCode);
    }

}