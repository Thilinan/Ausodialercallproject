<?php

namespace App\Http\Controllers;

use App\Models\employee;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $employee=employee::all();

       return view('employee.views',compact('employee'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $return=employee::create([

            'name'=>"viraj",
            'email'=>"viraj23@gmail.com",
            'mobile'=>"06698090",
            'province'=>"north centrell",
            'district'=>"polonnaruwa",
            'skill'=>"tamil"

        ]);

        return $return;

    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }

    /**get numbers */
    public function getNumber(){



    }
}
