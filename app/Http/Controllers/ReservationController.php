<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $res = Reservation::all();

        return view('reservation', compact('res', $res));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservation/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        date_default_timezone_set("America/Chicago");
        
        $this->validate($request, [

              'start_date' => 'required',             
              'end_date' => 'required',
              'guests' => 'required',
              'guest_count' => 'required',

        ]);

        $store = New Reservation($request->all());

        $store->user_id = \Auth::user()->id;
        $store->user_email = \Auth::user()->email;
        $store->user_name = \Auth::user()->name;
        
        $store->save();

        return redirect('/reservation')->with('status', 'New Reservation Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        
        return view('reservation/edit', compact('reservation', $reservation));
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
        date_default_timezone_set("America/Chicago");
        
        $this->validate($request, [

              'start_date' => 'required',             
              'end_date' => 'required',
              'guests' => 'required',
              'guest_count' => 'required',           
              
        ]);

        $reservation = Reservation::findOrFail($id);

        $reservation->update($request->all());

       
        return redirect('/reservation')->with('status', 'Your Reservation Has Been Edited!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return back()->with('status', 'Your Reservation Was Deleted');
    }
}
