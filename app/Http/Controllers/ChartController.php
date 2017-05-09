<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Khill\Lavacharts\Lavacharts;

use App\IndivReview;


class ChartController extends Controller

{

    public function getLaraChart()
    {
	     $lava = new Lavacharts; // See note below for Laravel

		       $popularity = $lava->DataTable();
		       $data = IndivReview::select("title as 0","SportsPersonReview as 1")->get()->toArray();

		       $popularity->addStringColumn('Country')
		           ->addNumberColumn('Popularity')
		           ->addRows($data);

	    	$lava->GeoChart('Popularity', $popularity);

        return view('laracharts',compact('lava'));
    }
}
