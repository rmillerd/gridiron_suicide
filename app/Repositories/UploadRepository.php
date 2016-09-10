<?php

namespace App\Repositories;

use App\Http\Requests;


class UploadRepository extends \Maatwebsite\Excel\Files\ExcelFile{

    protected $request;
    
    public function __construct(Request $request){
        $this->request = $request;
    }
    
    public function getFile()
    {
        
    }
    
}
