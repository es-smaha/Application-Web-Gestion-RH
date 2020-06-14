<?php

namespace App\Imports;

use App\Modele;
use Maatwebsite\Excel\Concerns\ToModel;

class ModeleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Modele([
            'nom'=> $row[1],
            'prenom'=> $row[2],
            'matricule'=> $row[3],
            'service'=> $row[4],
            'lundi'=>$row[5],
            'mardi'=>$row[6],
            'mercredi'=>$row[7],
            'jeudi'=>$row[8],
            'vendredi'=>$row[9],
            'samedi'=>$row[10],
            'dimanche'=>$row[11],
        ]);
    }
}
