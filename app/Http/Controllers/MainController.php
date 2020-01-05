<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Home page treatment
     */
    public function home()
    {
        /**
         * Eloquent Model
         *
         * @link https://laravel.com/docs/6.x/eloquent#retrieving-models
         */


        return view(
            'home',
            [
                //'videogameList' => $videogameList
            ]
        );
    }

    public function about()
    {
        return view('about');
    }

    public function training()
    {
        return view('training');
    }
}