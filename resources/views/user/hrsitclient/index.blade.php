@extends('user.layouts.index')

<link href="{{asset('css/hrsitclint.css')}}" rel="stylesheet">
@section('default')




<section>
    <div class="hrsitclintarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hrsitclintheading">
                        <h2>HRS IT CLIENT PRO COURSE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="hrsitclintback">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hrsitclintbackdata">
                        <h3>Course Overview</h3>
                        <p>This course helps student prepare for the Windows 10 and Managing Modern Desktops exams, MD-100 and MD-101. If you pass both, you’ll be 
                        Microsoft 365 certified as a modern desktop administrator associate
                        </p>
                        <p>These Microsoft exams are designed for Windows system administrators or help desk personnel who work within an enterprise environment 
                        that uses Microsoft Windows 10 as their desktop operating system.
                        </p>
                        <p>This course also helps you prepare to take the TestOut Windows Client Pro exam. The exams don’t measure just what you know about Windows; 
                        they measure what you can do with Windows. The Client Pro exam requires you to perform tasks in a simulated Windows 10 environment, and you’re evaluated by 
                        whether you perform them correctly.
                        </p>
                        <h3>Course Outline</h3>
                        <ul>
                            <li>Course Introduction</li>
                            <li>Windows Installation</li>
                            <li>System Imaging</li>
                            <li>Windows Device and User Management</li>
                            <li>Hardware Management</li>
                            <li>Network Configuration</li>
                            <li>Application Management</li>
                            <li>System Access</li>
                            <li>Resource Sharing</li>
                            <li>Mobile Computing</li>
                            <li>System Monitoring and Maintenance</li>
                            <li>System Protection</li>
                            <li>Windows Defender</li>
                            <li>TestOut Client Pro - Practice Exams</li>
                            <li>Microsoft MD-100 - Practice Exams</li>
                            <li>Microsoft MD-101 - Practice Exams</li>
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