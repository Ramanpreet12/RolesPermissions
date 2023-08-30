<?php

namespace App\Exports;

use Spatie\Permission\Models\Permission;
use Maatwebsite\Excel\Concerns\FromCollection;

class PermissionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //it will collect all the columns of the table
        // return Permission::all();

        //if you want only selected columns to be exported then you can change the query
        return Permission::select('name' , 'group_name')->get();
    }
}
