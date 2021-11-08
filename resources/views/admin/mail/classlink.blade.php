<style>
    @import url('https://fonts.googleapis.com/css?family=Saira+Condensed:700');

    hr {
        background-color: #be2d24;
        height: 3px;
        margin: 5px;
    }

    div#cert-footer {
        position: absolute;
        width: 60%;
        top: 550px;
        text-align: center;
    }

    #cert-stamp,
    #cert-ceo-sign {
        width: 60%;
        display: inline-block;
    }

    div#cert-issued-by,
    div#cert-ceo-design {
        width: 40%;
        display: inline-block;
        float: left;
    }

    div#cert-ceo-design {
        margin-left: 10%;
    }

    h1 {
        font-family: 'Saira Condensed', sans-serif;
        margin: 5px 0px;
    }

    body {
        width: 950px;
        height: 690px;
        position: absolute;
        left: 30px;
        top: 30px;
        border: 3px solid grey;
    }

    p {
        font-family: 'Arial', sans-serif;
        font-size: 18px;
        margin: 5px 0px;
    }

    html {
        display: inline-block;
        width: 1024px;
        height: 768px;
        border: 2px solid grey;
        background: #eee url("https://i.pinimg.com/originals/b3/17/db/b317db24945589699a4ef18150dc5b73.jpg") no-repeat;
        background-size: 100%;
    }

    h1#cert-holderi {
        font-size: 20px;
        color: #be2d24;
    }

    p.smaller {
        font-size: 17px !important;
    }

    div#cert-desc {
        width: 70%;
    }

    p#cert-from {
        color: #be2d24;
        font-family: 'Saira Condensed', sans-serif;
    }

    div#cert-verify {
        opacity: 1;
        position: absolute;
        top: 680px;
        left: 60%;
        font-size: 12px;
        color: grey;
    }

</style>



<h1 id="cert-holderi">
    Please <a href="{!! $details['class_link'] !!}"> Click </a> to join class
</h1>

{{-- <p class="smaller" id='cert-completed-line'>
    has successfully completed the
</p> --}}

{{-- <h2 id="cert-course">
    Course in {!! $details['course_name'] !!}
</h2> --}}

{{-- <div id="cert-desc" <p class="smaller" id='cert-details'>
    which includes the knowledge of English for Technical Conversations, Applied Mathematics, General Robotics Science,
    Basic Computing, Web & Mobile Development and Basic User Interface Design.
    </p>
</div> --}}

<br>
<p id="cert-from" class="smaller">
    &nbsp; from {!! $details['from'] !!}
</p>

<br>
<p class="smaller" id='cert-issued'>
    <b>Issued on:</b> {!! $details['dated'] !!}.
</p>

{{-- <div id="cert-footer">
    <div id="cert-issued-by">
        <img id="cert-stamp"
            src="https://i7.pngguru.com/preview/585/794/452/paper-rubber-stamp-postage-stamps-company-seal-seal-thumbnail.jpg">
        <hr>
        <p>Issued by<br>HRS Acedamy</p>
    </div>
    <div id="cert-ceo-design">
        <img id="cert-ceo-sign"
            src="https://i7.pngguru.com/preview/585/794/452/paper-rubber-stamp-postage-stamps-company-seal-seal-thumbnail.jpg">
        <hr>
        <p>Company Ceo<br>CEO of The Company</p>
    </div>
</div> --}}

{{-- <div id="cert-verify">
    Verify at companywebsite.ai/verify/XYZ12ER56129F. <br>
    Company has confirmed the participation of this individual in the course.
</div> --}}
