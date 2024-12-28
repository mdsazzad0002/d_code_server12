<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\PostReport;
use App\Models\Report;
use App\Models\ReportType;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'details' => 'required',
            'reporter_id' => 'required',

        ]);

        $report = new Report;
        $report->user_id = $request->user_id ?? 0;
        $report->reporter_id = $request->reporter_id;
        $report->details = $request->details;
        $report->status = 1;
        $report->page_url =  $request->page_url ?? '';
        $report->user_status = 1;
        $report->save();
        toastr()->success('Successfully reported!', 'Congrats');
        return back();
    }




    public function helpdesk_create(){

        return view('frontend.helpdesk.create');
    }





    public function postreportstore(Request $request){
        
        $report = new PostReport();
        $report->name = $request->post_id;
        $report->report_type = $request->report_type;
        $report->url = $request->page_url;
        $report->creator = $request->reporter_id;
        $report->comment = $request->details;
        $report->save();

        toastr()->success('Successfully reported!', 'Congrats');
        return back();
    }
}
