<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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
        dd(1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $store_id = $request->store_id;
        $user_name = Auth::user()->name;

        return view('reservations.create', compact('store_id', 'user_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->user_id = Auth::user()->id;
        $reservation->number_of_people = $request->input('number_of_people');
        $reservation->date_time = $request->input('date').' '.$request->input('time').':00:00';
        $reservation->store_id = $request->input('store_id');
        $reservation->save();

        return redirect()->route('stores.show', $reservation->store_id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('mypage.reservations');
    }
}
