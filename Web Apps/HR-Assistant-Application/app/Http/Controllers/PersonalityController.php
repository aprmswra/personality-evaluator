<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileCandidate()
    {
        return view('pages.personality.index');
    }

    public function personalityTest()
    {
        return view('pages.personality.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function predictPersonalityTest(Request $request)
    {
        $ExtraValue = 0;
        $AgreeValue = 0;
        $ConscientValue = 0;
        $NeuroValue = 0;
        $OpenValue = 0;
        $Extraversion = [$request->q1, $request->q6];
        $Agreeableness = [$request->q2, $request->q7];
        $Conscientiousness = [$request->q3, $request->q8];
        $Neuroticism = [$request->q4, $request->q9];
        $Openness = [$request->q5, $request->q10];
        // $array = [$request->q1,$request->q2,$request->q3,$request->q4,$request->q5,$request->q6,$request->q7,$request->q8,$request->q9,$request->q10];
        $extraLength = count($Extraversion);
        for ($i=0; $i < $extraLength; $i++) { 
            if ($Extraversion[$i] > 3) {
                $ExtraValue += 1;
            }
        }
        $agreeLength = count($Agreeableness);
        for ($i=0; $i < $agreeLength; $i++) { 
            if ($Agreeableness[$i] > 3) {
                $AgreeValue += 1;
            }
        }
        $consientLength = count($Conscientiousness);
        for ($i=0; $i < $consientLength; $i++) { 
            if ($Conscientiousness[$i] > 3) {
                $ConscientValue += 1;
            }
        }
        $neuroLength = count($Neuroticism);
        for ($i=0; $i < $neuroLength; $i++) { 
            if ($Neuroticism[$i] > 3) {
                $NeuroValue += 1;
            }
        }
        $openLength = count($Openness);
        for ($i=0; $i < $openLength; $i++) { 
            if ($Openness[$i] > 3) {
                $OpenValue += 1;
            }
        }

        $finalExtra = $ExtraValue/($extraLength/10);
        $finalAgree = $AgreeValue/($agreeLength/10);
        $finalConscient = $ConscientValue/($consientLength/10);
        $finalNeuro = $NeuroValue/($neuroLength/10);
        $finalOpen = $OpenValue/($openLength/10);

        $finalValue = [$finalExtra,$finalAgree,$finalConscient,$finalNeuro,$finalOpen];
        dd($finalValue);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
