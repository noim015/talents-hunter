<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SearchController extends Controller
{
    public function search(Request $request){

        $search = $request->input('search');       
        $posts = User::query()
             
            ->where('skill', 'LIKE', "%{$search}%")
            ->orWhere('current_city', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('posts'));
    }



    public function show(Request $request)
    {   $user1 = User::findOrFail($request->id);
        return view('show', compact('user1'));
    }


}
