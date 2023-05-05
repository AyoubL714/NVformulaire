<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent_table;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function HomeIndex()
    {
        return view('Home');
    }
    function searchEployee() {
        return view('GcForm');
    }
    function DataInsert(Request $request)
    { 
       // array the req 
$userData = [
    'matricule' => $request->input('matricule'),
    'Nom' => $request->input('name'),
    'Prenom' => $request->input('prenom'),
    'NomArabe' => $request->input('nameA'),
    'PrenomArabe' => $request->input('prenomA'),
    'NumCIN' => $request->input('NumCIN'),
    'dateRecrutement' => $request->input('DateR'),
    'Service' => $request->input('currentPos'),
    'Fonction' => $request->input('Fonction'),
    'Grade' => $request->input('Grade'),
    'Telephone' => $request->input('Telephone'),
    'Email' => $request->input('Email'),
    'Adresse' => $request->input('adresse'),
    'AdresseArabe' => $request->input('adresseA'),
    'Sexe' => $request->input('Sexe'),
    'EtatMatominale' => $request->input('EtatMatominale'),
    'Nationalite' => $request->input('Nationalite'),
    'DateNaiss' => $request->input('age'),
    'Observation' => $request->input('Obs')
];


 
// Insert user data
        $inInsertSuccress = DB::table('pagent')->insert($userData);
        // Insert congé data
        $inInsertSuccressConge = DB::table('conge')->insert([
            'matricule' => $request->input('matricule')
        ]);

        if ($inInsertSuccress && 
            $inInsertSuccressConge
        ) {
            return view("GcForm",[
                $userData[
                    "matricule"
                ]
            ]);
        }

        else {echo '<h1>Failed<h1>';}
    }

    public function search(Request $request)
    {
        $employeeId = $request->input('employee_id');
        $employee = DB::select('SELECT pagent.*, conge.* FROM pagent LEFT JOIN conge ON pagent.matricule = conge.matricule WHERE pagent.matricule = ?;', [$employeeId]);

        if ($employee) {
            return view('GcForm', ['employee' => $employee]);
        } else {
            return view('GcForm', ['error' => 'No results found']);
        }
    }

    // add a cong 
    function addVocation(
        Request $request
    ) {
        $userData = [
            'matricule' => $request->input('matricule'),
            'datedebut' => $request->input('datedebutC'),
            'datefin' => $request->input('datefinC'),
            'nbrjour' => $request->input('nbrjour'),
            'relica' => $request->input('relica'),
            'iddec' => $request->input('decision'),
            'codtcng' => $request->input('currentPos'),
            'adrcng' =>  $request->input('Adrs')
        ];

        // get the relica 
        $employee = DB::select('SELECT pagent.*, conge.relica FROM pagent LEFT JOIN conge ON pagent.matricule = conge.matricule WHERE pagent.matricule = ?;', [
            $userData[
                "matricule"
            ]
        ]);
        $relica = $employee[0]->relica - $userData['nbrjour'];

       // Use updateOrInsert instead of insert
$inInsertSuccress = DB::table('conge')->updateOrInsert(
    ['matricule' => $userData['matricule']],
    [
        'datedeb' => $userData["datedebut"],
        'datefin' => $userData['datefin'],
        'nbrjours' => $userData['nbrjour'],
        'relica' => $relica,
        'codtcng' => $userData['codtcng'],
        'adrcng' => $userData['adrcng'],
    ]
);
        
        if ($inInsertSuccress) {
            // return view("GcForm");
            echo '<h1>ok done<h1>';
        }

        else {echo '<h1>Failed<h1>';}
    }
}
