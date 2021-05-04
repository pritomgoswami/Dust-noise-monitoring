<?php

namespace App\Http\Controllers;




use App\Models\Tmdm;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;



date_default_timezone_set('Asia/Dhaka');
class MonitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('index')->with('datas',Tmdm::all());
    }


    public function main(){
        return view('main')->with('datas',Tmdm::all());
    }

    public function sound(){

        return view('sound')->with('datas',Tmdm::all());
    }
    public function temp(){
        return view('temperature')->with('datas',Tmdm::all());
    }
    public function hum(){
        return view('humidity')->with('datas',Tmdm::all());
    }


// Graphs!!!!


public function dustGraph(){
   
    $dusts1=DB::select('select created_at,dusts from tmdms where node_id=1 order by created_at desc limit 8');
    $dusts2=DB::select('select created_at,dusts from tmdms where node_id=2 order by created_at desc limit 8');
    $dusts3=DB::select('select created_at,dusts from tmdms where node_id=3 order by created_at desc limit 8');
    $dusts4=DB::select('select created_at,dusts from tmdms where node_id=4 order by created_at desc limit 8');
  
  $dusts1=array_reverse($dusts1);
  $dusts2=array_reverse($dusts2);
  $dusts3=array_reverse($dusts3);
  $dusts4=array_reverse($dusts4);
  
  // $tempus=array_merge_recursive($dusts1,$dusts2);
    $result[] = ['created_at', 'Node_1'];
     $result2[] = ['created_at', 'Node_2'];
     $result3[] = ['created_at', 'Node_3'];
     $result4[] = ['created_at', 'Node_4'];
    
    foreach ($dusts1 as $key => $value) {
  
        $result[++$key] = [ $value->created_at,(float)$value->dusts];
    
  }
    foreach ($dusts2 as $key => $value) {
        $result2[++$key] = [ $value->created_at,(float)$value->dusts];
    }
  
    foreach ($dusts3 as $key => $value) {
        $result3[++$key] = [ $value->created_at,(float)$value->dusts];
    }
    foreach ($dusts4 as $key => $value) {
        $result4[++$key] = [ $value->created_at,(float)$value->dusts];
    }
    
  
     return view('dustGraph')
         ->with('dusts1', json_encode($result))
         ->with('dusts2', json_encode($result2))
         ->with('dusts3', json_encode($result3))
         ->with('dusts4', json_encode($result4));
}


public function soundGraph(){
   
    $sounds1=DB::select('select created_at,sounds from tmdms where node_id=1 order by created_at desc limit 8');
    $sounds2=DB::select('select created_at,sounds from tmdms where node_id=2 order by created_at desc limit 8');
    $sounds3=DB::select('select created_at,sounds from tmdms where node_id=3 order by created_at desc limit 8');
    $sounds4=DB::select('select created_at,sounds from tmdms where node_id=4 order by created_at desc limit 8');
  
  $sounds1=array_reverse($sounds1);
  $sounds2=array_reverse($sounds2);
  $sounds3=array_reverse($sounds3);
  $sounds4=array_reverse($sounds4);
  
  // $tempus=array_merge_recursive($sounds1,$sounds2);
    $result[] = ['created_at', 'Node_1'];
     $result2[] = ['created_at', 'Node_2'];
     $result3[] = ['created_at', 'Node_3'];
     $result4[] = ['created_at', 'Node_4'];
    
    foreach ($sounds1 as $key => $value) {
  
        $result[++$key] = [ $value->created_at,(float)$value->sounds];
    
  }
    foreach ($sounds2 as $key => $value) {
        $result2[++$key] = [ $value->created_at,(float)$value->sounds];
    }
  
    foreach ($sounds3 as $key => $value) {
        $result3[++$key] = [ $value->created_at,(float)$value->sounds];
    }
    foreach ($sounds4 as $key => $value) {
        $result4[++$key] = [ $value->created_at,(float)$value->sounds];
    }
    
  
     return view('soundGraph')
         ->with('sounds1', json_encode($result))
         ->with('sounds2', json_encode($result2))
         ->with('sounds3', json_encode($result3))
         ->with('sounds4', json_encode($result4));}
           

public function tempGraph(){
   
    $temps1=DB::select('select created_at,temps from tmdms where node_id=1 order by created_at desc limit 8');
    $temps2=DB::select('select created_at,temps from tmdms where node_id=2 order by created_at desc limit 8');
    $temps3=DB::select('select created_at,temps from tmdms where node_id=3 order by created_at desc limit 8');
    $temps4=DB::select('select created_at,temps from tmdms where node_id=4 order by created_at desc limit 8');

  $temps1=array_reverse($temps1);
$temps2=array_reverse($temps2);
$temps3=array_reverse($temps3);
$temps4=array_reverse($temps4);

// $tempus=array_merge_recursive($temps1,$temps2);
    $result[] = ['created_at', 'Node_1'];
     $result2[] = ['created_at', 'Node_2'];
     $result3[] = ['created_at', 'Node_3'];
     $result4[] = ['created_at', 'Node_4'];
    
    foreach ($temps1 as $key => $value) {
 
        $result[++$key] = [ $value->created_at,(float)$value->temps];
    
}
    foreach ($temps2 as $key => $value) {
        $result2[++$key] = [ $value->created_at,(float)$value->temps];
    }

    foreach ($temps3 as $key => $value) {
        $result3[++$key] = [ $value->created_at,(float)$value->temps];
    }
    foreach ($temps4 as $key => $value) {
        $result4[++$key] = [ $value->created_at,(float)$value->temps];
    }
    

     return view('tempgraph')
         ->with('temps1', json_encode($result))
         ->with('temps2', json_encode($result2))
         ->with('temps3', json_encode($result3))
         ->with('temps4', json_encode($result4))
           ;
}


public function humGraph(){
   
    $hums1=DB::select('select created_at,hums from tmdms where node_id=1 order by created_at desc limit 8');
    $hums2=DB::select('select created_at,hums from tmdms where node_id=2 order by created_at desc limit 8');
    $hums3=DB::select('select created_at,hums from tmdms where node_id=3 order by created_at desc limit 8');
    $hums4=DB::select('select created_at,hums from tmdms where node_id=4 order by created_at desc limit 8');
  
  $hums1=array_reverse($hums1);
  $hums2=array_reverse($hums2);
  $hums3=array_reverse($hums3);
  $hums4=array_reverse($hums4);
  
  // $tempus=array_merge_recursive($hums1,$hums2);
    $result[] = ['created_at', 'Node_1'];
     $result2[] = ['created_at', 'Node_2'];
     $result3[] = ['created_at', 'Node_3'];
     $result4[] = ['created_at', 'Node_4'];
    
    foreach ($hums1 as $key => $value) {
  
        $result[++$key] = [ $value->created_at,(float)$value->hums];
    
  }
    foreach ($hums2 as $key => $value) {
        $result2[++$key] = [ $value->created_at,(float)$value->hums];
    }
  
    foreach ($hums3 as $key => $value) {
        $result3[++$key] = [ $value->created_at,(float)$value->hums];
    }
    foreach ($hums4 as $key => $value) {
        $result4[++$key] = [ $value->created_at,(float)$value->hums];
    }
    
  
     return view('humGraph')
         ->with('hums1', json_encode($result))
         ->with('hums2', json_encode($result2))
         ->with('hums3', json_encode($result3))
         ->with('hums4', json_encode($result4));}
           
                          


}



