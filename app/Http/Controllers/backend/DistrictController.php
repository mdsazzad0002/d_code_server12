<?php

namespace App\Http\Controllers\backend;

use App\Models\District;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $districts = District::orderBy('created_at', 'desc'); // Fetch the latest records first
            return DataTables::of($districts)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $action = '';

                    $action .= '<button type="button" class="btn btn-primary form" data-toggle="modal" data-target="#modal_setup"  data-title="District Edit"  data-action="' . route('admin.district.update', $row->id) . '"   data-socuce="' . route('admin.district.edit', $row->id) . '"  data-method="put" > <i class="fa fa-eye" aria-hidden="true"></i> Edit</button>  ';


                    $action .= '<button type="button" class="btn btn-danger delete"  data-target="#modal_setup_delete"  data-action="' . route('admin.district.destroy', $row->id) . '" data-method="delete" >  <i class="fa fa-trash"></i> Delete</button>';

                    return  $action;
                })
                ->make(true);
        }
        return view('backend.district.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.district.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:districts,name',
        ]);
        // $request->validate(['name'=>'required|unique:districts,name']);
        if (!$validator->fails()) {
            $category = new District();
            $category->name = $request->name;
            $category->creatorId = auth()->user()->id;
            $category->save();



            toastr()->success('Successfully Created District!', 'Congrats');
        } else {
            toastr()->error('Oops! District Already Exists!', 'Oops!');
        }

        return redirect()->route('admin.district.index');
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
        $district = District::find($id);
        return view('backend.district.edit', compact('district'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $district = District::find($id);
        $request->validate([
            'name' => 'required|unique:districts,name,' . $district->id,
        ]);


        $district->update([
            'name' => $request->name,
            'creatorId' => auth()->user()->id,
            'status' => $request->status,
        ]);

        toastr()->success('Successfully Updated District!', 'Congrats');

        return redirect()->route('admin.district.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $district = District::find($id);
        $district->delete();
        toastr()->success('Successfully Deleted District!', 'Congrats');
        return redirect()->route('admin.district.index');
    }
}
