@extends('layouts.default_header')
<?php
$admin_common = session()->get('admin_common');
$modules = $admin_common->modules;
$reports = $admin_common->reports;
?>
@section('content')
<!-- Dashboard Components -->

<!-- Modules Start -->
<div class="row">


    <div class="pull-right language-toggle">

    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">

        <div>
            <section class="dash-tile">
                <h1 class="mt0">Modules</h1>
            </section>
        </div>
    </div>

    @foreach($modules as $key => $module)

<a href="{!! asset($module['url']) !!}">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <section class="dash-tile bg-success">
            <div class="tile-title">
            </div>
            <!-- <div class="tile-stats">{!! $module['title'] !!}
            </div> -->
          
            <div class="row">
                                            <div class="col-sm-6">
                                                <div class="tile-stats">{!! $module['title'] !!}
                                                </div>
                                                <div class="mytotal">
                                                  Total  {!! $module  ['total'] !!}
                                                </div>
                                                <div class="myactive">
                                                Active {!! $module ['active'] !!}
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="myimage">
                                                    <img src="{{ asset($module ['image']) }}" alt="" class="myicon">
                                                   </div>
                                            </div>
            </div>
                                         
            
            <div class="mb20"></div>
        
        </section>
    </div>
</a>

@endforeach
    
      
  
        </div>
    
       
  

        <div class="container-fluid bigbord">
            <div class="tabhead">
                <i class="fa fa-calendar" aria-hidden="true"></i>Courses Module
            </div>
            <div class="tabheadline"></div>
            <div class="ableclick">
                <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
                <button type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoner"> PDF</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoners"> Print</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="myso">
                            <div class="bestcso">S. No.</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Courses</div>
                        </th>
                        <th class="option">
                            <div class="bestoption">Option</div>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>


                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 2</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 3</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 4</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 5</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 6</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 7</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 8</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 9</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 10</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 11</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 12</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 13</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 14</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 15</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">HRS Security PRO</div>
                        </td>
                        <td class="mybest">
                            <div class="bestopen"><button type="button" class="btn btn-primary onopen" id="mybuttonarea">Open</button></div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </a>
</div>

{{-- <script src="{{ asset('theme/vendor/jquery/dist/jquery.js') }}"></script> --}}
<script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('theme/vendor/slimScroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('theme/vendor/jquery.easing/jquery.easing.js') }}"></script>
<script src="{{ asset('theme/vendor/jquery_appear/jquery.appear.js') }}"></script>
<script src="{{ asset('theme/vendor/jquery.placeholder.js') }}"></script>
<script src="{{ asset('theme/vendor/fastclick/lib/fastclick.js') }}"></script>
<!-- endbuild -->

<!-- page level scripts -->
<script src="{{ asset('theme/vendor/blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('theme/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('theme/data/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('theme/vendor/jquery.sparkline.js') }}"></script>

<script src="{{ asset('theme/vendor/jquery-countTo/jquery.countTo.js') }}"></script>
<!-- /page level scripts -->

<!-- page script -->

<!-- /page script -->

<script>
    function lang_changed() {
        $('#lang').val('changed');
    }
</script>


@stop