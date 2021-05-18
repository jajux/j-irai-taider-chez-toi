<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Bricolage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BricolageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bricolages = Bricolage::get();
        $services = Service::get();
        return view('reservations.create-bricolage')->with('bricolages', $bricolages, 'services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create-bricolage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $data = $request->all();
        $data['user_id']=$user->id; 
        
        $this->validate($request, 
        [
           'bricolage_description'=>'required | min:10',
            'date_bricolage'=>'required',
            'horaire_bricolage'=>'required',
        ]);
        
        $bricolage = new Bricolage();

        $bricolage->bricolage = $request ->input('bricolage');
        $bricolage -> bricolage_description = $request ->input('bricolage_description');
        $bricolage -> date_bricolage =$request ->input('date_bricolage');
        $bricolage-> horaire_bricolage = $request -> input('horaire_bricolage');
        $bricolage-> horaire_bricolage = $request -> input('horaire_bricolage');
        $bricolage->user_id= $request->input('user_id');
        
        $bricolage ->save();

        Session::put('status', 'Demande de réservations enregistrés.');
        
        return view('reservations.create-bricolage');

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