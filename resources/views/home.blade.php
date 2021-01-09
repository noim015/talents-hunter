@extends('layouts.app')

@section('content')


<div class="mainbg">
    

<div class="container">
    <div class="row" data-aos="fade-right" data-aos-delay="100">
        <div class="col-md-6 userpro_left">
            
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li><img src="{{ Storage::url(Auth::user()->profile_pic) }}" width="150px" alt=""> </li>
                        <li><label class="label" >Name:</label> {{ Auth::user()->name }}</li>
                        <li><label class="label" >Email:</label> {{ Auth::user()->email }}</li>
                        <li><label class="label" >Phone:</label> {{ Auth::user()->mobile }}</li>
                        <li><label class="label" >Experienced In:</label> {{ Auth::user()->skill }}</li>
                        
                    </ul>

              
        </div>

        <div class="col-md-6 userpro_right">
        <div class="col-md-12"><h2>Personal Info</h2></div>
        <ul>
                        
                        <li><label class="label" >Place Of Birth:</label> {{ Auth::user()->place_of_birth }}</li>
                        <li><label class="label" >Date Of Birth:</label> {{ Auth::user()->date_of_birth }}</li>
                        <li><label class="label" >Gender:</label> {{ Auth::user()->gender }}</li>
                        <li><label class="label" >Marital Status:</label> {{ Auth::user()->marital_status }}</li>
                        <li><label class="label" >Blood Group:</label> {{ Auth::user()->blood_group }}</li>
                        <li><label class="label" >Religion:</label> {{ Auth::user()->religion }}</li>
                        <li><label class="label" >Nationality:</label> {{ Auth::user()->nationality }}</li>
                        <li><label class="label" >Additional Mobile:</label> {{ Auth::user()->additional_mob }}</li>
                       
                    </ul>
           </div>
		</div>
		
		
		
		
		 <div class="row" data-aos="fade-left" data-aos-delay="100">
        <div class="col-md-6 userpro_right">
            
                    

                    <ul>
                        <li><label class="label" >Graduated In: </label> <span>{{ Auth::user()->bsc_subject }}</span></li>
            <li><label class="label" >Graduation Year: </label> <span>{{ Auth::user()->bsc_passing_year }}</span></li>
            <li><label class="label" >Graduation Result: </label><span> {{ Auth::user()->bsc_gpa }}</span></li>
            <li><label class="label" >Graduated From: </label> <span>{{ Auth::user()->university_name }}</span></li>
            <li><label class="label" >College Name: </label><span> {{ Auth::user()->college_name }}</span></li>
            <li><label class="label" >Passing Year: </label><span> {{ Auth::user()->hsc_p_year }}</span></li>
            <li><label class="label" >School Name: </label><span> {{ Auth::user()->school_name }}</span></li>
            <li><label class="label" >Passing Year: </label><span> {{ Auth::user()->ssc_p_year }}</span></li>
                        
                    </ul>

              
        </div>

        <div class="col-md-6 userpro_right">
        <div class="col-md-12"><h2>About Me</h2></div>
               <p>{{ Auth::user()->about }}</p>
               <br/>
           </div>
		</div>
		
		<br/>
		
		

    <a  class="btn-primary btn" href="{{ route('profile.update') }}">Update</a>

</div>
</div>
<footer style="background:#000;color:#fff;text-align:center;padding:25px 0">
<p>
            
            Copyright &copy;  by <a href="#" target="_blank" >Imtiaz</a>
           
            </p>
</footer>
@endsection
