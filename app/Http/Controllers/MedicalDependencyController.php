<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalDependencyController extends Controller
{
    public function DoYouDependOnMedicalAssistanceIndex(){
        return view('steps.MedicalDependency.DoYouDependOnMedicalAssistanceQuestion');
    }

    public function DoYouDependOnMedicalAssistanceStore(Request $request){
        if($request->input('dependant') == 'yes'){
            return redirect('/do-you-have-enough-medication');
        } else {
            return redirect('/do-you-have-any-dependants');
        }
    }

    public function DoYouHaveEnoughMedicationIndex(){
        return view('steps.MedicalDependency.DoYouHaveEnoughMediciation');
    }

    public function DoYouHaveEnoughMedicationStore(Request $request){
        if($request->input('stockpiled') == 'yes'){

        } else {

        }
        return redirect('/do-you-have-any-dependants');
    }
}
