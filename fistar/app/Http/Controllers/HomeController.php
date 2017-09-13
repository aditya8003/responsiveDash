<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $client = new Client(['base_uri' => 'http://localhost:9200/embulk/']); //GuzzleHttp\Client
        $result = $client->request('POST', '_search?size=50');
        $body = $result->getBody();
        $contents = $body->getContents();
        $jcontent=json_decode($contents);

        $data = new HomeController;
$data->name = "purencool";
$data->age = "old";
$dataObj = (object) $data;
$data = array(
"name" => "purencool",
"age" => "old",
"nellypot" => "no"
);
 

$ar = $jcontent->{'hits'}->hits;
//var_dump(get_object_vars(get_object_vars($ar[1])["_source"])["seller id"]);
return view('home', compact('ar'));
foreach ($ar as $i => $value) {
    $ar1 = get_object_vars($ar[$i]);
    $ar2= get_object_vars($ar1["_source"]);
    
   }
        
    }
}
