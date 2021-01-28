@extends('user.layouts.index')

<link href="{{asset('css/courses.css')}}" rel="stylesheet">
@section('default')









<section>
    <div class="coursesarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="coursesareahead">
                        <h2>HRS CERTIFICATION COURSES</h2>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section>

<section>
    <div class="coursesback">
        <div class="container">

        <div class="row">                
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses1.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS NETWORK PRO</h3>
                        <p>This course prepares you for IT
                            support jobs and related IT
                            certifications. You will gain the
                            knowledge and skills you need to
                            install, configure, and maintain a
                            network for a small business.
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrsnetwork.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses2.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS DESKTOP PRO</h3>
                        <p>HRS Desktop Pro provides an
                            innovative and effective way
                            to practice using Microsoft
                            Office applications and learn
                            the basics of computer
                            technology.
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrsdesktop.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses3.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS LINUX PRO</h3>
                        <p>This course prepares you to
                            enter an IT career involving
                            Linux. You will gain the
                            knowledge and skills you need
                            to install, configure, operate,
                            and troubleshoot...
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrslinux.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row onerow">                
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses4.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS PC PRO</h3>
                        <p>This course is designed for
                            anyone who wants to increase
                            their computer skills and
                            knowledge, even if you’re just
                            starting out. Employers search
                            for IT professionals with valid
                            real-world skills, so we’ll teach
                            you the knowledge and skills...
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrspc.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses5.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS OFFICE PRO</h3>
                        <p>HRS Office Pro provides an
                            innovative and effective way
                            to practice using Microsoft
                            Office applications and learn
                            the basics of computer
                            technology. Simulated labs
                            help students acquire and
                            retain the basic skills.
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrsoffice.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses6.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS SERVER PRO</h3>
                        <p>This course is designed to
                            prepare you for the following
                            certification exams:<br>
                            TestOut Server Pro 2016
                            Microsoft Exam 70-740: Install
                            and configure Windows Server
                            2016
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrsserver.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row onerow">                
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses7.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS IT CLIENT PRO</h3>
                        <p>This course will help build
                            student skills to support
                            Windows 10 in any
                            environment and helps them
                            prepare for managing
                            desktop exams.
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrsitclint.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses8.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS SECURITY PRO</h3>
                        <p>This course is designed to
                            help you understand the
                            Information security
                            landscape and will prepare
                            you to become a security
                            professional.
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrssecurity.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses9.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS ETHICAL HACKING</h3>
                        <p>This course is to allow
                            students and IT
                            professionals to move into
                            the cybersecurity field with a
                            solid understanding of
                            ethical hacking.
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrshacking.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row onerow">                
            <div class="col-sm-4">
                <div class="coursesbox">
                    <div class="coursesboximg">
                        <img src="{{asset('images/courses10.png')}}" class="img-responsive">
                    </div>
                    <div class="coursesboxdata">
                        <h3>HRS LEARNING TOOLS<br>INTEROPERABILITY LTI</h3>
                        <p>This course will help build
                            student skills to support
                            Windows 10 in any
                            environment and helps them
                            prepare for managing
                            desktop exams.
                        </p>
                    </div>
                    <div class="coursesboxclick">
                        <a href="http://localhost/hrs_backend/hrslti.php"><button type="button" class="btn btn-primary readarea">READ MORE</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
        </div>

        </div>
    </div>
</section>













@endsection