<?php
namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Http\Request;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venues = Venue::all();
        //dd($venues);
        return view('venues.venueindex')->with('venues', $venues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venues.addvenue');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'place' => 'required'
        ]);

        //Create Post
        $venue = new Venue;
        $venue->name = $request->input('name');
        $venue->description = $request->input('description');
        $venue->place = $request->input('place');
        $venue->save();

        return redirect('/venues')->with('success', 'Venue Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venue = Venue::find($id);
        return view('venues.showvenue')->with('venue', $venue);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venue = Venue::find($id);
        return view('venues.editvenue')->with('venue', $venue);
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
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'place' => 'required'
        ]);

        //Upate Post
        $venue = Venue::find($id);
        $venue->name = $request->input('name');
        $venue->description = $request->input('description');
        $venue->place = $request->input('place');
        $venue->save();

        return redirect('/venues')->with('success', 'Venues Updated');
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
