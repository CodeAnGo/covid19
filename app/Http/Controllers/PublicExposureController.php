<?php

namespace App\Http\Controllers;

use App\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PublicExposureController extends Controller
{
    public function index(Request $request){
        return view('steps.PublicExposureQuestion');
    }

    public function store(Request $request){
        $record = Record::where('session', $request->session()->getId())->first();

        $led = $request->input('last-exposure-day');
        $lem = $request->input('last-exposure-month');
        $ley = $request->input('last-exposure-year');
        $le = Carbon::createFromDate($ley, $lem, $led);
        Record::where('session', $request->session()->getId())->update([
            'date_of_birth' => $le
        ]);

        if ($record->severity == true){
            return redirect('/call-111');
        } else {
            return redirect('/self-isolation');
        }
    }
}
