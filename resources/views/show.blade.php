@extends('layouts.app')

@section('content')
         <div class="unit-5 overlay" style="background-image: url('{{ Storage::url($user1->banner) }}');background-size:cover;padding:7% 0">
           <div class="container text-center">
             <h2 class="mb-0">{{ $user1->skill }}</h2>        
           </div>
        </div>



    
    
    

    <div class="site-section bg-light" >
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <div class="p-5 bgwhite" data-aos="fade-right" data-aos-delay="100">

              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">{{ $user1->name }}</h2>
                 <div class="badge-wrap">
                  <span class="border border-warning text-warning py-2 px-4 rounded">{{ $user1->availability }}</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span>{{ $user1->skill }}</div>
                 <div><span class="fl-bigmug-line-big104"></span>|  <span> {{ $user1->current_city }}</span></div>
               </div>
              </div>


            
            
            
          
              
              <p>{{ $user1->about }}</p>

              
            </div>
          </div>

          <div class="col-lg-4">           
            
            <div class="p-4 mb-3 bgwhite contactinfos" data-aos="fade-left" data-aos-delay="100">
              
              <span><img src="{{ Storage::url($user1->profile_pic) }}" width="150px" alt=""></span>              
              <div class="social_icons">
              <a href="{{ $user1->facebook }}"><i class="icofont-facebook icofont-4x"></i></a>
              <a href="{{ $user1->twitter }}"><i class="icofont-twitter icofont-4x"></i></a>
              <a href="{{ $user1->linkedin }}"><i class="icofont-linkedin icofont-4x"></i></a>              
              <p class="mt-5"><a href="mailto:{{ $user1->email }}" class="btn btn-primary  py-2 px-4">Contact Now</a></p>
              </div>
             
            </div>
          </div>
        </div>

        

       <div data-aos="fade-right" data-aos-delay="100">
      <div class="row gurdian_info">
      <div class="col-md-12 ">
      <h2>Academic Info</h2>
      </div>
        <div class="col-md-6 Academicinfo">
        
          <ul>
            <li><label>Graduated In: </label> <span>{{ $user1->bsc_subject }}</span></li>
            <li><label>Graduation Year: </label> <span>{{ $user1->bsc_passing_year }}</span></li>
            <li><label>Graduation Result: </label><span> {{ $user1->bsc_gpa }}</span></li>
            <li><label>Graduated From: </label> <span>{{ $user1->university_name }}</span></li>
          </ul>
        </div>


       
        <div class="col-md-6 Academicinfo">
       
          <ul>
            <li><label>College Name: </label><span> {{ $user1->college_name }}</span></li>
            <li><label>Passing Year: </label><span> {{ $user1->hsc_p_year }}</span></li>
            <li><label>School Name: </label><span> {{ $user1->school_name }}</span></li>
            <li><label>Passing Year: </label><span> {{ $user1->ssc_p_year }}</span></li>
          </ul>
        </div>
        
        </div>
       </div>
    

       <div data-aos="fade-right" data-aos-delay="100">
      <div class="row gurdian_info">
      <div class="col-md-12 ">
      <h2>Personal Info</h2>
      </div>
        <div class="col-md-6 Academicinfo">
        
          <ul>
            <li><label>Place Of Birth: </label> <span>{{ $user1->place_of_birth }}</span></li>
            <li><label>Date Of Birth: </label> <span>{{ $user1->date_of_birth }}</span></li>
            <li><label>Marital Status: </label><span> {{ $user1->marital_status }}</span></li>
            <li><label>Religion: </label> <span>{{ $user1->religion }}</span></li>
          </ul>
        </div>


       
        <div class="col-md-6 Academicinfo">
       
          <ul>
            <li><label>Gender: </label><span> {{ $user1->gender }}</span></li>
            <li><label>Blood Group: </label><span> {{ $user1->blood_group }}</span></li>
            <li><label>Nationality: </label><span> {{ $user1->nationality }}</span></li>
            <li><label>Additional Contact No: </label><span> {{ $user1->additional_mob }}</span></li>
          </ul>
        </div>
        
        </div>
       </div>
       </div>
       </div>
       
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
           
            
			<div class="row">
			
			<div class="col-lg-4 mt-4">
                <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>{{ $user1->current_address }}</p>
            </div>
              </div>
            
              <div class="col-lg-4 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{ $user1->email }}</p>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>{{ $user1->mobile }}</p>
                </div>
              </div>
           
               </div>
           
          </div>
        </div>

      </div>
    </section>


    <footer style="background:#000;color:#fff;text-align:center;padding:20px 0">
      <p>
         Copyright &copy;  by <a href="#" target="_blank" >Imtiaz</a>
      </p>
    </footer>
    
@endsection
