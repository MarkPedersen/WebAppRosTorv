<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class StoreController extends Controller
{
    public function postStore()
    {
        $store = new Client();
        $res = $store->request('POST', 'localhost:8000/api/v1/store', [
            'form_params' => [
            	'name' => 'Martin',                
                'password' => 'oliergud',
            ]
        ]);
        

        echo $res->getStatusCode();
        // "200"
       // echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
      //  echo $res->getBody();
        // {"type":"User"...'
	}
}