<?php

namespace App\Http\Controllers\backend;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $reports = Report::query();
            return DataTables::of($reports)
                ->addColumn('action', function ($row) {
                    $action = '';

                    $action .= '<button type="button" class="btn btn-primary form" data-toggle="modal" data-target="#modal_setup"  data-title="Report Edit"  data-action="'. route('admin.report.update', $row->id) .'"   data-socuce="'. route('admin.report.edit', $row->id ) .'"  data-method="put" > <i class="fa fa-eye" aria-hidden="true"></i> Edit</button>  ';


                    $action .= '<button type="button" class="btn btn-danger delete"  data-target="#modal_setup_delete"  data-action="'. route('admin.report.destroy', $row->id) .'" data-method="delete" >  <i class="fa fa-trash"></i> Delete</button>';
                    return  $action;
            })
            ->make(true);
        }
        return view('backend.report.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Report::find($id);
        return view('backend.report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::find($id);

        $report->update([
            'details' => $request->details,
            'status' => $request->status,
        ]);

        toastr()->success('Successfully Updated Report!', 'Congrats');

        return redirect()->route('admin.report.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Report::find($id)->delete();
        return back();
    }
}
