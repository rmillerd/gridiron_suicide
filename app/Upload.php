<?php

namespace App;

use \Maatwebsite\Excel\Files\ExcelFile as Excel;
use Request;

class Upload extends Excel
{
    protected $request;
    
    public function __construct(Request $request) {
        $this->request = $Excel;
    }
    //
    public function getFile(){
        
    }
}
