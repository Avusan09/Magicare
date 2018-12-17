@extends('admin.layout.master')
@section('dashboard','Inventory Information')
@section('title','| Inventory Information')
@section('content')


    <div class="row">
        <div class="col-lg-12 p-5">


            <span class="h3 font-weight-bold">Edit : {{$inventory->product}}</span>

            <form method="post" action="{{action('InventoryController@update', $inventory->id)}}">
                {{csrf_field()}}
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="product" >Add a new Product</label>
                                <input value={{$inventory->product}} type="text" class="text-uppercase form-control" id="product" name="product" required>

                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="price" >Price</label>
                                <input value={{$inventory->price}} required type="number" class="form-control" id="price" name="price">
                                <span class="bmd-help text-muted">In Rs.</span>

                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="supplier">Supplier Information</label>
                                <input value={{$inventory->supplier}} required type="text" class="text-uppercase form-control" id="supplier" name="supplier">
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="stored_location">Stored Location</label>
                                <input value={{$inventory->stored_location}} required type="text" class="text-uppercase form-control" id="stored_location" name="stored_location">
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <?php
                            $status1=$inventory->status;
                            $status1_1 = ($status1 == 'Deployed') ? 'selected' : '' ;
                            $status1_2 = ($status1 == 'Used') ? 'selected' : '' ;
                            $status1_3 = ($status1 == 'Stored') ? 'selected' : '' ;

                            ?>
                            <label for="status" class="bmd-label-floating">status</label>
                            <select id="status" class="form-control" name="status">
                                <option value="" disabled selected>status</option>
                                <option <?php echo $status1_1; ?> value="Deployed">Deployed</option>
                                <option <?php echo $status1_2; ?> value="Used">Used</option>
                                <option <?php echo $status1_3; ?> value="Stored">Stored</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="used_in">Used In</label>
                                <input value={{$inventory->used_in}} required type="text" class="text-uppercase form-control" id="used_in" name="used_in">
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="serial_number">Serial Number</label>
                                <input value={{$inventory->serial_number}} required type="text" class="text-uppercase form-control" id="serial_number" name="serial_number">
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="date_added">Date Added</label>
                                <input value={{$inventory->date}} required type="text" class="form-control date-picker" id="date_added" name="date">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="remarks">Remarks</label>
                                <textarea type="text" class="form-control" id="remarks" name="remarks" rows="6">{{$inventory->remarks}}</textarea>
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