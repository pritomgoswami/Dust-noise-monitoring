<?php

namespace App\Http\Controllers;

use App\Models\Humidity;
use App\Models\Sound;
use App\Models\Temperature;
use App\Models\Tmdm;
use Illuminate\Http\Request;


date_default_timezone_set('Asia/Dhaka');

class ApiController extends Controller
{
    //
    public function create(request $request)
    {
 
    $tmdms = new Tmdm();

    if($request->input('node_id')!=null){
          $tmdms->node_id = $request->input('node_id');
    }
    
  
    if($request->input('dust_readings')!=null){
    $tmdms->dusts = $request->input('dust_readings');}
    else
    {
        $tmdms->dusts=0.00;
    }

    if($request->input('sound_readings')!=null){
    $tmdms->sounds = $request->input('sound_readings');}
    else{
        $tmdms->sounds=0.00;
    }

    if($request->input('temp_readings')!=null){
    $tmdms->temps = $request->input('temp_readings');}
    else{
        $tmdms->temps=0.00;
    }

    if($request->input('hum_readings')!=null){
    $tmdms->hums = $request->input('hum_readings');}
    else{
        $tmdms->hums=0.00;
    }

    $tmdms->save();



    }
}

