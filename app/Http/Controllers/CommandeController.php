<?php

namespace App\Http\Controllers;
use App\Gourmandise;
use App\Commande;
use App\User;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $commandes = Commande::where('user_id', auth()->user()->id)->with('gourmandises')->get();
        return view('commandes/commandes', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gourmandises = Gourmandise::all();
        return view('commandes/create-commandes', compact('gourmandises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_commande = array(
            "status" => "En cours",
            "user_id" => auth()->user()->id
        );
        // Créer la commande
        $commande = Commande::create($data_commande);

        $gourmandises = $request->input('gourmandises_id');
        $qte = $request->input('gourmandises_qte');
        
        // Lier la gourmandise et la quantité
        foreach($gourmandises as $key => $value)
        {
             $cakes[] = array(
                 "gourmandise_id" => $value , 
                 "quantity" => $qte[$key]);
        }
        // Envoyé sur la base de donnée liée a la commande
        foreach($cakes as $cake):
            $gourmandise = Gourmandise::find($cake['gourmandise_id']);
            $gourmandise->commandes()->attach($commande->id, ['quantity' => $cake['quantity']]);
        endforeach;

      
        return redirect('/commandes')->with('success', 'La gourmandise a bien été enregistrée dans la base de données');
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
