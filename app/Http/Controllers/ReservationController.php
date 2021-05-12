<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        // dd($services);
        return view('pages.reservations')->with('services', $services);

    }
    public function resa(){
        $reservations = Reservation::get();
        return view('reservations.create')->with('reservations', $reservations);
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }
    
    public function enregistrer_reservation( Request $request){
        
        $this->validate($request, 
        [
            'services_id'=>'required',
            'resa_description'=>'required',
            'date_rdv'=>'required',
        ]);
        
        $reservation = new Reservation();
        
        $reservation ->services_id = $request ->input('assistance');
        $reservation -> resa_description = $request ->input('resa_description');
        $reservation -> date_rdv =$request ->input('date_rdv');
        // $reservation-> matin = $request -> input('matin');
        // $reservation -> apres_midi = $request -> input('apres_midi');
        
        $reservation ->save();
        return redirect('/reservations/formulaire_reservation')->with('status', 'la réservation a bien été enregistré');
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