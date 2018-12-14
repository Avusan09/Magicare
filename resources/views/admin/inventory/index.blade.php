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
            <a href="inventory/create" class="btn float-right btn-success btn-rounded mb-4" >Add Inventory Information</a>

            <div class="table-wrapper">
                <!--Table-->
                <table class="table table-hover table-responsive-lg table-bordered" id="myTable">


                    <!--Table head-->
                    <thead class="mdb-color darken-3 white-text">
                    <tr>
                       <th class="th-sm">Product</th>
                       <th class="th-sm">Price</th>
                       <th class="th-sm">Supplier</th>
                       <th class="th-sm">Stored Location</th>
                       <th class="th-sm">Status</th>
                       <th class="th-sm">Used In</th>
                       <th class="th-sm">Date Added</th>
                       <th class="th-sm">Remarks</th>
                       <th class="th-sm">Edit</th>
                       <th class="th-sm">Delete</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($inventory as $inv)
                        <tr>
                         <td class="text-center">{{$inv->product}}</td>
                         <td class="text-center">{{$inv->price}}</td>
                         <td class="text-center">{{$inv->supplier}}</td>
                         <td class="text-center">{{$inv->stored_location}}</td>
                         <td class="text-center">{{$inv->status}}</td>
                         <td class="text-center">{{$inv->used_in}}</td>
                         <td class="text-center">{{$inv->created_at}}</td>
                         <td class="text-center">{{$inv->remarks}}</td>
                         <td><a href="/admin/inventory/{{$inv->id}}/edit" class="btn btn-warning float-right " > <i class="fa fa-edit"></i></a>
                         </td>

                            <td>
                                <form action="/admin/inventory/{{$inv->id}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Delete" class="btn btn-block btn-danger float-right" onclick="return  confirm('Are you sure you want to delete this entry?')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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