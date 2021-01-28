@extends('user.layouts.index')

<link href="{{asset('css/hrslti.css')}}" rel="stylesheet">
@section('default')




<section>
    <div class="hrsltiarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hrsltiheading">
                        <h2>HRS LEARNING TOOLS INTEROPERABILITY</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="hrsltiback">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hrsltidata">
                        <h3>Course Overview</h3>
                        <p>The new core LTI version 1.3 and a package of high-value services align LTI with
                            industry-best security and provides a clear path forward
                            for existing services and new services to pursue the rich integration available between
                            learning platforms and tools. Here is a quick look at what's new in LTI 1.3:</p>
                        <p>Introduction of the IMS Security Framework specification prescribing improved security based
                            on OAuth2 and JSON Web Tokens</p>
                        <p>Improved documentation and migration guidance to help move the market from the benefits of
                            basic launch to the full suite of LTI possibilities Alignment with the LTI
                            Advantage set of services that enable a fully integrated and innovative digital ecosystem
                        </p>
                        <p>LTI ADVANTAGE is a package of three essential end-user services that build on LTI 1.3.
                            Together, these standards implement features that support key teaching and learning
                            activities, such as the provisioning of usernames and roles so a tool can intelligently
                            address the learner on launch,
                            and the exchange of assignments from a platform to an assessment tool and the subsequent
                            scores back to a central gradebook. Watch the Get to Know LTI Advantage video.</p>
                        <h3>Courses outline:</h3>
                        <ul>
                            <li>Assignment and Grade Services v2.0</li>
                            <li>AGS OpenAPI Swagger view</li>
                            <li>Names and Role Provisioning Services v2.0</li>
                            <li>NRPS OpenAPI Swagger view (coming soon)</li>
                            <li>Deep Linking v2.0</li>
                            <li>LTI Advantage Implementation Guide</li>
                            <li>LTI Advantage Conformance Certification Guide</li>
                            <li>LTI Migration Guide</li>
                            <li>IMS LTI 1.3 Reference Implementation</li>
                            <li>IMS-wide Security Framework</li>
                            <li>IMS LTI Security Update</li>
                            <li>IMS LTI Resource Search</li>
                            <li>Previous Version Specification Documents</li>
                        </ul>
                    </div>
                    <div class="courseoverviewclick">
                        <a href="http://localhost/hrs_backend/registration.php"><button type="button"
                                class="btn btn-primary hrsclicks">ENROLL NOW</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection