@extends('user.layouts.index')

<link href="{{asset('css/index.css')}}" rel="stylesheet">
@section('default')










<section>
  <head>
    <title>Home</title>
  </head>
    <div class="fstbanner">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="fstbannerdata">
              <h1>PROCESS <span class="bannertext">IMPROVEMENT</span> <br> AND PROFESSIONAL <br> <span class="bannertext">ACQUISITIONS</span></h1>
            </div>
            <div class="bannerclick">
              {{-- <button type="button" class="btn btn-primary enroll">ENROLL NOW</button> --}}
              <a href="{{asset('student/registration')}}"><button type="button" class="btn btn-primary enroll">ENROLL NOW</button></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="bannerimg">
              <img src="{{asset('images/headerimage.png')}}" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="pointsarea">
      <div class="container">
  
        <div class="row">
          <div class="col-sm-12">
            <div class="pointbox">
              <div class="pointboximg">
                <img src="{{asset('images/intensive.png')}}" class="img-responsive">
              </div>
              <div class="pointboxdata">
                <h3>
                 <span class="under">INTENSIVE</span> AND CONVENIENT
                </h3>
                <p>
                  Our training is given intensive approach and conducted in a convenient manner
                  as you learn in your pace.
                </p>
              </div>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-12">
            <div class="pointbox">
              <div class="pointboximg">
                <img src="{{asset('images/quizes.png')}}" class="img-responsive">
              </div>
              <div class="pointboxdata">
                <h3 class="double">
                 <span class="under">INTERESTING</span> QUIZZES
                </h3>
                <p>
                  Interesting quiz that motivates, excites and enhances your learning on your
                  chosen course as you progress along.
                </p>
              </div>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-12">
            <div class="pointbox">
              <div class="pointboximg">
                <img src="{{asset('images/premium.png')}}" class="img-responsive">
              </div>
              <div class="pointboxdata">
                <h3 class="doubles">
                 <span class="under">PREMIUM</span> MATERIAL
                </h3>
                <p>
                  Study materials from top rated experts. You can be best assured of materials
                  that propels you to succeed faster.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
     <div class="coursearea">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="coursehead">
               <h3>OUR POPULAR COURSES</h3>
             </div>
           </div>
         </div>
  
         <div class="row">
           <div class="col-sm-4">
             <div class="coursebox">
               <div class="courseboximg">
                <img src="{{asset('images/securitypro.png')}}" class="img-responsive">
               </div>
               <div class="courseboxsdata">
                 <h4>
                  SECURITY PRO
                 </h4>
                 <p>
                  This course is designed to help
                  you understand the Information
                  security landscape and will
                  prepare you to become a
                  security professional...
                 </p>
               </div>
             </div>
           </div>
  
           <div class="col-sm-4">
            <div class="coursebox">
              <div class="courseboximg">
               <img src="{{asset('images/ethicalhacking.png')}}" class="img-responsive">
              </div>
              <div class="courseboxsdata">
                <h4>
                  ETHICAL HACKING
                </h4>
                <p>
                  This course is to allow
                  students and IT professionals
                  to move into the cybersecurity
                  field with a solid understanding
                  of ethical hacking...
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-sm-4">
            <div class="coursebox">
              <div class="courseboximg">
               <img src="{{asset('images/networkpro.png')}}" class="img-responsive">
              </div>
              <div class="courseboxsdata">
                <h4>
                  NETWORK PRO
                </h4>
                <p>
                  This course prepares you for IT
                  support jobs and related IT
                  certifications. You will gain the
                  knowledge and skills you need
                  to...
                </p>
              </div>
            </div>
          </div>
         </div>
  
         <div class="row">
          <div class="col-sm-12">
            <div class="courseclick">
              <a href="{{asset('user/courses')}}" type="button" class="btn btn-primary courses">VIEW ALL COURSES</a>
            </div>
          </div>
        </div>
       </div>
     </div>
  </section>
  
  <section>
    <div class="studentsarea">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="studentshead">
              <h4>JOIN OUR</h4>
              <h3>HAPPY STUDENTS TODAY!</h3>
              <p>Join our community of amazing students and
                move your career to the next level. We have built
                an incredible students community for peer to
                peer, group learning and amazing forum for first
                hand information sharing and other resource to
                aid your training.
              </p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="studentsimg">
         
              <img src="{{asset('images/joinourstudent.png')}}" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="demandarea">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="demanddata">
              <h2>BE IN DEMAND WITH <br> OUR PROFESSIONAL TRAINING</h2>
              <p>Get Certified with our on-demand professional training that open doors <br> to opportunities you can easily leverage from within your location.</p>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-12">
            <div class="demandbox">
              <div class="demandboximg">
                <img src="{{asset('images/image-06.png')}}" class="img-responsive">
              </div>
              <div class="demandboxdata">
                <h4>
                  BUILD RELEVANT SKILLS
                </h4>
                <p>
                  Build and acquire relevant skills and portfolio for professional acceptance and equal opportunities for success.
                </p>
              </div>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-12">
            <div class="demandbox">
              <div class="demandboximg">
                <img src="{{asset('images/image-07.png')}}" class="img-responsive">
              </div>
              <div class="demandboxdata">
                <h4>
                  GET THE RIGHT PATH FROM THE BEST LEARNING PLATFORM
                </h4>
                <p>
                  Our job is to provide you with the right learning platform so you can easily pursue your passion and succeed in your professional field.
                </p>
              </div>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-12">
            <div class="demandbox">
              <div class="demandboximg">
                <img src="{{asset('images/image-08.png')}}" class="img-responsive">
              </div>
              <div class="demandboxdata">
                <h4 class="smallright">
                  LEARN FROM THE PROFESSIONALS
                </h4>
                <p class="smallright">
                  Our in-house professionals certified trainers are always on stand by to impact incredible knowledge with first hand information that guarantees your success.                
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="reviewsarea">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="reviewshead">
              <h3>STUDENT REVIEWS</h3>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-4">
            <div class="reviewboxone">
              <div class="reviewboxdata">
                <p>
                  I had a great time at
                  HRS when I enrolled on
                  one of it's courses and
                  got certified. The
                  training was fun and
                  very exciting as I
                  enjoyed every moment.
                </p>
              </div>
              <div class="reviewline"></div>
              <div class="reviewafterline">
                <h4>KELVIN BLACK</h4>
                <h5>DALLAS, USA</h5>
              </div>
              <div class="reviewlineimg">
                <img src="{{asset('images/star.png')}}" class="img-responsive">
              </div>
            </div>
          </div>
  
          <div class="col-sm-4">
            <div class="reviewboxtwo">
              <div class="reviewboxdata">
                <p>
                  I have always wanted
                  to be certified in
                  Microsoft, I was super
                  excited when I finally
                  achieve my goal
                  through training with
                  HRS Academy.
                </p>
              </div>
              <div class="reviewline"></div>
              <div class="reviewafterline">
                <h4>ZASHA SWAN</h4>
                <h5>AUSTRALIA</h5>
              </div>
              <div class="reviewlineimg">
                <img src="{{asset('images/star.png')}}" class="img-responsive">
              </div>
            </div>
          </div>
  
          <div class="col-sm-4">
            <div class="reviewboxthree">
              <div class="reviewboxdata">
                <p>
                  I have always dreamt of
                  building my career by
                  adding some
                  professional courses
                  into my portfolio. I
                  achieved that through
                  HRS Academy.
                </p>
              </div>
              <div class="reviewline"></div>
              <div class="reviewafterline">
                <h4>KATIE ROSE</h4>
                <h5>JAPAN</h5>
              </div>
              <div class="reviewlineimg">
                <img src="{{asset('images/star.png')}}" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>








@endsection