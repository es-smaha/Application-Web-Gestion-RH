<?php

namespace App\Exports;

use App\Planning;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlanningExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Planning::all();
    }
}
