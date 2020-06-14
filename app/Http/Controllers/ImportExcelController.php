<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planning;
use App\User;
use App\Modele;
use App\Exports\PlanningExport;
use App\Imports\ModeleImport;
use Excel;

class ImportExcelController extends Controller
{
    public function index()
    {
        $data= Modele::all();
        return view('chefh.planning.create', compact('data'));
    }
    public function  indexA()
    {
        $user_id=auth()->user()->name;
        $data=Modele::where('nom','=', $user_id)->get();

        return view('agent.planning', compact('data'));
    }
    public function  indexRH()
    {
        $data= Modele::all();
        return view('resprh.planning', compact('data'));
    }
    public function  indexP()
    {
        $data= Modele::all();
        return view('resppaie.planning', compact('data'));
    }

   
   
    public function export()
    {
        Planning::whereNotNull('id')->delete();
        Planning::insert(['nom'=>'Nom','prenom'=>'Prenom','matricule'=>'Matricule','service'=>'Service','lundi'=>'Lundi','mardi'=>'Mardi','mercredi'=>'Mercredi','jeudi'=>'Jeudi','vendredi'=>'Vendredi','samedi'=>'Samedi','dimanche'=>'Dimanche']);
        $user=User::all();
       // $mod=Modele::all();
        foreach($user as $user ){
       $mod= Planning::create([
            'nom'=>$user->name, 
            'prenom'=>$user->prenom, 
            'matricule'=>$user->ko,
            'service'=>$user->servicee,
        ]);}
        

        return Excel::download(new PlanningExport() , 'modele.xlsx');
    } 
    public function import(Request $request)
    {
        Modele::whereNotNull('id')->delete();
        $data=Excel::toCollection(new ModeleImport() , $request->file('import_file'));
        
        foreach($data[0] as $data){
            Modele::where('id' , $data[0])->insert([
                'nom'=>$data[1], 
                'prenom'=>$data[2], 
                'matricule'=>$data[3],
                'service'=>$data[4],
                'lundi'=>$data[5],
                'mardi'=>$data[6],
                'mercredi'=>$data[7],
                'jeudi'=>$data[8],
                'vendredi'=>$data[9],
                'samedi'=>$data[10],
                'dimanche'=>$data[11],
            ]);
           }
           Modele::where('lundi','Lundi')->delete();
           
       
        return redirect()->back();
    } 

}