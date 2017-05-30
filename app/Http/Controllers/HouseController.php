<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('houses.order');
    }

    public function orderBy($order)
    {
      return view('houses.index', ['houses' => House::orderBy($order)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $house = new House;
        $house->fill($request->all());
        $house->extres = serialize($request->input('extres'));
        $house->save();
        return redirect('/');
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

    public function modifyPrice(Request $request)
    {
      $houses = House::where('tipus', $request->input('tipus'))->get();
      foreach ($houses as $house) {
        $house->preu = $house->preu + ($house->preu * intval($request->input('percent')) / 100);
        $house->save();
      }
      return redirect('/');
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

    public function modify()
    {
      return view('houses.modify');
    }
}
