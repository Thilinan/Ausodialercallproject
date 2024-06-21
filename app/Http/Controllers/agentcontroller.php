<?php

namespace App\Http\Controllers;

use App\Models\agent;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class agentcontroller extends Controller
{

    public function store(){

        $return=agent::create([
            'name' => 'pipoipoip',
            'Mobile'=>'987987097098'
     ]);

     return $return;
    }

    public function index(){

      

}
}
