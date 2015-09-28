<?php

namespace App\Http\Controllers;

use App\Crime;
use App\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;


class CrimesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $crimes = Crime::all()->where('active', 1);
        $crimesTask = Crime::all()->where('active', 1);
        $activeCrimes = count($crimesTask);
        return view('home', ['crimes' => $crimes,'crimesTask' => $crimesTask,
            'activeCrimes' => $activeCrimes]);
    }

    public function crimes()
    {
        $crimes = Crime::all();
        $crimesTask = Crime::all()->where('active', 1);
        $activeCrimes = count($crimesTask);
        return view('crimes', ['crimes' => $crimes, 'page_title' => 'Crimes',
            'crimesTask' => $crimesTask, 'activeCrimes' => $activeCrimes]);
    }

    public function viewCrime($id)
    {
        $crime = Crime::where('id', $id)->first();
        $logs = Log::all()->where('crime_id', $id);
        $crimesTask = Crime::all()->where('active', 1);
        $activeCrimes = count($crimesTask);
        return view('crime', ['crime' => $crime, 'page_title' => $crime->crime,
            'logs' => $logs, 'crimesTask' => $crimesTask, 'activeCrimes' => $activeCrimes]);
    }

    public function criminal($id)
    {
        $criminal = Log::all()->where('id', $id)->first();
        $crimesTask = Crime::all()->where('active', 1);
        $activeCrimes = count($crimesTask);
        return view('crime', ['criminal' => $criminal, 'page_title' => $criminal->name .
            ' - Player Profile', 'crimesTask' => $crimesTask, 'activeCrimes' => $activeCrimes]);
    }

    public function updateCrime(Request $request)
    {
        //$input = Request::all();
        var_dump($request->all());
        //return $input;
    }
}