<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class EventController extends Controller
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
        //
        $res = $this->client->request('GET','event');
        $events = $res->getBody()->getContents();
        $result = json_decode($events);

        return view ('admin-frontpage',['events' => $result]);
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
        //
        $this->client->request('POST', 'event', [
            'form_params' => [
                'name' => $request->get('name'),                
                'password' => $request->get('description'),
                'img' => $request->get('img'),
                'start_date' => $request->get('start_date'),
                'end_date' => $request->get('end_date'),
            ]
        ]);

        

        return Redirect::action('eventController@index');
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
    }
}
