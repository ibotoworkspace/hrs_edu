


<style>
    @import url('https://fonts.googleapis.com/css?family=Saira+Condensed:700');

    hr {
        background-color: grey;
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

        background: #eee url("https://i.pinimg.com/originals/b3/17/db/b317db24945589699a4ef18150dc5b73.jpg") no-repeat;
        background-size: 100%;
    }

    h1#cert-holderup {
        font-size:20px;
        color: #be2d24;
    }

    p.smaller {
        font-size: 12px !important;
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
<body>
    <div style="background-color:#bfb28e !important">

        <a href="#"><img src="{{ asset('images/logo.png') }}" class="img-responsive"></a>
    </div>

    <p id="cert-from" class="smaller">
    Please <a href="{!! $details['verification_link'] !!}"> Click </a> to Verify

    </p>
<br>
<br>




<br>
<br>
<p id="cert-from" class="smaller">
    &nbsp; from {!! $details['from'] !!}
</p>

<br>
<p class="smaller" id='cert-issued'>
    <b>Issued on:</b> {!! $details['dated'] !!}.
</p>

<p class="smaller" id='cert-issued'>
    <b>
Thankyou

    </b>
    <br>
    <br>
    <b>
      Hrs Admin

            </b>
</p>


</body>


