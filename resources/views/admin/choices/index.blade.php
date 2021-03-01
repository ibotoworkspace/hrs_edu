
@extends('layouts.default_module')
@section('module_name')
List of Choices
@stop




{{-- {{dd($choice)}} --}}
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
                            <div class="bestcourse">Question NO.</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Choice</div>
                        </th> 
                        <th class="mycourse">
                            <div class="bestcourse">Choice text</div>
                        </th>
                        <th class="mycourse">
                            <div class="bestcourse">Is Correct</div>
                        </th>

					
						
                      
                      
						{{-- <th class="option">
                            <div class="bestoption">Option</div>

						</th>
					 --}}
						



                    </tr>
                </thead>
                <tbody>
                    @foreach($choice as $c)
                    <tr class="myarrow">
                        {{-- <td class="mynbr">
                            <div class="bestnbr"> 1</div>
                        </td> --}}
                        <td class="hrs">
                            <div class="besthrs">{{ $c->quiz_id }}</div>
                            {{-- <a href="{{ url('/admin/choices/' . $q->id ) }}"   type="button" class="btn btn-primary onquizes" id="myvide">choices</a>    --}}

                        </td>
                        <td class="hrs">
                            <div class="besthrs">{{ $c->id }}</div>
                            {{-- <a href="{{ url('/admin/choices/' . $q->id ) }}"   type="button" class="btn btn-primary onquizes" id="myvide">choices</a>    --}}

                        </td>

                        <td class="hrs">
                            <div class="besthrs">{{ $c->choice }}</div>
                            {{-- <a href="{{ url('/admin/choices/' . $q->id ) }}"   type="button" class="btn btn-primary onquizes" id="myvide">choices</a>    --}}

                        </td>
                        <td class="hrs">
                            <div class="besthrs">{{ $c->is_correct }}</div>
                            {{-- <a href="{{ url('/admin/choices/' . $q->id ) }}"   type="button" class="btn btn-primary onquizes" id="myvide">choices</a>    --}}

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





                {{-- @section('pagination')
                <span class="pagination pagination-md pull-right">{!! $listofquiz->render() !!}</span>
              
            @endsection --}}

			@stop