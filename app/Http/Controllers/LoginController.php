<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public $client;

        public function __construct(){
            $this->client = new Client([
            'base_uri' => 'rostorv.mhdelfs.com/api/v1/']);

        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       

        return view ('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res =  $this->client->request('POST', 'login',[
            'form_params' => [
                'name' => $request->get('name'),
                'password' => $request->get('password'),
                ]
            ]);

        $result = $res->getBody()->getContents();
        $decoded = json_decode($result);

        setcookie("login_cookie[api_token]", $decoded->api_token);
        setcookie("login_cookie[store_id]", $decoded->store_id);

        return Redirect::action('storeController@index');

    }

   
}
