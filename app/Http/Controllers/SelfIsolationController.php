<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelfIsolationController extends Controller
{
    public function AreYouSelfIsolatingIndex(){
        return view('steps.SelfIsolating.AreYouSelfIsolatingQuestion');
    }

    public function AreYouSelfIsolatingStore(Request $request){
        if($request->input('self-isolating') == 'yes'){
            return redirect('/where-are-you-self-isolating');
        } else {
            return redirect('/do-you-depend-on-medical-assistance');
        }
    }

    public function WhereAreYouSelfIsolatingIndex(){
        return view('steps.SelfIsolating.WhereAreYouSelfIsolating');
    }

    public function WhereAreYouSelfIsolatingStore(Request $request){
        $selfIsolationPostCode = $request->input('post-code');
        return redirect('/do-you-depend-on-medical-assistance');
    }
}
