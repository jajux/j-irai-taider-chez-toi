<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Assistance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\VarDumper\Cloner\Data;

class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistances = Assistance::get();
        $services = Service::get();
        $users = User::get();
        return view('reservations.create-assistance')->with('assistances', $assistances, 'services', $services, 'users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create-assistance');
        
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
            'id',
           'assistance_description'=>'required | min:10',
            'date_assistance'=>'required',
            'horaire_assistance'=>'required',
        ]);
        
        $assistance = new Assistance();
        
        $assistance ->assistance_numerique =$request->input('assistance');
        $assistance ->assistance_description =$request->input('assistance_description');
        $assistance ->date_assistance =$request->input('date_assistance');
        $assistance->horaire_assistance =$request->input('horaire_assistance');
        $assistance->horaire_assistance =$request->input('horaire_assistance');

        $assistance->user_id= $request->input('user_id');
        // $assistance ->save();

        $assistance = Assistance::get(['assistance_numerique', 'assistance_description', 'date_assistance','horaire_assistance']);
        // dd($assistance);

        
        Session::put('status','Votre demande de réservation est bien enregistré');
        
        return view('reservations.create-assistance')->with('assistance', $assistance);
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