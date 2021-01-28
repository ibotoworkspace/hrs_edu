@extends('user.layouts.index')



<link href="{{asset('css/hrsdesktop.css')}}" rel="stylesheet">
<!-- {{asset('images/headerimage.png')}}" -->
@section('default')



<section>
    <div class="desktopheading">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="desktopheadingdata">
                        <h2>HRS DESKTOP PRO COURSE</h2>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="desktopback">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="desktopdata">
                        <h3>Course Overview</h3>
                        <p>HRS Academy Desktop Pro Plus provides an innovative and effective way to practice using Microsoft Office applications and learn the basics of computer technology. 
                        Simulated labs help students acquire and retain the basic skills they need to become proficient in Microsoft Word, Excel, PowerPoint, Access, and Outlook. 
                        The course is also designed to prepare students for the following Microsoft Office Specialist exams.
                        </p>
                        <ul>
                            <li>MOS Word 2016 Core (Exam 77-725)</li>
                            <li>MOS Excel 2016 Core (Exam 77-727)</li>
                            <li>MOS PowerPoint 2016 (Exam 77-729)</li>
                            <li>MOS Access 2016 (Exam 77-730)</li>
                            <li>MOS Outlook 2016 (Exam 77-731)</li>
                        </ul>
                        <h4>Online Essentials</h4>
                        <p>This chapter introduces students to the basic components and functions of computer hardware, operating systems, and application software. It includes information 
                        on file management, installing applications, networking, databases, computer programming, and information systems. Students practice configuring hardware, 
                        changing operating system settings, copying files, creating folders, connecting to a wireless network, and using databases.
                        </p>
                        <h4>Common Office Features</h4>
                        <p>This chapter introduces features that are common to Microsoft Office applications. Students learn how to use the ribbon, dialog boxes, and the Backstage View; change
                        application views; customize print settings; navigate longer documents and workbooks; and format images and shapes
                        </p>
                        <h4>Microsoft Word</h4>
                        <p>This chapter provides extensive practice in using the most important features of Microsoft Word to create, format, and print documents. Students learn how to edit existing 
                        documents; insert illustrations and tables; use themes and templates; manage references, headers, and footers; and use Track Changes and other collaboration features.
                        </p>
                        <h4>Microsoft Excel</h4>
                        <p>This chapter teaches how to use spreadsheets in Microsoft Excel. Students practice creating and managing workbooks, entering data, and printing worksheets. They also learn 
                        how to format cells, use formulas to perform calculations, organize and analyze data in charts and tables, and summarize complex data using PivotTables.
                        </p>
                        <h4>Microsoft PowerPoint</h4>
                        <p>This chapter teaches students how to create slide shows with Microsoft PowerPoint. They learn how to create, manage, format, and deliver PowerPoint presentations. Students 
                        also learn how to insert pictures, tables, illustrations, videos, animations, and transitions.
                        </p>
                        <h4>Microsoft Access</h4>
                        <p>This chapter introduces relational databases. Students learn how to use Microsoft Access to store data, create queries to retrieve data, and build forms and reports.
                        </p>
                        <h4>Microsoft Outlook</h4>
                        <p>This chapter teaches students how to use Microsoft Outlook for managing email, calendaring, and contacts. Students learn to create, send, and manage email, use the 
                        calendar to schedule appointments and meetings, and create and share new contacts and contact groups.
                        </p>
                        <h4>Course Outline</h4>
                        <ul>
                            <li>Getting Started Information</li>
                            <li>Online Essentials</li>
                            <li>Computer Essentials</li>
                            <li>Common Office Features</li>
                            <li>Microsoft Word</li>
                            <li>Microsoft Excel</li>
                            <li>Microsoft PowerPoint</li>
                            <li>Microsoft Access</li>
                            <li>Microsoft Outlook</li>
                            <li>Desktop Pro Practice Exams</li>
                            <li>MOS 2016 Practice Exams</li>
                        </ul>
                    </div>
                    <div class="courseoverviewclick">
                        <a href="http://localhost/hrs_backend/registration.php"><button type="button" class="btn btn-primary hrsclicks">ENROLL NOW</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection