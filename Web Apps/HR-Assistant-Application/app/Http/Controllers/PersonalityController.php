<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

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

        $username = 'farrelium';
        // $finalValue = [$finalExtra,$finalAgree,$finalConscient,$finalNeuro,$finalOpen];
        $finalValue = $finalExtra . ',' . $finalAgree . ',' . $finalConscient . ',' . $finalNeuro . ',' . $finalOpen;
        // dd($finalValue);

        $client = new Client([
            'base_uri' => 'http://localhost:5000', // Ganti dengan URL Flask API
            // 'timeout'  => 2.0,
        ]);

        $response = $client->get('/predict-tweets', [
            'json' => [
                'username' => $username,
                'test_result' => $finalValue,
            ]
        ]);
        
        $data = $response->getBody()->getContents();

        $data = json_decode($data, true);

        dd($data);
    }

    public function summarizeCandidate()
    {
        $candidateDescription = 'Farrel merupakan fresh graduate dari Universitas Brawijaya jurusan Teknik Elektro yang fokus pada Control Engineering dan mendapatkan predikat Cumlaude dengan IPK 3.86/4.00. Ia memiliki ketertarikan terhadap perkembangan teknologi khususnya di bidang mikrokontroler, robotika, dan computer vision dengan harapan dapat bekerja di salah satu perusahaan yang bergerak di bidang industri teknologi. Semasa kuliah, Farrel aktif mengikuti kegiatan dan organisasi yang berkaitan dengan kontrol dan robotika. Ia menjabat sebagai programmer senior di Tim Robotika Brawijaya selama tiga tahun dan telah menorehkan beberapa prestasi. Selain itu, beliau aktif mengajarkan praktikum kepada mahasiswa sekaligus menjadi asisten laboratorium di dua laboratorium yang berbeda. Pengalaman kerja terakhirnya sebagai software engineer di perusahaan startup yang bergerak di industri teknologi kesehatan dengan tanggung jawab mengelola aplikasi web yang berfungsi sebagai rekam medis pasien berbasis elektronik. Kemampuan proaktif, berorientasi pada detail, dan cepat belajar adalah sifat terbesarnya yang membuatnya mampu beradaptasi dengan baik di lingkungan apa pun.';

        $client = new Client([
            'base_uri' => 'http://localhost:5000', // Ganti dengan URL Flask API
            // 'timeout'  => 2.0,
        ]);

        $response = $client->get('/summ', [
            'json' => [
                'text' => $candidateDescription,
            ]
        ]);
        
        $data = $response->getBody()->getContents();

        // $data = json_decode($data, true);

        dd($data);
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
