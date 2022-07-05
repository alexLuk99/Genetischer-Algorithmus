<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class dragController extends Controller
{


    public function show(){

        return view('dragGantt',); 
    }

    public function getData(){
        $a1 = array(
                     "Start" => "8:00",
                     "Maschine" => "M1.3",
                     "Ende" => "8:35",
                     "Auftrag" => "1001"
                        );

        return view('dragGantt')->with('a1',$a1);
    }
}
?>
