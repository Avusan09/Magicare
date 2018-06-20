@extends('admin.layout.master')
@section('dashboard','Tax Permit')
@section('title','| Tax Permit Information')
@section('content')


    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">

                    <h3>Tax Permit and Insurance Information</h3>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="tax/create" class="btn float-right btn-default btn-rounded mb-4" >Add Tax/Insurance Information</a>

                    <div class="row" style="width: 100%">

                    </div>

                    <div class="card card-cascade narrower">

                        <!--Card image-->

                        <!--/Card image-->

                        <div class="px-4">

                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table table-hover table-responsive table-bordered" id="myTable">


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
                                        <th class="th-sm"><a></a></th>
                                        <th class="th-sm"><a></a></th>



                                    </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>
                                    {{--@foreach($vehicle as $sks)--}}
                                        {{--<tr>--}}

                                            {{--<td class="text-center">{{$sks->servicing_date}}</td>--}}
                                            {{--<td class="text-center text-uppercase">{{$sks->vehical_prefix}}</td>--}}
                                            {{--<td class="text-center">{{$sks->vehical_number}}</td>--}}

                                            {{--<td class="text-center">{{$sks->type}}</td>--}}
                                            {{--<td class="text-center">{{$sks->worked_hours}}</td>--}}
                                            {{--<td class="text-center">{{$sks->mobil}}</td>--}}
                                            {{--<td class="text-center">{{$sks->transmission_oil}}</td>--}}
                                            {{--<td class="text-center">{{$sks->hydrolic}}</td>--}}
                                            {{--<td class="text-center">{{$sks->mobil_filter}}</td>--}}
                                            {{--<td class="text-center">{{$sks->diesel_filter}}</td>--}}
                                            {{--<td class="text-center">{{$sks->hydrolic_filter}}</td>--}}
                                            {{--<td class="text-center">{{$sks->air_filter}}</td>--}}
                                            {{--<td class="text-center">{{$sks->pilot_filter}}</td>--}}
                                            {{--<td class="text-center">{{$sks->transmission_filter}}</td>--}}
                                            {{--<td class="text-center">{{$sks->water_safety}}</td>--}}
                                            {{--<td class="text-center">{{$sks->breather}}</td>--}}
                                            {{--<td class="text-center">{{$sks->tyres}}</td>--}}
                                            {{--<td class="text-center">{{$sks->tubes}}</td>--}}
                                            {{--<td class="text-center">{{$sks->spare_parts}}</td>--}}
                                            {{--<td class="text-center">{{$sks->engine_repair}}</td>--}}
                                            {{--<td class="text-center">{{$sks->total_cost}}</td>--}}
                                            {{--<td class="text-center">{{$sks->remarks}} </td>--}}



                                            {{--<td><a href="/admin/vehicle/{{$sks->id}}/edit" class="btn btn-warning float-right " > <i class="fa fa-edit"></i></a>--}}

                                            {{--</td>--}}
                                            {{--<td>--}}
                                                {{--<form action="/admin/vehicle/{{$sks->id}}" method="POST">--}}
                                                    {{--{{csrf_field()}}--}}
                                                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                                                    {{--<input type="submit" value="Delete" class="btn btn-block btn-danger float-right" onclick="return  confirm('Are you sure you want to delete this entry?')">--}}
                                                {{--</form>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                    {{--@endforeach--}}

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
                </div>
            </div>
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



