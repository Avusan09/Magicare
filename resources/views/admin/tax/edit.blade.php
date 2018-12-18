@extends('admin.layout.master')
@section('dashboard','Tax Permit')
@section('title','| Tax Permit Information')
@section('content')

<div class="row">
    <div class="col-lg-12 p-5">




        <form method="post" action="{{action('TaxController@update', $stks->id)}}">
            {{csrf_field()}}
            {{ method_field('PATCH') }}
            <h4 class="modal-title w-100 font-weight-bold">Update Tax Information: ${{$stks->vehical_prefix}}</h4>


            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="date"  class="bmd-label-floating">Date</label>
                        <input value="{{$stks->date}}"  required type="text"  name="date" id="date" class="form-control date-picker">
                    </div>

                    <div class="col-md-3 mb-4">
                        <label for="vehicle_prefix" class="bmd-label-floating">Vehicle Prefix</label>
                        <input value="{{$stks->vehicle_prefix}}" type="text" required name="vehicle_prefix" id="vehicle_prefix" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="vehicle_number" class="bmd-label-floating"> Vehicle Number</label>
                        <input value="{{$stks->vehicle_number}}" type="text"   required name="vehicle_number" id="vehicle_number" class="form-control">

                    </div>
                    <div class="col-md-3 mb-4">
                        <?php $statvehicle = $stks->vehicle_type;
                        $stat0_1 = ($statvehicle == 'Bike') ? 'selected' : '' ;
                        $stat0_2 = ($statvehicle == 'Scooter') ? 'selected' : '' ;
                        $stat0_3 = ($statvehicle == 'Jeep') ? 'selected' : '' ;
                        $stat0_4 = ($statvehicle == 'Pickup') ? 'selected' : '' ;
                        $stat0_5 = ($statvehicle == 'Tipper') ? 'selected' : '' ;
                        $stat0_6 = ($statvehicle == 'Heavy') ? 'selected' : '' ;
                        $stat0_7 = ($statvehicle == 'Generator') ? 'selected' : '' ;
                        $stat0_8 = ($statvehicle == 'Car') ? 'selected' : '' ;

                        ?>

                        <label class="bmd-label-floating" for="vehicle_type">Vehicle Type</label>
                        <select class="form-control" name="vehicle_type" id="vehicle_type">
                            <option value="" disabled selected>Choose your Vehicle Type</option>
                            <option <?php echo $stat0_1; ?> value="Bike">Bike</option>
                            <option <?php echo $stat0_8; ?> value="Car">Car</option>
                            <option <?php echo $stat0_2; ?> value="Scooter">Scooter</option>
                            <option <?php echo $stat0_3; ?> value="Jeep">Jeep</option>
                            <option <?php echo $stat0_4; ?> value="Pickup">Pickup</option>
                            <option <?php echo $stat0_5; ?> value="Tipper">Tipper</option>
                            <option <?php echo $stat0_6; ?> value="Heavy">Heavy</option>
                            <option <?php echo $stat0_7; ?> value="Generator">Generator</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="chasis" class="bmd-label-floating">Chasis Number</label>
                        <input value="{{$stks->chasis}}" type="text" required  name="chasis" id="chasis" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="engine" class="bmd-label-floating">Engine No</label>
                        <input value="{{$stks->engine}}" type="text" required  name="engine" id="engine" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rt_date"  class="bmd-label-floating">Road Tax Date</label>

                        <input value="{{$stks->rt_date}}"  required type="text"  name="rt_date" id="rt_date" class="form-control date-picker"> <br>

                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rt_bill" class="bmd-label-floating">Road Tax Bill No.</label>
                        <input value="{{$stks->rt_bill}}" type="text" required  name="rt_bill" id="rt_bill" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rt_fiscal" class="bmd-label-floating">Road Tax Fiscal year</label>
                        <input value="{{$stks->rt_fiscal}}" type="text" required  name="rt_fiscal" id="rt_fiscal" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rt_amount" class="bmd-label-floating">Road Tax Amount</label>
                        <input value="{{$stks->rt_amount}}" type="number" required  name="rt_amount" id="rt_amount" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="ret_date"  class="bmd-label-floating">Renewal Tax Date</label>

                        <input value="{{$stks->ret_date}}"  required type="text"  name="ret_date" id="ret_date" class="form-control date-picker"> <br>

                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="ret_bill" class="bmd-label-floating">Renewal Tax Bill No.</label>
                        <input value="{{$stks->ret_bill}}" type="text" required  name="ret_bill" id="ret_bill" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="ret_fiscal" class="bmd-label-floating">Renewal Tax Fiscal year</label>
                        <input value="{{$stks->ret_fiscal}}" type="text" required  name="ret_fiscal" id="ret_fiscal" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="ret_amount" class="bmd-label-floating">Renewal Tax Amount</label>
                        <input value="{{$stks->ret_amount}}" type="number" required  name="ret_amount" id="ret_amount" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rp_date"  class="bmd-label-floating">Road Permit Date</label>

                        <input value="{{$stks->rp_date}}"  required type="text"  name="rp_date" id="rp_date" class="form-control date-picker"> <br>

                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rp_bill" class="bmd-label-floating">Road Permit Bill No.</label>
                        <input value="{{$stks->rp_bill}}" type="text" required  name="rp_bill" id="rp_bill" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rp_fiscal" class="bmd-label-floating">Road Permit Fiscal year</label>
                        <input value="{{$stks->rp_fiscal}}" type="text" required  name="rp_fiscal" id="rp_fiscal" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="rp_amount" class="bmd-label-floating">Road Permit Amount</label>
                        <input value="{{$stks->rp_amount}}" type="number" required  name="rp_amount" id="rp_amount" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="insurance_start"  class="bmd-label-floating">Insurance Start Date</label>

                        <input value="{{$stks->insurance_start}}"  required type="text"  name="insurance_start" id="insurance_start" class="form-control date-picker"> <br>

                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="insurance_end"  class="bmd-label-floating">Insurance End Date</label>

                        <input value="{{$stks->insurance_end}}"  required type="text"  name="insurance_end" id="insurance_end" class="form-control date-picker"> <br>

                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="policy" class="bmd-label-floating">Policy No.</label>
                        <input value="{{$stks->policy}}" type="text" required  name="policy" id="policy" class="form-control">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="insurance_company" class="bmd-label-floating">Insurance Company</label>
                        <input value="{{$stks->insurance_company}}" type="text" required  name="insurance_company" id="insurance_company" class="form-control">

                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="insured_amount" class="bmd-label-floating">Insured Amount</label>
                        <input value="{{$stks->insured_amount}}" type="number" required  name="insured_amount" id="insured_amount" class="form-control">

                    </div>
                    <div class="col-md-12">
                        <label class="bmd-label-floating" for="remarks">Remarks</label>
                        <textarea type="text" required  id="remarks"  class="md-textarea form-control" rows="5" name="remarks">
                            {{$stks->remarks}}
                        </textarea>

                    </div>

                    <input value="{{$stks->rt_expiry_date}}" type="hidden" id="rt_expiry_date" name="rt_expiry_date">
                    <input value="{{$stks->ret_expiry_date}}" type="hidden" id="ret_expiry_date" name="ret_expiry_date">
                    <input value="{{$stks->rp_expiry_date}}" type="hidden" id="rp_expiry_date" name="rp_expiry_date">

                </div>


                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Create Tax Permit and Insurance Information<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div></div>
        </form>
    </div>



</div>

<script>
    function rtExpiryDate(event){
        var datePickerData = event.datePickerData;
        var output = datePickerData.adDate;
        var date = new Date(output);
        var x = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();
        $('#rt_expiry_date').val(x);

    }
    $("#rt_date").on("dateSelect", function (event) {
        rtExpiryDate(event);
    });

    function rpExpiryDate(event){
        var datePickerData = event.datePickerData;
        var output = datePickerData.adDate;
        var date = new Date(output);
        var y = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();
        $('#rp_expiry_date').val(y);

    }
    $("#rp_date").on("dateSelect", function (event) {
        rpExpiryDate(event);
    });

    function retExpiryDate(event){
        var datePickerData = event.datePickerData;
        var output = datePickerData.adDate;
        var date = new Date(output);
        var z = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();
        $('#ret_expiry_date').val(z);

    }
    $("#ret_date").on("dateSelect", function (event) {
        retExpiryDate(event);
    });
</script>


@stop
