<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ { Address, Country, Resa, State, Product, User, Page };
use Illuminate\Support\Facades\Mail;
use App\Mail\{ NewOrder, Ordered };

class OrderController extends Controller
{
    //Envoi emails
    public function store(Request $request, Shipping $ship)
{
    // Notification à l'administrateur
    $resa = Resa::firstOrFail();
    $admins = User::whereAdmin(true)->get();
    foreach($admins as $admin) {
        Mail::to($admin)->send(new NewOrder($resa, $order, $user));
        // On ajoutera une notification ici
    }        
            
    // Notification à l'adhérent
    $page = Page::whereSlug('conditions-generales-de-vente')->first();
    Mail::to($request->user())->send(new Ordered($resa, $order, $page));
    return redirect(route('reservation.confirmation', $order->id));
}
}