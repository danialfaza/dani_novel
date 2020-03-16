<?php

namespace App\Exports;

use App\Novel;
use Maatwebsite\Excel\Concerns\FromCollection;

class NovelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Novel::all();
    }
}
