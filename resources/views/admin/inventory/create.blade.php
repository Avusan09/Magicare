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
                                <input type="text" class=" form-control" id="product" name="product" required>

                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="price" >Price</label>
                                <input required type="number" class="form-control" id="price" name="price">
                                <span class="bmd-help text-muted">In Rs.</span>

                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="supplier">Supplier Information</label>
                                <input required type="text" class=" form-control" id="supplier" name="supplier">
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="stored_location">Stored Location</label>
                                <input required type="text" class=" form-control" id="stored_location" name="stored_location">
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">-</option>
                                    <option value="Deployed">Deployed</option>
                                    <option value="Used">Used</option>
                                    <option value="Stored">Stored</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="used_in">Used In</label>
                                <input required type="text" class=" form-control" id="used_in" name="used_in">
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="serial_number">Serial Number</label>
                                <input required type="text" class=" form-control" id="serial_number" name="serial_number">
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label class="" for="date_added">Date Added</label>
                                <input required type="text" class="form-control date-picker" id="date_added" name="date">
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

<script>
    function checkDate() {
        if ($('#date_added').val() == '') {
            alert("Date field is empty")
            return false
        }

        else {
            return true
        }

    }

    $('form').submit(function() {
        if(checkDate())
        {
            return true
        }
        else
        {
            return false
        }

    });
</script>

@stop