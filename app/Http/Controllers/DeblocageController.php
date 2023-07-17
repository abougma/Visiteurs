<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeblocageModel;

class DeblocageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $deblocage  = DeblocageModel::paginate (10);
        return view('layouts.deblocage.liste',compact('deblocage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.deblocage.ajouter');
    }

    public function store (Request $request) {


        $this->validate($request, [
            "nom_prenom" => 'required|string|max:255',
            "num_aej" => 'required|numeric|',
            "heure_arrive" => 'required|string|max:80',
            "heure_depart" => 'required|string|max:80',
            "mail" => 'required|string|max:80',
            "sexe" => 'required|string|max:80',
            "telephone" => 'required|numeric|',
            "agence_regionale" => 'required|string|max:255',
            "date"=>'required'
        ]);



        DeblocageModel::create([
            "nom_prenom" => $request->nom_prenom,
            "agence_regionale" => $request->agence_regionale,
            "num_aej"=> $request->num_aej,
            "telephone" => $request->telephone,
            "mail" => $request->mail,
            "heure_arrive" => $request->heure_arrive,
            "heure_depart" => $request->heure_depart,
            "date" => $request->date,
            "sexe" => $request->sexe,
        ]);




           if ($this) {
                session()->flash('success','Visiteur bien ajoute');
           }

          return redirect()->route ('deblocage.liste');
        //  dd($VisiteurController);
}}
