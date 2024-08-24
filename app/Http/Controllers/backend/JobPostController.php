<?php

namespace App\Http\Controllers\backend;

use App\Models\JobPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $post_all = JobPost::query();
           return DataTables::of($post_all)
               ->addColumn('action', function ($row) {
                   $action = '';
                   $action .= '<button type="button" class="btn btn-primary form markdown"
                               data-toggle="modal"
                               data-target="#modal_setup"
                               data-title="Job Post Edit"
                               data-action="'.route('user-job-post.job-post.update', $row->id) .'"
                               data-socuce="'. route('user-job-post.job-post.edit', $row->id ) .'"
                               data-method="put"
                               >
                               <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                           </button>';

                           $action .='<button type="button" class="btn btn-primary view lg_view "
                               data-toggle="modal"
                               data-target="#modal_setup_view"
                               data-title="View"
                               data-socuce="'. route('admin.job-post.show', $row->id ) .'"
                               data-method="get">
                               <i class="fa fa-eye" aria-hidden="true"></i> View
                           </button>';

                            $action .= '<button type="button" class="btn btn-primary view lg_view"
                               data-toggle="modal"
                               data-target="#modal_setup_view"
                               data-title="Comment - '. $row->tilte .'"
                               data-socuce="'. route('admin.post.comment', $row->id ) .'"
                               data-method="get">
                               <i class="fas fa-comment" aria-hidden="true"></i> Comments
                           </button>';

                             $action .='<button type="button" class="btn btn-danger delete"
                           data-target="#modal_setup_delete"
                           data-action="'. route('admin.job-post.destroy', $row->id) .'"
                            data-method="delete"
                           >
                             <i class="fa fa-trash"></i> Delete</button>';
                   return $action;
               })
               ->addColumn('image', function ($row) {
                   return '<img src="' . dynamic_asset($row->uploads_id) . '"/>';
           })
           ->rawColumns(['image','action'])
           ->make(true);


       }
       return view('backend.job-post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return false;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return false;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = JobPost::find($id);
        return view('backend.job-post.partials.view', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return false;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return false;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobPost::find($id)->delete();
        return back();

    }
}
