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
        print_r( $gourmandises);
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
            'gourmandise_name' => 'required|max:255',
            'genre' => 'required|max:255',
            'imdb_rating' => 'required|numeric',
            'lead_actor' => 'required|max:255',
        ]);
        $show = Show::create($validatedData);
   
        return redirect('/books')->with('success', 'La gourmandise a bien été enregistrée dans la base de données');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gourmandise $gourmandises)
    {
        return view('show', compact('gourmandise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact')); 
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = Contact::find($id);
        $contact->first_name =  $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->email = $request->get('email');
        $contact->job_title = $request->get('job_title');
        $contact->city = $request->get('city');
        $contact->country = $request->get('country');
        $contact->save();

        return redirect('/contacts')->with('success', 'Contact updated!');
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
        
        // $contact = Contact::find($id);
        // $contact->delete();

        // return redirect('/contacts')->with('success', 'Contact deleted!');
    }
}