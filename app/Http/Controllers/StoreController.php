<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;



class StoreController extends Controller
{
        public $client;
         public function __construct(){
            $this->client = new Client([
            'base_uri' => 'localhost:8000/api/v1/']);

        }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!isset($_COOKIE['api_token'])) {
             return Redirect::action('loginController@index');
        }
        
        $res = $this->client->request('GET','store');
        $stores = $res->getBody()->getContents();
        $result = json_decode($stores);

       return view ('admin-frontpage',['stores' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (isset($_COOKIE['api_token'])) {
             $cookie = $_COOKIE['api_token'];
        }else{
             return Redirect::action('loginController@index');
        }
        
        $this->client->request('POST', 'store?api_token='.$cookie, [
            'form_params' => [
                'name' => $request->get('name'),                
                'password' => $request->get('password'),
            ]
        ]);

        

        return Redirect::action('storeController@index');
        

        // echo $res->getStatusCode();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $this->store->request('DELETE', 'store'.$id);
        

        return view('admin-frontpage');
        // return Redirect::action('storeController@index');
    }
}
