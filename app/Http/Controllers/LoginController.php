<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('agent.login');
    }
    public function login(Request $request)
    {
        $email=$request->email;
        $pword=$request->pword;
        // dd($email);
        $agent = DB::table('ac_users')->where('email',$email)->first();
        if($agent)
        {
            if($pword==$agent->password)
            {
                $agentId = $agent->id;
                $skillsdb = (DB::table('ad_agent_skills')->where('agent_id',$agentId)->first())->skill_ids;
                $skills = json_decode($skillsdb, true);

                // //  dd($skills);


            //Select campaign query
          //  $selectedCampaign = $request->input('selectedCampaign');

            // Update $campaigns based on the selected campaign
            $campaigns = DB::table('ad_campaigns')
            ->distinct('campaign_id')
            ->pluck('campaign_id')
            ->toArray();


                //number get query
                $number = DB::table('ad_campaigns')
                ->select('contact_1', 'contact_2', 'language')
                ->whereIn('campaign_id',$campaigns) // Use whereIn for campaign_id
                ->where(function ($query) use ($skills) {
                    $query->where(function ($q) use ($skills) {
                        foreach ($skills as $skill) {
                            $q->orWhere('language', 'like', '%' . $skill . '%');
                        }
                    });
                })
                ->where('status', 0)
                ->limit(1)
                ->get();

                // Get Call Log Details

                $calllog= (DB::table('ad_campaigns')->where('campaign_id',$campaigns)->first())->data;
                $calldetails= json_decode($calllog,true);

                $language = $calldetails['language'];
                $center = $calldetails['CENTER'];
                $contact= $calldetails['contact_no'];
                $customername= $calldetails['CUSTOMER NAME'];
                $workorder=$calldetails['WORK ORDER NO'];
                $modeldiscription=$calldetails['MODEL DESCRIPTION'];





            // Check if any result is found
            if ($number->isNotEmpty()) {
                // Display if the language value from the query matches any value in $skills
                return view('employee.views', [
                      'campaigns' => $campaigns,
                      'skills' => $skills,
                      'lang'=>$language,
                      'center'=> $center,
                      'contact'=>$contact,
                      'workorder'=>$workorder,
                      'custname'=>$customername,
                      'modeldis'=> $modeldiscription,
                      'num'=> $number[0]] );
            } else {
                echo "Language and skills do not match for campaign: "; // Output the campaign ID if no match is found
            }




              //  dd($number[0]);

                //$number1=response()->json(['campaign' => $number]);


                }






            else
            {
                $message ="Incorrect Password";
                return back()->with('message', $message);

            }
        }
        else
        {
            $message ="Incorrect User Email";
            return back()->with('message', $message);
        }









    }


}
