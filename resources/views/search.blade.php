@extends('layouts.app')

@section('content')

       <div class="mainbg2">
       <div class="container">
        
       <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>Find In-demand talent</h1>
            <form action="{{ route('search') }}" method="GET">
              <div class="row">
                   <div class="col-md-10">
                       <input type="text" class="form-control border-0 searchform" name="search" placeholder="Required skill name or title, preferred city or location" required>
                   </div>
                   <div class="col-md-2">
                   <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
                   </div>
              </div>
              
            </form>
          </div>
        </div>
     <br/>
        
     <section id="team" class="team">
      <div class="container">
      <div class="row">
             
              @if($posts->count())
                  @foreach($posts as $user)
                
  
                

                  <div class="col-md-4">


               
               <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="{{ Storage::url($user->profile_pic) }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{ ($user->name ) }}</h4>
                    <span>{{ ($user->skill ) }}</span>
                    <p><span class="text-danger py-2 px-4 rounded"> {{ ($user->availability ) }} </span></p>
                    <a href="{{ route('projects.show', $user->id) }}" class="border border-warning text-success py-2 px-4 rounded">View</a>
                    <div class="social">
                      <a href="{{ ($user->linkedin ) }}"><i class="ri-linkedin-fill"></i></a>
                      <a href="{{ ($user->facebook ) }}"><i class="ri-facebook-fill"></i></a>
                      <a href="{{ ($user->twitter ) }}"><i class="ri-twitter-fill"></i></a>
                      <a href="mailto:{{ ($user->email ) }}"><i class="ri-mail-fill"></i></a>
                      
                    </div>
                  </div>
                </div>
               

              </div>




  
  
  
                  @endforeach
              @else
              <div class="col-md-12">
              <div class="notfound">
              Result not found.
              </div>


              </div>
              
              @endif
         
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