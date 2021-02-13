
@extends('layouts.default_module')
@section('module_name')
List of Quiz Question in HRS Network PRO
@stop

@section('add_btn')

{!! Form::open(['method' => 'get', 'route' => ['listofquiz.create'], 'files'=>true]) !!}
<span>{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
{!! Form::close() !!}
@stop

@section('table')
<div class="ableclick">
                <button type="button" class="btn btn-primary myopen" id="mybutton">Copy</button>
                <button type="button" class="btn btn-primary myopen" id="mybutonarea"> CSV</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttons"> Excel</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoner"> PDF</button>
                <button type="button" class="btn btn-primary myopen" id="mybuttoners"> Print</button>
			</div>



			<thead>
                    <tr>
                        {{-- <th class="myso">
                            <div class="bestcso">S. No.</div>
                        </th> --}}
                        <th class="mycourse">
                            <div class="bestcourse">Question</div>
                        </th>
                      

					
						<th class="option">
                            <div class="bestoption">IS PAID</div>

						</th>
                      
						{{-- <th class="option">
                            <div class="bestoption">Option</div>

						</th>
					 --}}
						



                    </tr>
                </thead>
                <tbody>
                    @foreach($listofquiz as $q)
                    <tr class="myarrow">
                        {{-- <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td> --}}
                        <td class="hrs">
                            <div class="besthrs">{{ $q->question }}</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						{{-- <td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td> --}}
                    </tr>

                    {{-- <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>


                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>


                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>

                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>

                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>


                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>


                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="myarrow">
                        <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td>
                        <td class="hrs">
                            <div class="besthrs">What are the types of mode available in Network?</div>
                        </td>
                        <td class="unpaidquiz">
                            <div class="myunpaidquiz"><button type="button" class="btn btn-primary onunpaidquiz" id="myunpaiidquiz">unpaid</button></div>
                        </td>
                
                     
						<td class="optionss">
                            <div class="myoptionss">
                            <i class="fa fa-cog settings" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>
 --}}

             @endforeach

                </tbody>





                @section('pagination')
                <span class="pagination pagination-md pull-right">{!! $listofquiz->render() !!}</span>
              
            @endsection

			@stop