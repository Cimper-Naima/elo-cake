<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gourmandise;
use App\Categorie;

class GourmandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {

        $this->middleware('admin',['except' => ['index','show']]);
    }
    
    public function index()
    {
        $gourmandises = Gourmandise::with('categorie')->get();
        return view('gourmandises/gourmandises', compact('gourmandises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('gourmandises/create-gourmandises', compact('categories'));
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|numeric', 
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
        $categories = Categorie::all();
        return view('gourmandises/edit-gourmandises', compact('gourmandises','categories')); 
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
                'name' => 'required|max:255',
                'description' => 'required|max:255',
                'prix' => 'required|numeric',
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