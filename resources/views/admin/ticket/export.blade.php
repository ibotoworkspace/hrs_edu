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
                    <div class="bestcourse">Member Id</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Account Holder</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Related Issue</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Subject </div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Message</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Action</div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $key => $tc)
                <tr class="myarrow">
                    <td class="mynbr">
                        <div class="bestnbr">{{ $key + 1 }}</div>
                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $tc->user_id ?? 0 }}</div>

                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $tc->name ?? '' }}</div>

                    </td>

                    <td class="hrs">
                        <div class="besthrs">{{ $tc->issue ?? '' }}</div>

                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $tc->subject ?? '' }}</div>

                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $tc->message ?? '' }}</div>

                    </td>
                    <td class="hrs">
                        @if ($tc->status == 'pending')
                            <span style="color: red"> Pending </span>
                        @else
                            <span style="color: blue"> Resolved </span>
                        @endif

                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>
</body>

</html>
