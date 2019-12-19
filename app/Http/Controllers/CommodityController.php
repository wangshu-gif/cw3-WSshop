<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Shelf;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commodities = Commodity::all();
        return view('commodities.index', ['commodities'=>$commodities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$shelves = Shelf::all();
        $shelves = Shelf::orderBy('name', 'asc')->get();
        return view('commodities.create', ['shelves' => $shelves]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'name' =>'required|max:255',
          'num' =>'required|integer',
          'type' => 'required|max:255',
          'shelf_id' => 'required|integer',

        ]);
        $c = new Commodity;
        $c->name = $validatedData['name'];
        $c->num = $validatedData['num'];
        $c->type = $validatedData['type'];
        $c->shelf_id = $validatedData['shelf_id'];
        $c->save();

        session()->flash('message', 'Commodity was created.');
        return redirect()->route('commodities.index');
        return "Passed Validation";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commodity = commodity::findOrFail($id);
        return view('commodities.show', ['commodity' => $commodity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commodity = commodity::findOrFail($id);
        return view('commodities.edit', compact('commodity'));
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
      /*$this->validate($request,[
        'name' =>'required|max:255',
        'num' =>'required|integer',
        'type' => 'required|max:255',
        'shelf_id' => 'required|integer',

      ]);*/
      $c = Commodity::first();
      $c->name = Request::input('name');
      $c->num = Request::input('num');
      $c->type = Request::input('type');
      $c->shelf_id = Request::input('shelf_id');
      $c->save();
      session()->flash('message', 'Commodity was edited.');
      return redirect()->route('commodities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commodity = Commodity::findOrFail($id);
        $commodity->delete();
        return redirect()->route('commodities.index')->with('message', 'Commodity
         was deleted.');
    }

/*   public function exampleMethod(Commodity $foo){
    //  $t = app()->make('twitter');
     dd($t);

      return "The example method return this";
    }*/

}
