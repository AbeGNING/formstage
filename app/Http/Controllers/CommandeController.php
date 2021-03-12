<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('pages.backend.commandes.create-edit', 
        [
            'commande'    =>  new Commande(),
            'titre'       => "Nouvelle commande",
            'obligatoire' => "required",
            'btn'         => "Enregistrer"
        ]);
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('pages.backend.commandes.create-edit', 
        [
            'commande'    =>  Commande::findOrFail($id) ,
            'titre'       =>  Commande::findOrFail($id)->repas,
            'obligatoire' => "",
            'btn'         => "Modifier"
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
