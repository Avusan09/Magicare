@extends('admin.layout.master')
@section('dashboard','Stockist')
@section('title','| Stockists')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">

                    <h1>Manage Stockists</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="" class="btn float-right btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Add Stockists</a>
                        @include('/admin/stockist/create')
                    <!--Top Table UI-->

                    <div class="input-group md-form form-sm form-1 pl-0">

                        <input type="text" class="form-control" id="stockistSearchInput" style="border:1px solid blue" onkeyup="searchStockists()" placeholder="Search for Stockists">
                        <div class="input-group-prepend">
                            <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fa fa-search text-white" aria-hidden="true"></i></span>
                        </div>
                    </div>


                    <!--Top Table UI-->

                    <div class="card card-cascade narrower">

                        <!--Card image-->

                        <!--/Card image-->

                        <div class="px-4">

                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table table-hover mb-0" id="stockistTable">

                                    <!--Table head-->
                                    <thead class="mdb-color darken-3 white-text">
                                    <tr>


                                        <th class="th-lg"><a >Product Name</a></th>
                                        <th class="th-lg"><a >Customer Name</a></th>
                                        <th class="th-lg"><a >Quantity Sold</a></th>
                                        <th class="th-lg"><a href=""></a></th>
                                        <th class="th-lg"><a href=""></a></th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>
                                    @foreach($stockists as $sks)
                                        <tr>

                                            <td class="text-center">{{$sks->product_name}}</td>
                                            <td class="text-center">{{$sks->customer_name}}</td>
                                            <td class="text-center">{{$sks->quantity_sold}}</td>


                                            <td><a href="/admin/stockist/{{$sks->id}}/edit" class="btn btn-warning float-right " >Edit <i class="fa fa-edit"></i></a>

                                            </td>
                                        <td>
                                            <form action="/admin/stockist/{{$sks->id}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" value="Delete" class="btn btn-block btn-danger float-right" onclick="return  confirm('Are you sure you want to delete this entry?')">
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
                                <nav class="my-4">
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