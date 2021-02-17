@extends('user.layouts.index')

<link href="{{asset('css/hrspc.css')}}" rel="stylesheet">
@section('default')



<section>
    <div class="hrspcheading">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hrspcheadingdata">
                        <h2>HRS PC PRO COURSE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="hrspcback">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hrspcbackdata">
                        <h3>Course Overview</h3>
                        <p>In this course, students will learn about computer systems—how they work, how to maintain
                            them, and how to repair them.</p>
                        <p>This course is designed for anyone who wants to increase their computer skills and knowledge,
                            even if you’re just starting out. Employers
                            search for IT professionals with valid real-world skills, so we’ll teach you the knowledge
                            and skills they look for so that you can begin your career in computers.
                        </p>
                        <p>Before student take this course, it’s important to understand the prerequisites for this
                            course. We’re assume that you already know a few basic things about
                            computers. First, we’ll assume that you know how to turn a computer on.
                        </p>
                        <p>You should know how to interact with the computer using a mouse and a keyboard. And we expect
                            that you know how to run basic applications on a computer system.
                            For example, you should be able to turn on a PC, open Microsoft Word, open a particular
                            document, make changes to the document, and save the changes. We’re also
                            going to assume that you understand how to use a web browser and an email client to access
                            information on the internet. Those are all the prerequisites for this course.
                        </p>
                        <p>In addition to TestOut’s Linux Pro exam, this course also prepares you for the CompTIA Linux+
                            certification examThe purpose of this course is to provide you with the
                            equivalent knowledge of an entry-level computer technician with about 12 months of
                            on-the-job experience. To do that, we’re going to cover these topics:
                        </p>
                        <p>At the end of the course, you’ll find both a PC Pro certification practice exam and A+
                            practice exams. These exams will help you prepare for certification. Consider
                            using the exams as a pretest at the beginning of the course to determine how much you
                            already know about computing. Then, as a post-test, retake the exams at the end of
                            the course to see how much you’ve learned. You can also test your knowledge by taking the
                            domain tests. The domain tests divide test questions up according to the domain
                            objectives in the certification exams. It’s another way to practice and reinforce basic
                            computing concepts.
                        </p>
                        <h3>Course Outline</h3>
                        <ul>
                            <li>Computing Overview</li>
                            <li>PC Technician Responsibilities</li>
                            <li>System Components</li>
                            <li>Peripheral Devices</li>
                            <li>Storage</li>
                            <li>Networking</li>
                            <li>Wireless Networking</li>
                            <li>Printing</li>
                            <li>Mobile Devices</li>
                            <li>System Implementation</li>
                            <li>File Management</li>
                            <li>System Management</li>
                            <li>Security</li>
                            <li>Capstone Exercises</li>
                            <li>TestOut PC Pro Certification - Practice Exams</li>
                            <li>CompTIA A+ 220-1001 (Core 1) - Practice Exams</li>
                            <li>CompTIA A+ 220-1002 (Core 2) - Practice Exams</li>
                        </ul>
                    </div>
                    <div class="courseoverviewclick">
                        <a href="{{asset('user/registration')}}"><button type="button" class="btn btn-primary hrsclicks">ENROLL NOW</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection