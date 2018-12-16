@extends('admin.layout.master')
@section('dashboard','Inventory Information')
@section('title','| Inventory Information')
@section('content')


    <div class="row">
        <div class="col-lg-12 p-5">


            <span class="h3 font-weight-bold">Inventory Management</span>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <a href="inventory/create" class="btn float-right btn-success btn-rounded mb-4 " >Add Inventory Information</a>



                        <div id="accordion">
                            <div class="card ">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-info btn-sm" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Access Filters
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="row">

                                    <div class="col-sm-12 col-md-2">
                                        <div class="input-field col s12">
                                            <span style="font-size:18px;font-weight:500;" multiple="true">Product:                </span>
                                            <select style="height: 70px" class="form-control" id="productfltr" multiple>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <div class="input-field col s12">
                                            <span style="font-size:18px;font-weight:500;">Price:</span>
                                            <select  style="height: 70px" class="form-control" id="priceFltr" multiple></select>
                                        </div>
                                    </div>

                                        <div class="col-sm-12 col-md-2">
                                            <div class="input-field col s12">
                                                <span style="font-size:18px;font-weight:500;">Supplier:</span>
                                                <select  style="height: 70px" class="form-control" id="supplierFltr" multiple></select>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-2">
                                            <div class="input-field col s12">
                                                <span style="font-size:18px;font-weight:500;">Stored Location:</span>
                                                <select  style="height: 70px" class="form-control" id="storedFltr" multiple></select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-2">
                                            <div class="input-field col s12">
                                                <span style="font-size:18px;font-weight:500;">Status:</span>
                                                <select  style="height: 70px" class="form-control" id="statusfltr" multiple></select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-2">
                                            <div class="input-field col s12">
                                                <span style="font-size:18px;font-weight:500;">Used In:</span>
                                                <select  style="height: 70px" class="form-control" id="usedFltr" multiple></select>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </div>

                    </div>


                <div class="card-action">
                    <div class="summTblDiv">
                <!--Table-->
                        <div class="table-wrapper">
                <table id="example" class="display table-responsive-md" style="width:100%">


                    <!--Table head-->
                    <thead class="mdb-color darken-3 white-text">
                    <tr>
                       <th class="th-sm text-center"   style="width:50px !important" >Edit</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Delete</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Product</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Price</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Supplier</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Stored Location</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Status</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Used In</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Date Added</th>
                       <th class="th-sm text-center"   style="width:50px !important" >Remarks</th>


                    </tr>
                    </thead>


                    <tbody>
                    @foreach($inventory as $inv)
                        <tr>
                            <td><a href="/admin/inventory/{{$inv->id}}/edit" class="btn  btn-block btn-warning float-right btn-sm " > <i class="fa fa-edit"></i></a>
                            </td>

                            <td>
                                <form action="/admin/inventory/destroy/{{$inv->id}}" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="_method" value="X">
                                    <input type="submit" value="X" class="btn btn-block btn-danger btn-sm float-right" onclick="return  confirm('Are you sure you want to delete this entry?')">
                                </form>
                            </td>
                         <td class="text-center">{{$inv->product}}</td>
                         <td class="text-center">{{$inv->price}}</td>
                         <td class="text-center">{{$inv->supplier}}</td>
                         <td class="text-center">{{$inv->stored_location}}</td>
                         <td class="text-center">{{$inv->status}}</td>
                         <td class="text-center">{{$inv->used_in}}</td>
                         <td class="text-center">{{$inv->date}}</td>
                         <td class="text-center">{{$inv->remarks}}</td>

                        </tr>
                    @endforeach
                    </tbody>



                                    </table>
                    </div>
                </div>


        </div>
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
                    this.api().columns([2]).every( function () {
                        var column = this;
                        console.log(column);
                        var select = $("#productfltr");
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );

                    this.api().columns([3]).every( function () {
                        var column = this;
                        console.log(column);
                        var select = $("#priceFltr");
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );

                    this.api().columns([4]).every( function () {
                        var column = this;
                        console.log(column);
                        var select = $("#supplierFltr");
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );

                    this.api().columns([5]).every( function () {
                        var column = this;
                        console.log(column);
                        var select = $("#storedFltr");
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                    this.api().columns([6]).every( function () {
                        var column = this;
                        console.log(column);
                        var select = $("#statusfltr");
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                    this.api().columns([7]).every( function () {
                        var column = this;
                        console.log(column);
                        var select = $("#usedFltr");
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );



                    
                }
            });

            $('#productfltr').on('change', function(){
                var search = [];

                $.each($('#productfltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(2).search(search, true, false).draw();
            });

            $('#priceFltr').on('change', function(){
                var search = [];

                $.each($('#priceFltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(3).search(search, true, false).draw();
            });

            $('#supplierFltr').on('change', function(){
                var search = [];

                $.each($('#supplierFltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(4).search(search, true, false).draw();
            });

            $('#storedFltr').on('change', function(){
                var search = [];

                $.each($('#storedFltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(5).search(search, true, false).draw();
            });

            $('#statusfltr').on('change', function(){
                var search = [];

                $.each($('#statusfltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(6).search(search, true, false).draw();
            });

            $('#usedFltr').on('change', function(){
                var search = [];

                $.each($('#usedFltr option:selected'), function(){
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(7).search(search, true, false).draw();
            });



            // $('#clearSearch').on('click', function(){
            //     var search = [];
            //     table.column(2).search(search, true, false).draw();
            //     table.column(4).search(search, true, false).draw();
            //
            // })
        });



    </script>


    <style>

        #example_filter
        {display: none}



    </style>
    @stop


