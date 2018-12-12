@extends('admin.layout.master')
@section('dashboard','Sales')
@section('title','| Sales')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">


                    <a href="#" class="float-left">Manage Sales</a>
                    <a href="" class="btn float-right btn-success btn-rounded mb-4" data-toggle="modal" data-target="#">Generate Report</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="" class="btn float-right btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Add Sales</a>
                @include('/admin/sales/create')
                <!--Top Table UI-->


                    <div class="input-group md-form form-sm form-1 pl-0">

                        <input type="text" class="form-control" id="salesSearchInput" style="border:1px solid blue" onkeyup="searchSales()" placeholder="Search  By Product Name ">
                        <div class="input-group-prepend">
                            <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fa fa-search text-white" aria-hidden="true"></i></span>
                        </div>
                    </div>


                    <!--Top Table UI-->

                    <div class="card card-cascade narrower">

                        <!--Card image-->

                        <!--/Card image-->

                        <div class="">

                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table table-hover table-responsive-md  mb-0" id="salesTable">

                                    <!--Table head-->
                                    <thead class="mdb-color darken-3 white-text" style="width: 100%">
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
                            <div class="d-flex justify-content-between">

                                <!--Name-->


                                <!--Pagination -->
                                <nav class="my-4 float-right">
                                    <ul class="pagination pagination-circle pg-blue mb-0">

                                        <!--First-->
                                        <li class="page-item disabled"><a class="page-link">First</a></li>

                                        <!--Arrow left-->
                                        <li class="page-item disabled">
                                            <a class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>

                                        <!--Numbers-->
                                        <li class="page-item active"><a class="page-link">1</a></li>
                                        <li class="page-item"><a class="page-link">2</a></li>
                                        <li class="page-item"><a class="page-link">3</a></li>
                                        <li class="page-item"><a class="page-link">4</a></li>
                                        <li class="page-item"><a class="page-link">5</a></li>

                                        <!--Arrow right-->
                                        <li class="page-item">
                                            <a class="page-link" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>

                                        <!--First-->
                                        <li class="page-item"><a class="page-link">Last</a></li>

                                    </ul>
                                </nav>
                                <!--/Pagination -->

                            </div>
                            <!--Bottom Table UI-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop