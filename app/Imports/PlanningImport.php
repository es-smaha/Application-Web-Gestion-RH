<?php

namespace App\Imports;

use App\Planning;
use Maatwebsite\Excel\Concerns\ToModel;

class PlanningImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Planning([
            'user'=> $row[1],
            'lundi'=>$row[2],
            'mardi'=>$row[3],
            'mercredi'=>$row[4],
            'jeudi'=>$row[5],
            'vendredi'=>$row[6],
            'samedi'=>$row[7],
            'dimanche'=>$row[8],
        ]);
    }
}
