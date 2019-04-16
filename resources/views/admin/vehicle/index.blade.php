@extends('admin.layout.master')
@section('dashboard','Stockist')
@section('title','| Vehicle Info')
@section('content')


        <div class="row">
            <div class="col-lg-12">
                <span class="font-weight-bold h5-responsive">Vehicle Servicing Information</span>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <a type="button" href="vehicle/create" class="btn float-right btn-success btn-sm mb-4" >Add Vehicle Information</a>
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#basicExampleModal">
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
                                    <div class="col-sm-12 col-md-6 mb-5">
                                        <div class="input-field col-md-12">
                                            <span style="font-size:18px;font-weight:500;" multiple="true">Number:                </span>
                                            <select style="height: 150px" class="form-control" id="numberFltr" multiple>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-5">
                                        <div class="input-field col-md-12">
                                            <span style="font-size:18px;font-weight:500;">Vehicle Type:</span>
                                            <select  style="height: 150px" class="form-control" id="typeFltr" multiple></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                                    <!--Top Table UI-->



                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table-hover table-responsive stripe row-border order-column" id="example" style="height: 60vh">
                                    

                                    <!--Table head-->
                                    <thead class="mdb-color darken-3 white-text">
                                    <tr>


                                        <th class="th-sm"><a>Servicing Date</a></th>
                                        <th class="th-sm"><a>Vehicle Prefix</a></th>
                                        <th class="th-sm"><a>Number</a></th>
                                        <th class="th-sm"><a>Type</a></th>
                                        <th class="th-sm"><a>Worked Hours</a></th>
                                        <th class="th-sm"><a>Mobil</a></th>
                                        <th class="th-sm"><a>Transmission Oil</a></th>
                                        <th class="th-sm"><a>Hydrolic</a></th>
                                        <th class="th-sm"><a>Coolent Water</a></th>
                                        <th class="th-sm"><a>Coolent Filter</a></th>
                                        <th class="th-sm"><a>Mobil Filter</a></th>
                                        <th class="th-sm"><a>Diesel Filter</a></th>
                                        <th class="th-sm"><a>Hydrolic Filter</a></th>

                                        <th class="th-sm"><a>Air Filter</a></th>
                                        <th class="th-sm"><a>Pilot Filter</a></th>
                                        <th class="th-sm"><a>Transmission Filter</a></th>
                                        <th class="th-sm"><a>Water Safety</a></th>
                                        <th class="th-sm"><a>Breather</a></th>
                                        <th class="th-sm"><a>Tyres</a></th>
                                        <th class="th-sm"><a>Tubes</a></th>
                                        <th class="th-sm"><a>Spare Parts</a></th>
                                        <th class="th-sm"><a>Engine Repair</a></th>
                                        <th class="th-sm"><a>Total Cost</a></th>

                                        <th class="th-sm"><a>Remarks</a></th>
                                        <th class="th-sm"><a>Edit</a></th>
                                        <th class="th-sm"><a>Delete</a></th>




                                    </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>
                                    @foreach($vehicle as $sks)
                                        <tr>


                                            <td class="text-center">{{$sks->servicing_date}}</td>
                                            <td class="text-center ">{{$sks->vehical_prefix}}</td>
                                            <td class="text-center">{{$sks->vehical_number}}</td>

                                            <td class="text-center">{{$sks->type}}</td>
                                            <td class="text-center">{{$sks->worked_hours}}</td>
                                            <td class="text-center">{{$sks->mobil}}</td>
                                            <td class="text-center">{{$sks->transmission_oil}}</td>
                                            <td class="text-center">{{$sks->hydrolic}}</td>
                                            <td class="text-center">{{$sks->coolent_water}}</td>
                                            <td class="text-center">{{$sks->coolent_filter}}</td>
                                            <td class="text-center">{{$sks->mobil_filter}}</td>
                                            <td class="text-center">{{$sks->diesel_filter}}</td>
                                            <td class="text-center">{{$sks->hydrolic_filter}}</td>
                                            <td class="text-center">{{$sks->air_filter}}</td>
                                            <td class="text-center">{{$sks->pilot_filter}}</td>
                                            <td class="text-center">{{$sks->transmission_filter}}</td>
                                            <td class="text-center">{{$sks->water_safety}}</td>
                                            <td class="text-center">{{$sks->breather}}</td>
                                            <td class="text-center">{{$sks->tyres}}</td>
                                            <td class="text-center">{{$sks->tubes}}</td>
                                            <td class="text-center">{{$sks->spare_parts}}</td>
                                            <td class="text-center">{{$sks->engine_repair}}</td>
                                            <td class="text-center">{{$sks->total_cost}}</td>


                                            <td class="text-center">{{ str_limit($sks->remarks, 30)}} </td>
                                            <td><a href="/admin/vehicle/{{$sks->id}}/edit" class="btn btn-warning btn-sm float-right " > <i class="fa fa-edit"></i></a>

                                            </td>
                                            <td>
                                                <form action="{{ route('vehicle.destroy', $sks->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{ method_field('DELETE') }}
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <input type="submit" value="X" class="btn btn-block btn-danger btn-sm float-right" onclick="return  confirm('Are you sure you want to delete this entry?')">
                                                </form>
                                            </td>




                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <!--Table body-->
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

                dom: 'lrtip',
                buttons: [
                    'excel', 'pdf',
                ],

                "order": [[ 0, "desc" ]],
                initComplete: function () {
                    this.api().columns([3]).every( function () {
                        var column = this;
                        console.log(column);
                        var select = $("#typeFltr");
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

                }
            });

            $('#typeFltr').on('change', function(){
                var search = [];

                $.each($('#typeFltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(3).search(search, true, false).draw();
            });

            $('#numberFltr').on('change', function(){
                var search = [];

                $.each($('#numberFltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(2).search(search, true, false).draw();
            });
        });
    </script>

@stop



