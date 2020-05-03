<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planning;
use App\Exports\PlanningExport;
use App\Imports\PlanningImport;
use Excel;

class ImportExcelController extends Controller
{
    public function index()
    {
        $data= Planning::all();
        return view('chefh.planning.create', compact('data'));
    }
    public function export()
    {
        return Excel::download(new PlanningExport() , 'test.xlsx');
    } 
    public function import(Request $request)
    {
        Planning::whereNotNull('id')->delete();
        $data=Excel::toCollection(new PlanningImport() , $request->file('import_file'));
        foreach($data[0] as $data){
            Planning::where('id' , $data[0])->insert([
                'user'=>$data[1],
                'lundi'=>$data[2],
                'mardi'=>$data[3],
                'mercredi'=>$data[4],
                'jeudi'=>$data[5],
                'vendredi'=>$data[6],
                'samedi'=>$data[7],
                'dimanche'=>$data[8],
            ]);
        }
        return redirect()->back();
    } 

}