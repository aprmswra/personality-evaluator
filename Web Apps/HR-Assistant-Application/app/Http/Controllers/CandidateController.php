<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Models\Candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['candidate'] = Candidate::get();
        
        // dd($data);

        return view('pages.candidate.index', $data);
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
    public function store(Request $request)
    {
        // $first_name = 'Randy';
        // $last_name = 'Cahya';
        // $gender = 'Laki-laki';
        // $address = 'Kuningan';
        // $date_of_birth = '17-08-1999';
        // $no_hp = '081234567890';
        // $position = 'Data Scientist';
        // $test_score = '3.9';
        // $test_result = '4.1';
        // $personality = 'Extraversion';

        $client = new Client([
            'base_uri' => 'http://localhost:5000', // Ganti dengan URL Flask API
            // 'timeout'  => 2.0,
        ]);

        $response = $client->get('/summ', [
            'json' => [
                'text' => $request->tell_me_yourself,
            ]
        ]);
        
        $data = $response->getBody()->getContents();

        $data = json_decode($data, true);
        
        $candidate = Candidate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'no_hp' => $request->no_hp,
            'position' => $request->position,
            'tell_me_yourself' => $data['summary']
            // 'test_score' => $test_score,
            // 'test_result' => $test_result,
            // 'personality' => $personality
        ]);

        // dd($candidate);

        return redirect('/profileCandidate')->with('success', 'Data has been added.');
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
