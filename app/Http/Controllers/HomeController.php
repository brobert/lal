<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;
use Auth;
use Log;


class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Faker $faker) {

        $this->setView('index');

        $this->setData('income', [
            'value' => $faker->randomFloat(1, -100, 100)
        ]);
        $this->setData('traffic', []);
        $this->setData('weather', $this->getWather($faker));
        $this->setData('stats', [
            [
                'value' => $faker->randomFloat(0, 0, 10000),
                'percent' => $faker->randomFloat(2, -100, 100),
                'name' => 'dashboard.visits'
            ],
            [
                'value' => $faker->randomFloat(0, 0, 10000),
                'percent' => $faker->randomFloat(2, -100, 100),
                'name' => 'dashboard.views'
            ],
            [
                'value' => $faker->randomFloat(2, 0, 100),
                'percent' => $faker->randomFloat(2, -100, 100),
                'name' => 'dashboard.rate'
            ]
        ]);
        return $this->respond(200);
    }

    private function getWather($faker) {

        return [
            'countryCode' => $faker->countryCode,
            'city' => $faker->city,
            'temp' => $faker->numberBetween(0, 150) / 10,
            'temp_min' => $faker->numberBetween(-200, 0) / 10,
            'temp_max' => $faker->numberBetween(150, 400) / 10
        ];
    }
}
