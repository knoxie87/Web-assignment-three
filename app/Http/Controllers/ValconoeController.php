<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class ValconoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $info = \Http::withOptions(['verify' => false])->get("https://api.geonet.org.nz/volcano/val",);
    $myArray = json_decode($info,true);
    $myInnerArray = $myArray['features'];
    $properties = array();
    foreach($myInnerArray as $element)
    $properties[] = $element['properties'];

    foreach($properties as $propertie)
    array_push($propertie, (object) [ 'key1' => 'someValue',
    ]);


    //log::info($properties);

    return view('index', ['properties' => $properties]);
    }

}
