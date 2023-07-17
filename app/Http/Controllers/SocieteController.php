<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocieteModel;

class SocieteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $societe  = SocieteModel::paginate (10);
        return view('layouts.societe.liste',compact('societe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.societe.ajouter');
    }

    public function store (Request $request) {


        $this->validate($request, [
            "nom_prenom" => 'required|string|max:255',
            "nom_agent" => 'required|numeric|',
            "heure_arrive" => 'required|string|max:80',
            "heure_depart" => 'required|string|max:80',
            "objet" => 'required|string|max:80',
            "societe" => 'required|string|max:80',
            "telephone" => 'required|numeric|',
            "date"=>'required'
        ]);



        SocieteModel::create([
            "nom_prenom" => $request->nom_prenom,
            "nom_agent"=> $request->nom_agent,
            "telephone" => $request->telephone,
            "objet" => $request->objet,
            "heure_arrive" => $request->heure_arrive,
            "heure_depart" => $request->heure_depart,
            "date" => $request->date,
            "societe" => $request->societe,
        ]);




           if ($this) {
                session()->flash('success','Visiteur bien ajoute');
           }

          return redirect()->route ('societe.liste');
        //  dd($VisiteurController);
}}
