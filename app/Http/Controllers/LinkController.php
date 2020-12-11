<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Link;
use App\Models\Comments;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function show(Request $request) {
        if( isset($request->id) ) {
            $link = Link::select('*')->where('id', $request->id)->get();
            $comments = Comments::select('*')->where('_link_id', $request->id)->get();
            return view('link.show', [
                'link'=>$link[0],
                'comment' => $comments
            ]);
        }else{
            $link = Link::all();
            return view('link.showAll', [
                'link'=>$link
            ]);
        }
    }

    public function create() {
        return view('link.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'url' => 'required|url'
        ]);
        $link = new Link;
        $link->name = $validation['name'];
        $link->url = $validation['url'];
        $link->user_id = Auth::user()->id;
        $link->save();
    }
}
