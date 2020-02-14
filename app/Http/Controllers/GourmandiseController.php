<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gourmandise;

class GourmandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $gourmandises = Gourmandise::all();
        return view('gourmandise', compact('gourmandises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'category' => 'required|max:255',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'quantity' => 'required|numeric',
        ]);
        $show = Gourmandise::create($validatedData);
   
        return redirect('/gourmandises')->with('success', 'La gourmandise a bien été enregistrée dans la base de données');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gourmandise $gourmandises)
    {
        return view('gourmandise', compact('gourmandise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($gourmandises)
    // {
        
    //     $gourmandises = Gourmandise::find($gourmandises);
    //     return view('edit.blade', compact('edit')); 
    // }

    public function edit($gourmandises)
    {
        
        $gourmandises = Gourmandise::find($gourmandises);
        return view('edit', compact('gourmandises')); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gourmandises)
    {
            $validatedData = $request->validate([
                'category' => 'required|max:255',
                'name' => 'required|max:255',
                'description' => 'required|max:255',
                'quantity' => 'required|numeric',
            ]);
            Gourmandise::whereId($gourmandises)->update($validatedData);
    
            return redirect('/gourmandises')->with('success', 'La gourmandise a bien été modifiée');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gourmandise $gourmandise)
    {
        $gourmandise->delete();
        return back()->with('info', 'La gourmandise a bien été supprimé dans la base de données.');
    }
}