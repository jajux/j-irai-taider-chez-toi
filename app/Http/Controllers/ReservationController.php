<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $services = Service::get();
        // dd($services);
        return view('pages.reservations')->with('services', $services);
    }
    public function show(){
        return view('reservations.reservations');
    }

    // public function ajouter_le_service($id){
    //     $service = Service::table('tbl_products')
    //     ->where('id', $id)
    //     ->first();

    //     $oldCart = Session::has('cart')? Session::get('cart'):null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($product, $id);
    //     Session::put('cart', $cart);
    //     //dd(Session::get('cart'));
    //     return redirect::to('/shop');
    // }
    // public function sauvegarder_reservation(request $request)
    // {
    //     $this->validate(request, ['title_service' =>'required']);
    // }
}