@extends('admin.layout.master')
@section('dashboard','Inventory Information')
@section('title','| Inventory Information')
@section('content')


    <div class="row">
        <div class="col-lg-12 p-5">


            <span class="h3 font-weight-bold">Create new Inventory Item</span>

            <form action="/admin/inventory" method="post" class="card">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="product" >Add a new Product</label>
                                <input type="text" class="form-control" id="product" name="product">

                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="price" >Price</label>
                                <input type="text" class="form-control" id="price" name="price">
                                <span class="bmd-help text-muted">In Rs.</span>

                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="supplier">Supplier Information</label>
                                <input type="text" class="form-control" id="supplier" name="supplier">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="stored_location">Stored Location</label>
                                <input type="text" class="form-control" id="stored_location" name="stored_location">
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="-">-</option>
                                    <option value="Deployed">Deployed</option>
                                    <option value="Used">Used</option>
                                    <option value="Stored">Stored</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="used_in">Used In</label>
                                <input type="text" class="form-control" id="used_in" name="used_in">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="remarks">Remarks</label>
                                <textarea type="text" class="form-control" id="remarks" name="remarks" rows="6"></textarea>
                            </div>
                        </div>



                        <div class="submit-button p-2">
                            <button class="btn btn-md btn-success ">Submit</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

@stop