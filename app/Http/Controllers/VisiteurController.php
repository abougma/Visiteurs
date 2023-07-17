<?php

namespace App\Http\Controllers;
// use App\Models\Visiteur;

use Illuminate\Contracts\View\View;
use App\Models\VisiteurModel;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
         $visiteur  = VisiteurModel::paginate (10);
        return view('visiteur.liste',compact('visiteur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        //
        return view('visiteur.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request) {


        $this->validate($request, [
            "nom_prenom" => 'required|string|max:255',
            "residence" => 'required|string|max:80',
            "objet_visite" => 'required|string|max:80',
            "service_visit" => 'required|string|max:80',
            "heure_arrive" => 'required|string|max:80',
            "heure_depart" => 'required|string|max:80',
            "piece" => 'required|string|max:80',
            "sexe" => 'required|string|max:80',
            "telephone" => 'required|numeric|',
        ]);



        VisiteurModel::create([
            "nom_prenom" => $request->nom_prenom,
            "residence" => $request->residence,
            "objet_visite"=> $request->objet_visite,
           "telephone" => $request->telephone,
           "service_visit" => $request->service_visit,
           "heure_arrive" => $request->heure_arrive,
           "heure_depart" => $request->heure_depart,
           "piece" => $request->piece,
           "sexe" => $request->sexe,
        ]);




           if ($this) {
                session()->flash('success','Visiteur bien ajoute');
           }

          return redirect()->route ('visiteur.liste');
        //  dd($VisiteurController);


        //var_dump($request->guichetregionale_id);
        //die();
        // try {
        //     //$agenceregionale= AgenceRegionale::create($request->except('_token'));

        //     $VisiteurController = new VisiteurModel();
        //     $VisiteurController->nom_prenom = $request->nom_prenom;
        //     $VisiteurController->telephone = $request->telephone;
        //     $VisiteurController->residence=$request->residence;
        //     $VisiteurController->sexe=$request->sexe;
        //     $VisiteurController->heure_arrive=$request->heure_arrive;
        //     $VisiteurController->heure_depart=$request->heure_depart;
        //     $VisiteurController->objet_visite=$request->objet_visite;
        //     $VisiteurController->service_visit=$request->service_visit;
        //     // $VisiteurController->service_visite=$request->service_visite;
        //     $VisiteurController->piece =$request->piece;
        //     $VisiteurController->save();


        // }catch (\Exception $exception){
        //     session()->flash('warning',$exception->getMessage());
        // }

    }
}




//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }
