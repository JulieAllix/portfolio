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
        return view(
            'about',
            [
            'title' => "About me",
            ]
        );
    }

    public function training()
    {
        return view(
            'training',
            [
            'title' => "O'clock",
            ]
        );
    }

    public function studyCards()
    {
        return view(
            'study-cards',
            [
            'title' => "Study cards",
            ]
        );
    }

    public function breakFree()
    {
        return view(
            'break-free',
            [
            'title' => "Break Free",
            ]
        );
    }

    public function portfolio()
    {
        return view(
            'portfolio',
            [
            'title' => "Portfolio",
            ]
        );
    }

    public function contact()
    {
        return view(
            'contact',
            [
            'title' => "Contact",
            ]
        );
    }
    
}