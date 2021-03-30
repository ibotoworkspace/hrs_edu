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
<?php
$types = $type ?? '';
if ($types == 'pdf') {
$heading = 'List of groups';
} else {
$heading = '';
}
?>

<body>

    <h2>{{ $heading }}</h2>


    <table class="table table-striped">
        <thead>
            <tr>
                <th class="myso">
                    <div class="bestcourse">S.NO</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Group Name</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Skill Advisor Name</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Course Name</div>
                </th>
                <th class="mycourse">
                    <div class="bestcourse">Is Active</div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $key => $gr)
                <tr class="myarrow">
                    <td class="mynbr">
                        <div class="bestnbr">{{ $key + 1 }}</div>
                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $gr->name }}</div>

                    </td>
                    <td class="hrs">
                        <div class="besthrs">{{ $gr->skilladvisor->name }}</div>

                    </td>

                    <td class="hrs">
                        <div class="besthrs">{{ $gr->course->title }}</div>

                    </td>
                    <td class="hrs">
                        @if ($gr->is_active == 1)
                            <span style="color: blue"> Active </span>
                        @else
                            <span style="color: red"> In Active </span>
                        @endif
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>
</body>

</html>
