<?php

namespace App\Http\Controllers;


use App\Models\post;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use League\CommonMark\Node\Node;
use App\Http\Controllers\Controller;


class editorLiveController extends Controller
{
    public function index(Request $request){
        $category = category::where('status', 1)->get();
        return view('frontend.editor.index', ['category'=>$category]);
    }

    public function source(Request $request){
        $request['tryit'] = 8;
        if($request->has('tryit')){
            $post_find = post::find($request->tryit);
            $post_find=             $post_find->details;

            return view('frontend.editor.partials.source', compact('request','post_find'));
        }else{
            return view('frontend.editor.partials.source', compact('request'));
        }

    }
    public function output(Request $request){
        // return $request->css;

        return view('frontend.editor.partials.output', compact('request'));

    }
}
