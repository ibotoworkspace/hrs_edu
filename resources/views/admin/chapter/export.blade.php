{{-- <style type="text/css">
    @font-face {
        font-family: THE_GONjURING;
        src: url('/fonts/THE_GONjURING.ttf');
    }

</style> --}}
<html>

<head>
    <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssjs/myapp.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
</head>


<body>


    <table class="table table-striped">
        <thead>
         <tr>
            <tr>
            <th class="myso">
                <div class="bestcso">S.No.</div>
            </th>
            <th class="myso">
                <div class="bestcso">Title</div>
            </th>
            {{-- <th class="mycourse">
                <div class="bestcourse">Decriptions</div>
            </th> --}}

            </th>
            <th class="option">
                <div class="bestoption">Level</div>

            </th>

         




        </tr>
    </thead>
    <tbody>

        @foreach ($chapter as $key => $ch)

            <tr class="myarrow">

                <td class="hrs">
                    <div class="besthrs" name="title">{!! $key + 1 !!}</div>
                </td>
                <td class="hrs">
                    <div class="besthrs" name="title">{!! $ch->title !!}</div>
                </td>

                {{-- <td class="myquiz">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ch->description !!}</div>
                </td> --}}

                {{-- <td class="mylectures">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ch->is_paid == 0 ? 'No' : 'Yes' !!}</div>

                </td> --}}

                <td class="mylectures">
                    <div class="quizes" class="onquizes" id="myquizes">{!! $ch->course_level !!}</div>

                </td>
                {{-- <td class="optionss">
                    <div class="myoptionss">
                        <i class="fa fa-cog settings" aria-hidden="true"></i>
                    </div>
                </td> --}}
            

            </tr>

            @endforeach

        </tbody>
    </table>
</body>

</html>
