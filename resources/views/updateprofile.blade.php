@extends('layouts.app')

@section('content')


<div class="mainbg">
    

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <form action="{{ route('updateprofile') }}" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
                            <div class="form-group">
                            <div class="row">

                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" name="name" value="{{ auth()->user()->name }}" required autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Profile Picture</label>
                                    
                                <div class="col-md-12">
                                    <input id="name" type="file" class="form-control formfields" name="profile_pic" value="{{ auth()->user()->profile_pic }}" autofocus>   
                                    <code>{{ auth()->user()->profile_pic }}</code>                             
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">About</label>

                                <div class="col-md-12">
                                <textarea name="about" placeholder="Please write something here about yourself" class="form-control formfields" id="" cols="70" rows="10" >{{ auth()->user()->about }}</textarea>    
                                    
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Marital Status</label>

                                <div class="col-md-12">
                                <input type="radio" id="Married" name="marital_status" value="Married" @if(auth()->user()->marital_status=='Married') checked @endif >
                                    <label for="male">Married</label><br>
                                    <input type="radio" id="Unmarried" name="marital_status" value="Unmarried" @if(auth()->user()->marital_status=='Unmarried') checked @endif >
                                    <label for="female">Unmarried</label><br>
                                    
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">

                                <label for="name" class="col-md-4 control-label">Like To Do</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" name="interest" placeholder="Example: Watching movies, Playing football, Biking, Riding etc" value="{{ auth()->user()->interest }}" autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Blood Group</label>

                                <div class="col-md-12">
                                

                                          <select name="blood_group" id="availability">
                                             <option value="A+" @if(auth()->user()->blood_group=='A+') selected @endif >A+</option>
                                             <option value="B+" @if(auth()->user()->blood_group=='B+') selected @endif>B+</option>
                                             <option value="O+" @if(auth()->user()->blood_group=='O+') selected @endif>O+</option>
                                             <option value="AB+" @if(auth()->user()->blood_group=='AB+') selected @endif>AB+</option>
                                             <option value="A-" @if(auth()->user()->blood_group=='A-') selected @endif >A-</option>
                                             <option value="B-" @if(auth()->user()->blood_group=='B-') selected @endif>B-</option>
                                             <option value="O-" @if(auth()->user()->blood_group=='O-') selected @endif>O-</option>
                                             <option value="AB-" @if(auth()->user()->blood_group=='AB-') selected @endif>AB-</option>
                                          </select>   
                                    
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">

                                <label for="name" class="col-md-4 control-label">Place Of Birth</label>

                                <div class="col-md-12">
                                    <input id="place_of_birth" type="text" class="form-control formfields" name="place_of_birth" placeholder="Example: Town or City or Village etc " value="{{ auth()->user()->interest }}" autofocus>                                
                                </div>
                                </div>
                            </div>




                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Religion</label>

                                <div class="col-md-12">
                                

                                          <select name="religion" id="availability">
                                             <option value="Islam" @if(auth()->user()->religion=='Islam') selected @endif >Islam</option>
                                             <option value="Hinduism" @if(auth()->user()->religion=='Hinduism') selected @endif>Hinduism</option>
                                             <option value="Christian" @if(auth()->user()->religion=='Christian') selected @endif>Christian</option>
                                             <option value="Other" @if(auth()->user()->religion=='Other') selected @endif>Other</option>
                                             
                                          </select>   
                                    
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Date Of Birth: </label>

                                <div class="col-md-12">
                                    <input id="name" type="date" class="form-control formfields" name="date_of_birth" value="{{ auth()->user()->date_of_birth }}" required autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="banner" class="col-md-4 control-label">Gender</label>
                                    
                                <div class="col-md-12">

                                    <input type="radio" id="Male" name="gender" value="Male" @if(auth()->user()->gender=='Male') checked @endif >
                                    <label for="male">Male</label><br>
                                    <input type="radio" id="Female" name="gender" value="Female" @if(auth()->user()->gender=='Female') checked @endif >
                                    <label for="female">Female</label><br>

                               
                                                     
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Skill(s): </label>

                                <div class="col-md-12">
                                    <input id="name" placeholder="Web Devloping, Mobile Apps Devloping, Project Management, Accounting, Auditing etc" type="text" class="form-control formfields" name="skill" value="{{ auth()->user()->skill }}" required autofocus>                                
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Job Experience (Years): </label>

                                <div class="col-md-12">
                                    <input id="name" type="number" placeholder="If any then how many years of.." class="form-control formfields" name="job_experience" value="{{ auth()->user()->job_experience }}" required autofocus>                                
                                </div>
                                </div>
                            </div>
                           






                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Email</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" name="email" value="{{ auth()->user()->email }}" required autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Mobile: </label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" name="mobile" value="{{ auth()->user()->mobile }}" required autofocus>                                
                                </div>
                                </div>
                            </div>


                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">Graduated In</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" placeholder="Software Engineering, EEE , CSE , BBA , LLB etc" name="bsc_subject" value="{{ auth()->user()->bsc_subject }}" required autofocus>                                
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">Graduation Year</label>

                                <div class="col-md-12">
                                    <input id="name" type="date" class="form-control formfields"  name="bsc_passing_year" value="{{ auth()->user()->bsc_passing_year }}"  autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">Graduation Result (GPA)</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields"  name="bsc_gpa" value="{{ auth()->user()->bsc_gpa }}"  autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">University Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" name="university_name" value="{{ auth()->user()->university_name }}"  autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">College Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" name="college_name" value="{{ auth()->user()->college_name }}"  autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">HSC Passing Year</label>

                                <div class="col-md-12">
                                    <input id="name" type="date" class="form-control formfields" name="hsc_p_year" value="{{ auth()->user()->hsc_p_year }}"  autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">School Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" name="school_name" value="{{ auth()->user()->school_name }}"  autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="name" class="col-md-4 control-label">SSC Passing Year</label>

                                <div class="col-md-12">
                                    <input id="name" type="date" class="form-control formfields" name="ssc_p_year" value="{{ auth()->user()->ssc_p_year }}"  autofocus>                                
                                </div>
                                </div>
                            </div>
                            
                            

                           



                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Current Address: </label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" placeholder="Example: 98 R/A Dhanmondi, Dhaka, Bangladesh" name="current_address" value="{{ auth()->user()->current_address }}"  autofocus>                                
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Current City: </label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields" placeholder="Example: Dhaka, Khulna, Mymensingh etc" name="current_city" value="{{ auth()->user()->current_city }}"  autofocus>                                
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Nationality: </label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields"  name="nationality" value="{{ auth()->user()->nationality }}"  autofocus>                                
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <label for="name" class="col-md-4 control-label">Additional Contact No: </label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control formfields"  name="additional_mob" value="{{ auth()->user()->additional_mob }}"  autofocus>                                
                                </div>
                                </div>
                            </div>


                            

                            <div class="form-group">
                            <div class="row">
                                <label for="banner" class="col-md-4 control-label">Picture For Banner</label>
                                    
                                <div class="col-md-12">
                                    <input id="banner" type="file" class="form-control formfields" name="banner" autofocus> 
                                    <code>{{ auth()->user()->banner }}</code>                               
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <label for="banner" class="col-md-4 control-label">Availability</label>
                                    
                                <div class="col-md-12">
                                          <select name="availability" id="availability">
                                             <option value="Available" @if(auth()->user()->availability=='Available') selected @endif >Available</option>
                                             <option value="Not Available" @if(auth()->user()->availability=='Not Available') selected @endif>Not Available</option>
                                          </select>                   
                                </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                
                                  <div class="col-md-4"><label for="name">FB Profile Link </label> <input id="name" type="text" class="form-control formfields" name="facebook"  autofocus placeholder="https://www.facebook.com/profile_link" value="{{ auth()->user()->facebook }}">   </div>
                                 
                                  <div class="col-md-4"><label for="name">twitter Profile Link</label>  <input id="name" type="text" class="form-control formfields" name="twitter"  autofocus placeholder="https://twitter.com/profile_link" value="{{ auth()->user()->twitter }}">  </div>
                                  <div class="col-md-4"><label for="name">LinkedIn Profile Link</label>  <input id="name" type="text" class="form-control formfields" name="linkedin"  autofocus placeholder="https://www.linkedin.com/profile_link" value="{{ auth()->user()->linkedin }}">  </div>
                                </div>
                            </div>




                            <div class="form-group">
                            <div class="row">                               

                                <div class="col-md-4">
                                    <input id="name" type="submit" class="form-control btn" name="submit" value="Update" style="background:#4E2326;color:#FFD21E;font-size:25px">                                
                                </div>

                                <div class="col-md-4">
                                    <a class="back_btn" href="{{ route('home') }}" >Back</a>
                               </div>
                               </div>
                            </div>


           </form>
        </div>
        
        
        
    </div>
</div>
</div>

<footer style="background:#000;color:#fff;text-align:center;padding:25px 0">
<p>
            
            Copyright &copy;  by <a href="#" target="_blank" >Imtiaz</a>
           
            </p>
</footer>
@endsection
