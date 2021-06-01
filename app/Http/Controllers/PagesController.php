<?php

namespace App\Http\Controllers;

use Response;

class PagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function howtoplay()
    {
        return view ('pages.howtoplay');
    }

    public function rewards()
    {
        return view ('pages.rewards');
    }

    public function windows()
    {
        $file= public_path(). "/download/sample.apk";

        $headers = array(
                'Content-Type: application/apk',
                );

        return Response::download($file, 'ColorFued.apk', $headers);
    }

    
}