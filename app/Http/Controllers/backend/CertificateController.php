<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $certificates = Certificate::query();
            return DataTables::of($certificates)
                ->addColumn('action', function ($row) {
                    $action = '';
                    $action .= '<button type="button" class="btn btn-primary form" data-toggle="modal" data-target="#modal_setup"  data-title="certificates Edit"  data-action="'. route('admin.certificate.update', $row->id) .'"   data-socuce="'. route('admin.certificate.edit', $row->id ) .'"  data-method="put" > <i class="fa fa-eye" aria-hidden="true"></i> Edit</button>  ';
                    $action .= '<button type="button" class="btn btn-danger delete"  data-target="#modal_setup_delete"  data-action="'. route('admin.certificate.destroy', $row->id) .'" data-method="delete" >  <i class="fa fa-trash"></i> Delete</button>';
                    $action .= '<a href="'.route('admin.certificate.pdf',$row->id).'" title="PDF">
                        <button class="btn btn-primary btn-sm mr-1"><i class="fa fa-file-pdf-o"></i> PDF</button>
                    </a>';

                    return  $action;
            })
            ->addColumn('gender', function ($row) {
                return $row->gender == 1 ? 'Male' : 'Female';
            })
            ->rawColumns(['action','gender'])
            ->make(true);
        }
        return view('backend.certificate.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'father_name'=>'nullable',
            'mother_name'=>'nullable',
            'course'=>'required',
        ]);

        $certificate = new Certificate;
        $certificate->name = $request->name;
        $certificate->father_name = $request->father_name;
        $certificate->mother_name = $request->mother_name;
        $certificate->course = $request->course;
        $certificate->reg_no = $request->reg_no;
        $certificate->dob = $request->dob;
        $certificate->gender = $request->gender;
        $certificate->institute = $request->institute;
        $certificate->issue_date = $request->issue_date;
        $certificate->save();
        toastr()->success('Successfully Created Certificate!', 'Congrats');
        return redirect()->route('admin.certificate.index');
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
    public function edit(Certificate $certificate)
    {
        return view('backend.certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        // return $request->all();
        $request->validate(['name'=>'required']);
        $certificate->update([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'course'=>$request->course,
            'reg_no'=>$request->reg_no,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'institute'=>$request->institute,
            'issue_date'=>$request->issue_date,
            ]);
        return redirect()->route('admin.certificate.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate = Certificate::find($certificate->id);
        $certificate->delete();
        toastr()->success('Successfully Deleted Certificate!', 'Congrats');
        return redirect()->route('admin.certificate.index');
    }

    public function certificatePdf($id)
    {
        $certificate = Certificate::findOrFail($id);

        //     $data = [
        //         'certificate' => $certificate,
        //     ];

        // $pdf = PDF::loadView(
        //     'backend.certificate.pdf',
        //     $data,
        //     [],
        //     [
        //         // 'format' => 'A4-P',
        //         // 'orientation' => 'P',
        //         // 'margin-left' => 1,

        //         '', // mode - default ''
        //         '', // format - A4, for example, default ''
        //         0, // font size - default 0
        //         '', // default font family
        //         1, // margin_left
        //         1, // margin right
        //         1, // margin top
        //         1, // margin bottom
        //         1, // margin header
        //         1, // margin footer
        //         'L', // L - landscape, P - portrait

        //     ]
        // );
        // $name = \Carbon\Carbon::now()->format('d-m-Y');

        // return $pdf->stream($name . '.pdf');
        return view('backend.certificate.pdf', compact('certificate'));
    }
}
