<?php

namespace App\Http\Controllers;

use App\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoBController extends Controller
{
    public function index(Request $request){
        return view('steps.AgeQuestion');
    }

    public function store(Request $request){
        $request->session()->reflash();
        $dobd = $request->input('date-of-birth-day');
        $dobm = $request->input('date-of-birth-month');
        $doby = $request->input('date-of-birth-year');
        $dob = Carbon::createFromDate($doby, $dobm, $dobd);
        Record::where('session', $request->session()->getId())->update([
            'date_of_birth' => $dob
        ]);
        return redirect('/symptoms');
    }
}
