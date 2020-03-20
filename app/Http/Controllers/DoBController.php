<?php

namespace App\Http\Controllers;

use App\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoBController extends Controller
{
    public function index(Request $request){
        return view('steps.PatientDetails.AgeQuestion');
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
        return redirect('/what-is-your-phone-number');
    }

    public function PhoneNumberIndex(){
        return view('steps.PatientDetails.PhoneNumberQuestion');
    }

    public function PhoneNumberStore(Request $request){
        $phoneNumber = $request->input('phone-number');
        return redirect('/what-is-your-post-code');
    }

    public function PostCodeIndex(){
        return view('steps.PatientDetails.PostCodeQuestion');
    }

    public function PostCodeStore(Request $request){
        $postCode = $request->input('post-code');
        return redirect('/what-was-your-sex-at-birth');
    }

    public function SexAtBirthIndex(){
        return view('steps.PatientDetails.SexAtBirthQuestion');
    }

    public function SexAtBirthStore(Request $request){
        $sexAtBirth = $request->input('sex-at-birth');
        return redirect('/have-you-already-been-tested-for-coronavirus');
    }
}
