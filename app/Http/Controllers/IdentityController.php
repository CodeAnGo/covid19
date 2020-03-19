<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    public function index(Request $request){
        return view('steps.IdentityQuestion');
    }

    public function store(Request $request){
        $nhs_patient_number = $request->input('nhs-patient-number');
        Record::where('session', $request->session()->getId())->update([
           'nhs_patient_number' => $nhs_patient_number
        ]);
        return redirect('/date-of-birth');
    }
}
