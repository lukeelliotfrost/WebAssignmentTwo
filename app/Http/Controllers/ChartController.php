<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\IndivReview;


class ChartController extends Controller

{

    public function getLaraChart()
    {
	      $lava = new Lavacharts;
        
		       $popularity = $lava->DataTable();
		       $data = IndivReview::select("title as 0","SportsPersonReview as 1")->get()->toArray();

		       $popularity->addStringColumn('Country')
		           ->addNumberColumn('Popularity')
		           ->addRows($data);

	    	$lava->GeoChart('Popularity', $popularity);
        return view('laracharts',compact('lava'));
    }

    public function getGaugeChart()
    {
        $lava = new Lavacharts;

        $temps = $lava->DataTable();

        $temps->addStringColumn('Type')
              ->addNumberColumn('Value')
              ->addRow(['CPU', rand(0,100)])
              ->addRow(['Case', rand(0,100)])
              ->addRow(['Graphics', rand(0,100)]);

        $lava->GaugeChart('Temps', $temps, [
            'width'      => 400,
            'greenFrom'  => 0,
            'greenTo'    => 69,
            'yellowFrom' => 70,
            'yellowTo'   => 89,
            'redFrom'    => 90,
            'redTo'      => 100,
            'majorTicks' => [
                'Safe',
                'Critical'
            ]
        ]);
        return view('gaugechart',compact('lava'));
    }
}
