<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class numberGetcontroller extends Controller
{
  public  function getnum(Request $request)
  {
    $mnumber=DB::table('ad_campaigns')
    ->select('contact_1', 'contact_2')
    ->where('campaign_id', 'vj')
    ->where(function ($query) {
        $query->where('language', '')
              ->orWhere('language', 'sinhala');
    })
    ->where('status', 0)
    ->limit(1)
    ->get();

    return view('employee.views', compact('mnumber'));

    $mnumber=DB::table('ad_campaigns')
    ->select('contact_no','')
    ->where('campaign_id', 'vj')
    ->where(function ($query) {
        $query->where('language', '')
              ->orWhere('language', 'sinhala');
    })
    ->where('status', 0)
    ->limit(1)
    ->get();


  }
}
