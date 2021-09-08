
@extends('layouts.default_module')
@section('module_name')
Question : {{ $choice[0]->quiz->question}}
@stop





@section('table')




			<thead>
                    <tr>
                        
                        <th class="mycourse">
                            <div class="bestcourse">S.NO.</div>
                        </th>
                 
                        <th class="mycourse">
                            <div class="bestcourse">Choice text</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Is Correct</div>
                        </th>

					
						
                      
                      
					
						



                    </tr>
                </thead>
                <tbody>
                    @foreach($choice as $key=>$c)
                    <tr class="myarrow">
                 
                        <td class="hrs">
                            <div class="besthrs">{{ $key+1}}</div>
                         

                        </td>
                     

                        <td class="hrs">
                            <div class="besthrs">{{ $c->choice }}</div>
                      

                        </td>
                        <td class="hrs">
                            <div class="besthrs">{{ $c->is_correct }}</div>
    

                        </td>
                     
					
                    </tr>

                  

             @endforeach

                </tbody>





     

			@stop