<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Model;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAllUsers() {
        $model = new Model;    
        return $model->getAllUsers();
    }

    public function getUser($id) {
        $model = new Model;    
        return $model->getUser($id);
    }
/*
    public function search() {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://api.openweathermap.org/data/2.5/weather?q=stockholm,se&appid=12f3d626f6ac0b07f3fbf9711fe7bb6c');
        $response = $request->getBody();
       
        dd($response);

    }*/

    public function search(Request $request) {

        $location = $request["location"];

        

        $jsonfile = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$location.'&appid=12f3d626f6ac0b07f3fbf9711fe7bb6c');
        $jsondata = json_decode($jsonfile);
        $tempK = $jsondata->main->temp;
        $pressure = $jsondata->main->pressure;
        $mintemp = $jsondata->main->temp_min;
        $maxtemp = $jsondata->main->temp_max;
        $wind = $jsondata->wind->speed;
        $humidity = $jsondata->main->humidity;
        $desc = $jsondata->weather[0]->description;
        $temp = floatval($tempK) - 273.15;


        

        
        

        $data = ["temp" => $temp." °C", "desc" => $desc, "wind" => $wind, "location" => $location, "humidity" => $humidity];

        $properties = [
            "data" => $data         
        ];



        return view("start", $data);

    }





    public function viewPlanets(Request $request) {


        $nasajsonfile = file_get_contents("https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&api_key=lMsIRHT35ngatlfA3PwBkHDmkBEEGiUgKZ4FUskY"); 
        $nasajsondata = json_decode($nasajsonfile);

        $imgSrcArray = [];
        //$cameraArray =[];

        for ($i = 0; $i < 10; $i++) {
            array_push($imgSrcArray, $nasajsondata->photos[$i]->img_src);
            //array_push($cameraArray, $nasajsondata->photos[$i]->camera->full_name);
        };    
        

    $data = ["images" => $imgSrcArray/*, "camera" => $cameraArray*/];

        return view("mars", $data);

    }



}


