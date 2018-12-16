@extends('admin.layout.master')
@section('dashboard','Stockist')
@section('title','| Vehicle Info')
@section('content')


        <div class="row">
            <div class="col-lg-12 p-5">


                     <span class="font-weight-bold h3">Vehicle Servicing Information</span>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="vehicle/create" class="btn float-right btn-success btn-rounded mb-4" >Add Vehicle Information</a>


                                    <!--Top Table UI-->



                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table-hover table-responsive " id="myTable">
                                    

                                    <!--Table head-->
                                    <thead class="mdb-color darken-3 white-text">
                                    <tr>

                                        <th class="th-sm"><a>Edit</a></th>
                                        <th class="th-sm"><a>Delete</a></th>
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




                                    </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>
                                    @foreach($vehicle as $sks)
                                        <tr>
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

                                            <td class="text-center">{{$sks->servicing_date}}</td>
                                            <td class="text-center text-uppercase">{{$sks->vehical_prefix}}</td>
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


                                            <td class="text-center">{{$sks->remarks}} </td>




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
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf',
                ],
                "order": [[ 0, "desc" ]]
            });
        } );
    </script>

@stop



