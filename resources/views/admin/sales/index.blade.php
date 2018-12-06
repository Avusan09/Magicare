@extends('admin.layout.master')
@section('dashboard','Sales')
@section('title','| Sales')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">


                    <a href="sales/create" class="float-left">Add Sales</a>
                    <a href="" class="btn float-right btn-default btn-rounded mb-4" data-toggle="modal" data-target="#">Generate Report</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--Top Table UI-->


                    <div class="input-group md-form form-sm form-1 pl-0">

                        <input type="text" class="form-control" id="salesSearchInput" style="border:1px solid blue" onkeyup="searchSales()" placeholder="Search  By Product Name ">
                        <div class="input-group-prepend">
                            <span class="input-group-text blue-gradient search-button lighten-3" id="basic-text1"><i class="fa fa-search text-white" aria-hidden="true"></i></span>
                        </div>
                    </div>


                    <!--Top Table UI-->

                    <div class="card card-cascade narrower">

                        <!--Card image-->

                        <!--/Card image-->

                        <div class="">

                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table table-hover mb-0 table-responsive-lg" id="salesTable">

                                    <!--Table head-->
                                    <thead class="mdb-color darken-3 white-text">
                                    <tr>


                                        <th class="th-sm"><a >Product Name</a></th>
                                        <th class="th-sm"><a >Product Code</a></th>
                                        <th class="th-sm"><a >Pack</a></th>

                                        <th class="th-sm"><a >Opening Stock</a></th>

                                        <th class="th-sm"><a >Purchased Stock</a></th>

                                        <th class="th-sm"><a >Total Stock</a></th>

                                        <th class="th-sm"><a >Sale</a></th>

                                        <th class="th-sm"><a >Clear Stock</a></th>

                                        {{--<th class="th-sm"><a >L. Rate</a></th>--}}

                                        {{--<th class="th-sm"><a >St. Value</a></th>--}}
                                        <th class="th-sm"><a href=""></a>Edit</th>
                                        <th class="th-sm"><a href=""></a>Delete</th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>
                                    @foreach($sales as $sks)
                                        <tr>

                                            <td class="text-center">{{$sks->product_name}}</td>
                                            <td class="text-center">{{$sks->product_code}}</td>
                                            <td class="text-center">{{$sks->pack}}</td>
                                            <td class="text-center">{{$sks->opening_stock}}</td>
                                            <td class="text-center">{{$sks->purchased_stock}}</td>
                                            <td class="text-center">{{$sks->total_stock}}</td>
                                            <td class="text-center">{{$sks->sales}}</td>
                                            <td class="text-center">{{$sks->clear_stock}}</td>



                                            <td><a href="/admin/sales/{{$sks->id}}/edit" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>

                                            </td>
                                            <td>
                                                <form action="/admin/sales/{{$sks->id}}" method="POST">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" value="X" class="btn btn-block btn-danger btn-sm" onclick="return  confirm('Are you sure you want to delete this entry?')">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop