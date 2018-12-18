@extends('admin.layout.master')
@section('dashboard','Tax Permit')
@section('title','| Tax Permit Information')
@section('content')


        <div class="row">
            <div class="col-lg-12 p-5 pt-3">


                <span class="font-weight-bold h3">Tax Permit and Insurance Information</span>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="tax/create" class="btn float-right btn-success btn-rounded mb-4" >Add Tax/Insurance Information</a>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicExampleModal">
                    Access Filters
                </button>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header " style="    background: #00bcd4;
    color: white;">
                                <h3 class="modal-title" id="exampleModalLabel">Filters</h3>
                                <br>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span class="badge badge-info">Info</span> You can select and deselect multiple choices  by pressing CTRL + MouseClick on the selections.
                                <br><br>
                                <div class="row">

                                    <div class="col-sm-12 col-md-4 mb-5 pr-0">
                                        <div class="input-field col-sm-12 p-0">
                                            <span style="font-size:18px;font-weight:500;" multiple="true">Company:                </span>
                                            <select style="height: 150px" class="form-control" id="companyfltr" multiple>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-5 pr-0">
                                        <div class="input-field col-sm-12 p-0">
                                            <span style="font-size:18px;font-weight:500;">Number:</span>
                                            <select  style="height: 150px" class="form-control" id="numberFltr" multiple></select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-4 mb-5 pr-0">
                                        <div class="input-field col-sm-12 p-0">
                                            <span style="font-size:18px;font-weight:500;">Type:</span>
                                            <select  style="height: 150px" class="form-control" id="typeFltr" multiple></select>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" data-dismiss="modal" class="btn btn-primary">Go back</button>


                            </div>
                        </div>
                    </div>
                </div>


                                <table class="display table-striped table-hover table-responsive" id="example" style="height: 60vh">


                                    <!--Table head-->
                                    <thead class="mdb-color darken-3 white-text">
                                    <tr>


                                        <th class="th-sm"><a>Date</a></th>
                                        <th class="th-sm"><a>Vehicle Prefix</a></th>
                                        <th class="th-sm"><a>Vehicle Number</a></th>
                                        <th class="th-sm"><a>Vehicle Type</a></th>
                                        <th class="th-sm"><a>Insurance Company</a></th>
                                        <th class="th-sm"><a>Insured Amount</a></th>
                                        <th class="th-sm"><a>Chasis</a></th>
                                        <th class="th-sm"><a>Engine</a></th>
                                        <th class="th-sm"><a>RT Date</a></th>
                                        <th class="th-sm"><a>RT Bill</a></th>
                                        <th class="th-sm"><a>RT Fiscal</a></th>
                                        <th class="th-sm"><a>RT Amount</a></th>
                                        <th class="th-sm"><a>RET Date</a></th>
                                        <th class="th-sm"><a>RET Bill</a></th>
                                        <th class="th-sm"><a>RET Fiscal</a></th>
                                        <th class="th-sm"><a>RET Amount</a></th>
                                        <th class="th-sm"><a>RP Date</a></th>
                                        <th class="th-sm"><a>RP Bill</a></th>
                                        <th class="th-sm"><a>RP Fiscal</a></th>
                                        <th class="th-sm"><a>RP Amount</a></th>
                                        <th class="th-sm"><a>Insurance Start Date</a></th>
                                        <th class="th-sm"><a>Insurance End Date</a></th>
                                        <th class="th-sm"><a>Policy</a></th>

                                        <th class="th-sm"><a>Remarks</a></th>
                                        <th class="th-sm"><a>Edit</a></th>
                                        <th class="th-sm"><a>Delete</a></th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->
                                <tbody>
                                    @foreach($tax as $sks)
                                <tr>
                                    <td class="text-center">{{$sks->date}}</td>
                                    <td class="text-center">{{$sks->vehicle_prefix }}</td>
                                    <td class="text-center">{{$sks->vehicle_number }}</td>
                                    <td class="text-center">{{$sks->vehicle_type }}</td>
                                    <td class="text-center">{{$sks->insurance_company }}</td>
                                    <td class="text-center">{{$sks->insured_amount }}</td>
                                    <td class="text-center">{{$sks->chasis }}</td>
                                    <td class="text-center">{{$sks->engine}}</td>
                                    <td class="text-center">{{$sks->rt_date }}</td>
                                    <td class="text-center">{{$sks->rt_bill }}</td>
                                    <td class="text-center">{{$sks->rt_fiscal }}</td>
                                    <td class="text-center">{{$sks->rt_amount }}</td>
                                    <td class="text-center">{{$sks->ret_date }}</td>
                                    <td class="text-center">{{$sks->ret_bill }}</td>
                                    <td class="text-center">{{$sks->ret_fiscal }}</td>
                                    <td class="text-center">{{$sks->ret_amount }}</td>
                                    <td class="text-center">{{$sks->rp_date }}</td>
                                    <td class="text-center">{{$sks->rp_bill }}</td>
                                    <td class="text-center">{{$sks->rp_fiscal }}</td>
                                    <td class="text-center">{{$sks->rp_amount }}</td>
                                    <td class="text-center">{{$sks->insurance_start }}</td>
                                    <td class="text-center">{{$sks->insurance_end }}</td>
                                    <td class="text-center">{{$sks->policy }}</td>



                                    <td class="text-center">{{ str_limit($sks->remarks, 30)}} </td>
                                    <td><a href="/admin/tax/{{$sks->id}}/edit" class="btn btn-warning btn-sm float-right " > <i class="fa fa-edit"></i></a>

                                    </td>
                                    <td>
                                        <form action="{{ route('tax.destroy', $sks->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="submit" value="X" class="btn btn-block btn-danger btn-sm float-right" onclick="return  confirm('Are you sure you want to delete this entry?')">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                                </table>
                                <!--Table-->
                            </div>

                            <hr class="my-0">

                            <!--Bottom Table UI-->
                            <div class="d-flex justify-content-between">

                                <!--Name-->


                                <!--Pagination -->

                                <!--/Pagination -->

                            </div>
                            <!--Bottom Table UI-->

                        </div>
        </div>



<script>

    $(document).ready(function (){


        var table = $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf',
            ],

            "order": [[ 0, "desc" ]],
            initComplete: function () {
                this.api().columns([4]).every( function () {
                    var column = this;
                    console.log(column);
                    var select = $("#companyfltr");
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option class="material-options" value="'+d+'">'+d+'</option>' )
                    } );
                } );

                this.api().columns([2]).every( function () {
                    var column = this;
                    console.log(column);
                    var select = $("#numberFltr");
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option class="material-options" value="'+d+'">'+d+'</option>' )
                    } );
                } );

                this.api().columns([3]).every( function () {
                    var column = this;
                    console.log(column);
                    var select = $("#typeFltr");
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option class="material-options" value="'+d+'">'+d+'</option>' )
                    } );
                } );






            }
        });

        $('#companyfltr').on('change', function(){
            var search = [];

            $.each($('#companyfltr option:selected'), function(){
                search.push($(this).val());
            });

            search = search.join('|');
            table.column(4).search(search, true, false).draw();
        });

        $('#numberFltr').on('change', function(){
            var search = [];

            $.each($('#numberFltr option:selected'), function(){
                search.push($(this).val());
            });

            search = search.join('|');
            table.column(2).search(search, true, false).draw();
        });

        $('#typeFltr').on('change', function(){
            var search = [];

            $.each($('#typeFltr option:selected'), function(){
                search.push($(this).val());
            });

            search = search.join('|');
            table.column(3).search(search, true, false).draw();
        });

    });



</script>

@stop



