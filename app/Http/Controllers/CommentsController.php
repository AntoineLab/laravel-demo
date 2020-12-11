<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Support\Facades\Auth;
use App\Models\Link;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function store(Request $request)
    {
        $validation = $request->validate([
            'text' => 'required'
        ]);
        $comment = new comments();
        $comment->comment = $validation['text'];
        $comment->user_id = Auth::user()->id;
        $comment->_link_id = $request->post_id;
        $comment->save();

        return redirect(route('detail',$request->post_id));
    }
}
