<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function showprofile(){
          return view('updateprofile');
    }


    public function updateprofile(Request $request){
          
        $user = User::findOrFail(auth()->user()->id);
        toast('Your profile updated successfully!','success');


       

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->current_city = $request->input('current_city');
        $user->current_address = $request->input('current_address');
        $user->current_postcode = $request->input('current_postcode');
        $user->permanent_address = $request->input('permanent_address');
        $user->permanent_city = $request->input('permanent_city');
        $user->permanent_postcode = $request->input('permanent_postcode');
        $user->ssc_gpa = $request->input('ssc_gpa');
        $user->school_name = $request->input('school_name');
        $user->ssc_p_year = $request->input('ssc_p_year');
        $user->ssc_group = $request->input('ssc_group');
        $user->hsc_gpa = $request->input('hsc_gpa');
        $user->college_name = $request->input('college_name');
        $user->hsc_p_year = $request->input('hsc_p_year');
        $user->hsc_group = $request->input('hsc_group');
        $user->bsc_gpa = $request->input('bsc_gpa');
        $user->bsc_passing_year = $request->input('bsc_passing_year');
        $user->university_name = $request->input('university_name');
        $user->bsc_subject = $request->input('bsc_subject');
        $user->job_experience = $request->input('job_experience');
        $user->skill = $request->input('skill');
        $user->about = $request->input('about');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->place_of_birth = $request->input('place_of_birth');
        $user->gender = $request->input('gender');
        $user->marital_status = $request->input('marital_status');
        $user->blood_group = $request->input('blood_group');
        $user->religion = $request->input('religion');
        $user->nationality = $request->input('nationality');
        $user->father_name = $request->input('father_name');
        $user->father_mob = $request->input('father_mob');
        $user->mother_name = $request->input('mother_name');
        $user->mother_mob = $request->input('mother_mob');
        $user->mobile = $request->input('mobile');
        $user->additional_mob = $request->input('additional_mob');
        $user->interest = $request->input('interest');
        $user->facebook = $request->input('facebook');
        $user->twitter = $request->input('twitter');
        $user->linkedin = $request->input('linkedin');
        $user->availability = $request->input('availability');

       
       
       
      if($request->hasFile('profile_pic')){
             $user->profile_pic = $request->profile_pic->store('public/images');
            
      }
      else if($request->hasFile('banner')){
       
        $user->banner = $request->banner->store('public/images');
 }

    


      
     
        
        $user->save();        
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);

    }


    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = User::query()
             
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('city', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('posts'));
    }
    



}
