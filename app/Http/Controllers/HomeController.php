<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent_table;

class HomeController extends Controller
{
    function HomeIndex(){
        return view('Home');
    }
    function DataInsert(Request $request){
        $matricule=$request->input('matricule');
        $name=$request->input('name');
        $prenom=$request->input('prenom');
        $nameArabe=$request->input('nameA');
        $prenomArabe=$request->input('prenomA');
        $Numerocin=$request->input('NumCIN');
        $Daterecrutement=$request->input('DateR');
        $Service=$request->input('currentPos');
        $Fonction=$request->input('Fonction');
        $Grade=$request->input('Grade');
        $telephone=$request->input('Telephone');
        $email=$request->input('Email');
        $adresse=$request->input('adresse');
        $adresseArabe=$request->input('adresseA');
        $sexe=$request->input('Sexe');
        $etatmatominale=$request->input('EtatMatominale');
        $Nationalite=$request->input('Nationalite');
        $datenaisss=$request->input('age');
        $observation=$request->input('Obs');

$inInsertSuccress=Agent_table::insert(['matricule'=>$matricule,
                                        'Nom'=>$name,
                                        'Prenom'=>$prenom,
                                        'NomArabe'=>$nameArabe,
                                        'PrenomArabe'=>$prenomArabe,
                                        'NumCIN'=>$Numerocin,
                                        'dateRecrutement'=>$Daterecrutement,
                                        'Service'=>$Service,
                                        'Fonction'=>$Fonction,
                                        'Grade'=>$Grade,
                                        'Telephone'=>$telephone,
                                        'Email'=>$email,
                                        'Adresse'=>$adresse,
                                        'AdresseArabe'=>$adresseArabe,
                                        'Sexe'=>$sexe,
                                        'EtatMatominale'=>$etatmatominale,
                                        'Nationalite'=>$Nationalite,
                                        'DateNaiss'=>$datenaisss,
                                        'Observation'=>$observation
                                                
]);
if ($inInsertSuccress) echo'<h1> Valide</h1>';
else echo'<h1>Failed<h1>';
    }
}
