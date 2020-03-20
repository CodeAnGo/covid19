<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function DoYouWorkAwayFromYourHomeIndex(){
        return view('steps.Work.DoYouWorkAwayFromHome');
    }

    public function DoYouWorkAwayFromYourHomeStore(Request $request){
        if ($request->input('works-away') == 'yes'){
            return redirect('/what-is-the-post-code-of-your-workplace');
        } else {
            return redirect('/are-you-a-critical-worker');
        }
    }

    public function WhatIsThePostCodeOfYourWorkplaceIndex(){
        return view('steps.Work.WorkplacePostCodeQuestion');
    }

    public function WhatIsThePostCodeOfYourWorkplaceStore(Request $request){
        $workplacePostcode = $request->input('post-code');
        return redirect('/when-did-you-last-visit');
    }

    public function WhenDidYouLastVisitIndex(){
        return view('steps.Work.LastVisitToWorkQuestion');
    }

    public function WhenDidYouLastVisitStore(Request $request){
        $dolv = $request->input('day-of-last-visit');
        $molv = $request->input('month-of-last-visit');
        $yolv = $request->input('year-of-last-visit');
        $fdolv = Carbon::createFromDate($yolv, $molv, $dolv);
        return redirect('/are-you-a-critical-worker');
    }

    public function AreYouACriticalWorkerIndex(){
        return view('steps.Work.CriticalWorkerQuestion');
    }

    public function AreYouACriticalWorkerStore(Request $request){
        if($request->input('key-worker') == 'yes'){

        } else {

        }
        return redirect('/do-you-work-with-at-risk-groups');
    }

    public function DoYouWorkWithAtRiskGroupsIndex(){
        return view('steps.Work.WorkingWithRiskGroupsQuestion');
    }

    public function DoYouWorkWithAtRiskGroupsStore(Request $request){
        if($request->input('works-with-at-risk') == 'yes'){

        } else {

        }
        return redirect('/are-you-self-isolating');
    }
}
