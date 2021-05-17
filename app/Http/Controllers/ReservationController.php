<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function resa(){
        $reservations = Reservation::get();
        // dd($reservations);
        return view('reservations.create-assistance')->with('reservations', $reservations);
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get();
        return view('reservations.create-assistance')->with('services', $services);
    }
    
    public function enregistrer_assistance( Request $request){
        
        // print('la description du service est '.$request->input('assistance_description'));
        $user = auth()->user();
        $data = $request->all();
        $data['user_id']=$user->id; 
        
        $this->validate($request, 
        [
           'assistance_description'=>'required',
            'date_assistance'=>'required',
            'horaire_assistance',
            
            // 'bricolage_description'=>'required',
            // 'date_bricolage'=>'required',
            //  'horaire_bricolage',
        ]);
        
        $reservation = new Reservation();
        
        $reservation ->assistance_numerique = $request ->input('assistance');
        $reservation -> assistance_description = $request ->input('assistance_description');
        $reservation -> date_assistance =$request ->input('date_assistance');
        $reservation-> horaire_assistance = $request -> input('horaire_assistance');
        $reservation-> horaire_assistance = $request -> input('horaire_assistance');

        $reservation->user_id= $request->input('user_id');
        $reservation ->save();
        
        Session::put('status', 'la demande '.$reservation->type_service .' a bien été enregistré avec succès');
        
        return redirect('reservations.create-assistance');
    }

    public function enregistrer_reservations_bricolage( Request $request){
        
        // print('la description du service est '.$request->input('assistance_description'));
        $user = auth()->user();
        $data = $request->all();
        $data['user_id']=$user->id; 
        
        $this->validate($request, 
        [
        //    'assistance_description'=>'required',
        //     'date_assistance'=>'required',
        //     'horaire_assistance',
            
         'bricolage_description'=>'required',
         'date_bricolage'=>'required',
         'horaire_bricolage',
         ]);
        
        // $reservation = new Reservation();

        // $reservation->bricolage = $request->input('bricolage');
        // $reservation -> bricolage_description = $request ->input('bricolage_description');
        // $reservation -> date_bricolage =$request ->input('date_bricolage');
        // $reservation-> horaire_bricolage = $request -> input('horaire_bricolage');
        // $reservation-> horaire_bricolage = $request -> input('horaire_bricolage');
        
        // $reservation->user_id= $request->input('user_id');
        // $reservation ->save();
        
        // Session::put('status', 'la demande '.$reservation->type_service .' a bien été enregistré avec succès');
        
        // return redirect('reservations.create-bricolage');
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