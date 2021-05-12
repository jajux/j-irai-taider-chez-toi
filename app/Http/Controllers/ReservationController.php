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
        // dd($reservations);
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

        $user = auth()->user();
        $data = $request->all();
        $data['user_id']=$user->id; 
        
        $this->validate($request, 
        [
            'description'=>'required',
            'date_rdv'=>'required',
            'horaire' =>'required',
        ]);
        
        $reservation = new Reservation();
        
        $reservation ->type_service = $request ->input('assistance');
        $reservation -> resa_description = $request ->input('description');
        $reservation -> date_rdv =$request ->input('date_rdv');
        $reservation-> horaire_rdv = $request -> input('horaire');
        $reservation->user_id= $request;
        $reservation ->save();
        return redirect('pages.reservations')->with('status', 'la réservation a bien été enregistré');
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