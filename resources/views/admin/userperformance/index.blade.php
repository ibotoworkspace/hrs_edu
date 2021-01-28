@extends('layouts.default_module')
@section('module_name')
User Performacne


<!-- <div class="myuser">User Performacne Per Day</div> -->

@stop
@section('table')
<div>
<div class="myuser">User Performacne Per Day</div>
    <div id="barchart" style="height: 100%; width:80%; color: #000;"></div>


    <tr>
                        <th class="myso">
                            <div class="bestcso">S. No.</div>
                        </th>
                        <th class="mycourse">
                            <div class="latestbestcourse">Date</div>
                        </th>
                      

						<th class="option">
                            <div class="bestoption">Day</div>

						</th>
						<th class="option">
                            <div class="bestoption">Tutorials Added</div>

						</th>
					
						



                    </tr>
                </thead>

                <tbody>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">2020-12-23</div>
                        </td>
                        <td class="mynbr">
                            <div class="bestnbr">Wednesday</div>
                     </td>
                     <td class="mynbr">
                            <div class="bestnbr">08</div>
                        </td>
                    
                     


						  
                    </tr>


                    <tr class="myarrow">
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">2020-12-23</div>
                        </td>
                        <td class="mynbr">
                            <div class="bestnbr">Wednesday</div>
                     </td>
                     <td class="mynbr">
                            <div class="bestnbr">08</div>
                        </td>
                    
                     


						  
                    </tr>


                    </tr>

                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">2020-12-23</div>
                        </td>
                        <td class="mynbr">
                            <div class="bestnbr">Wednesday</div>
                     </td>
                     <td class="mynbr">
                            <div class="bestnbr">08</div>
                        </td>
                    
                     


						  
                    </tr>




                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">2020-12-23</div>
                        </td>
                        <td class="mynbr">
                            <div class="bestnbr">Wednesday</div>
                     </td>
                     <td class="mynbr">
                            <div class="bestnbr">08</div>
                        </td>
                    
                     


						  
                    </tr>



                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">2020-12-23</div>
                        </td>
                        <td class="mynbr">
                            <div class="bestnbr">Wednesday</div>
                     </td>
                     <td class="mynbr">
                            <div class="bestnbr">08</div>
                        </td>
                    
                     


						  
                    </tr>



                </tbody>
</div>












<script>
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
    ]
    var trace1 = {
        x: months,
        y: [20, 14, 23, 20, 14, 23, 20, 14, 23],
        name: 'Quizes',
        type: 'bar'
    };

    var trace2 = {
        x: months,
        y: [20, 14, 23, 20, 14, 23, 20, 14, 23],
        name: 'Videos',
        type: 'bar',
        marker:{
        color: 'rgba(163, 122, 8)'
  }
        
    };
    var trace3 = {
        x: months,
        y: [20, 14, 23, 20, 14, 23, 20, 14, 23],
        name: 'Tutorials',
        type: 'bar',
        
    };

    var data = [trace1, trace2,trace3];

    var layout = {
        // title: 'USER performance per day ',
        barmode: 'stack',
        width:900,
        heigh:1000,
        color:'#fff',
        
    };

    // var data = [graph, graph_2, graph_3];
    // var layout = {
    //     barmode: 'group',
    //     width: 500,
    //     height: 600,
    //     color: '#000'
    // };

    Plotly.newPlot('barchart', data, layout);
</script>
@stop