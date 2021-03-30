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
                <th class="myso">
                    <div class="bestcourse">S.NO</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">User Name</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">User Email</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Course Name </div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Is Completed</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Is Paid</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Voucher Request</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Certificate Request</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Badge Request</div>
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($register_course as $key => $cr)
                <tr class="myarrow">
                    <td class="mynbr">
                        <div class="bestnbr">{{ $key + 1 }}</div>
                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $cr->User->name ?? '' }}</div>

                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $cr->User->email ?? '' }}</div>

                    </td>

                    <td class="hrs">
                        <div class="besthrs">{{ $cr->course->title ?? '' }}</div>

                    </td>
                    <td class="hrs">
                        @if ($cr->is_completed == 1)
                            <span style="color: blue"> Yes </span>
                        @else
                            <span style="color: red"> No </span>
                        @endif

                    </td>
                    <td class="hrs">
                        @if ($cr->certificate_status == 'pending')
                            <span style="color: red"> Pending </span>
                        @elseif($cr->certificate_status == 'requested')
                            <span style="color: blue"> Requested </span>
                        @else
                            <span style="color: green"> Accepted </span>
                        @endif

                    </td>
                    <td class="hrs">
                        @if ($cr->badge_status == 'pending')
                            <span style="color: red"> Pending </span>
                        @elseif($cr->badge_status == 'requested')
                            <span style="color: blue"> Requested </span>
                        @else
                            <span style="color: green"> Accepted </span>
                        @endif

                    </td>
                    <td class="hrs">
                        @if ($cr->voucher_status == 'pending')
                            <span style="color: red"> Pending </span>
                        @elseif($cr->voucher_status == 'requested')
                            <span style="color: blue"> Requested </span>
                        @else
                            <span style="color: green"> Accepted </span>
                        @endif

                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>
</body>

</html>
