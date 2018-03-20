<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DateTime;
use Faker\Generator as Faker;


class ChartController extends Controller
{

    public function flot(Request $request)
    {
        $this->setView('chart-flot');
        return $this->respond(200);
    }

    public function flotData(Request $request, Faker $faker, $type)
    {
        $type = ucFirst($type);

        $method = "chartData$type";

        if (method_exists($this, $method)) {
            $result = $this->$method($faker);
        } else {
            $result = [
                'name' => 'Abigail',
                'state' => 'CA',
                'type' => $type
            ];
        }
        return response()->json($result);
    }

    private function getDataSeries($faker, $seriesCnt = 3, $dataLength = 12)
    {
        // $faker = new Faker();
        $data = [];

        for($serieId = 0; $serieId < $seriesCnt; $serieId++) {

            $serieData = [];

            for($idx = 0; $idx < $dataLength; $idx++) {
                $month = DateTime::createFromFormat("!m", $idx);
                $serieData [] = [
                    $month->format("M"),
                    rand(50, 410)
                ];
            }
            $seria = [
                'label' => $faker->country,
                'color' => $faker->hexcolor,
                'data' => $serieData
            ];

            $data [$serieId] = $seria;
        }

        return $data;
    }

    private function chartDataLinespline($faker)
    {
        return $this->getDataSeries($faker, 3, 12);
    }

    private function chartDataBar($faker)
    {
        return $this->getDataSeries($faker, 2);
    }

    private function chartDataBarstacked($faker)
    {
        return $this->getDataSeries($faker, 3, 12);
    }

    private function chartDataArea($faker)
    {
        return $this->getDataSeries($faker, 3, 12);
    }

    // Areaspline
    private function chartDataAreaspline($faker)
    {
        return $this->getDataSeries($faker, 3, 12);
    }

    // Areaspline
    private function chartDataLine($faker)
    {
        return $this->getDataSeries($faker, 3, 12);
    }

    private function chartDataPie($faker)
    {
        $data = [];

        for($i = 0; $i < 5; $i++) {
            $data [] = [
                'label' => $faker->country,
                'color' => $faker->hexcolor,
                'data' => $faker->numberBetween(1, 2)
            ];
        }

        return $data;
    }
}
