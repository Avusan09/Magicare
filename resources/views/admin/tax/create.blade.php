@extends('admin.layout.master')
@section('dashboard','Tax Permit')
@section('title','| Tax Permit Information')
@section('content')

<div class="row">
    <div class="col-lg-12 p-5">


        <span class="h3 font-weight-bold">Add new Tax Information</span>

    <form action="/admin/tax" method="POST" class="card">
        {{csrf_field()}}



            <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="date"  class="bmd-label-floating">Date</label>
                            <input  required type="text"  name="date" id="date" class="form-control date-picker">
                        </div>

                        <div class="col-md-3 mb-4">
                            <label for="vehicle_prefix" class="bmd-label-floating">Vehicle Prefix</label>
                            <input type="text" required name="vehicle_prefix" id="vehicle_prefix" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="vehicle_number" class="bmd-label-floating"> Vehicle Number</label>
                            <input type="text"   required name="vehicle_number" id="vehicle_number" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="vehicle_type" class="bmd-label-floating"> Vehicle Type</label>
                            <select id="vehicle_type" required class="form-control" name="vehicle_type">
                                <option value="" disabled selected>-</option>
                                <option value="Bike">Bike</option>
                                <option value="Scooter">Scooter</option>
                                <option value="Car">Car</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Pickup">Pickup</option>
                                <option value="Tipper">Tipper</option>
                                <option value="Heavy">Heavy</option>
                                <option value="Generator">Generator</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="chasis" class="bmd-label-floating">Chasis Number</label>
                            <input type="text" required  name="chasis" id="chasis" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="engine" class="bmd-label-floating">Engine No</label>
                            <input type="text" required  name="engine" id="engine" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rt_date"  class="bmd-label-floating">Road Tax Date</label>

                            <input  required type="text"  name="rt_date" id="rt_date" class="form-control date-picker"> <br>

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rt_bill" class="bmd-label-floating">Road Tax Bill No.</label>
                            <input type="text" required  name="rt_bill" id="rt_bill" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rt_fiscal" class="bmd-label-floating">Road Tax Fiscal year</label>
                            <input type="text" required  name="rt_fiscal" id="rt_fiscal" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rt_amount" class="bmd-label-floating">Road Tax Amount</label>
                            <input type="number" required  name="rt_amount" id="rt_amount" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="ret_date"  class="bmd-label-floating">Renewal Tax Date</label>

                            <input  required type="text"  name="ret_date" id="ret_date" class="form-control date-picker"> <br>

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="ret_bill" class="bmd-label-floating">Renewal Tax Bill No.</label>
                            <input type="text" required  name="ret_bill" id="ret_bill" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="ret_fiscal" class="bmd-label-floating">Renewal Tax Fiscal year</label>
                            <input type="text" required  name="ret_fiscal" id="ret_fiscal" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="ret_amount" class="bmd-label-floating">Renewal Tax Amount</label>
                            <input type="number" required  name="ret_amount" id="ret_amount" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rp_date"  class="bmd-label-floating">Road Permit Date</label>

                            <input  required type="text"  name="rp_date" id="rp_date" class="form-control date-picker"> <br>

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rp_bill" class="bmd-label-floating">Road Permit Bill No.</label>
                            <input type="text" required  name="rp_bill" id="rp_bill" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rp_fiscal" class="bmd-label-floating">Road Permit Fiscal year</label>
                            <input type="text" required  name="rp_fiscal" id="rp_fiscal" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="rp_amount" class="bmd-label-floating">Road Permit Amount</label>
                            <input type="number" required  name="rp_amount" id="rp_amount" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="insurance_start"  class="bmd-label-floating">Insurance Start Date</label>

                            <input  required type="text"  name="insurance_start" id="insurance_start" class="form-control date-picker"> <br>

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="insurance_end"  class="bmd-label-floating">Insurance End Date</label>

                            <input  required type="text"  name="insurance_end" id="insurance_end" class="form-control date-picker"> <br>

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="policy" class="bmd-label-floating">Policy No.</label>
                            <input type="text" required  name="policy" id="policy" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="insurance_company" class="bmd-label-floating">Insurance Company</label>
                            <input type="text" required  name="insurance_company" id="insurance_company" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="insured_amount" class="bmd-label-floating">Insured Amount</label>
                            <input type="number" required  name="insured_amount" id="insured_amount" class="form-control">

                        </div>
                        <div class="col-md-12">
                            <label class="bmd-label-floating" for="remarks">Remarks</label>
                            <textarea type="text" required  id="remarks"  class="md-textarea form-control" rows="5" name="remarks"></textarea>

                        </div>

                        <input type="hidden" id="rt_expiry_date" name="rt_expiry_date">
                        <input type="hidden" id="ret_expiry_date" name="ret_expiry_date">
                        <input type="hidden" id="rp_expiry_date" name="rp_expiry_date">

                    </div>



                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Create Tax Permit and Insurance Information<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div></div>
    </form>
            </div>



    </div>

<script>

    function checkDate() {
        if ($('#date').val() == '') {
            alert("Date field is empty")
            return false
        }

        else {
            return true
        }

    }

        function checkRtDate()
        {
            if ($('#rt_date').val() == '') {
                alert("RT Date field is empty")
                return false
            }

            else {
                return true
            }

        }

    function checkRetDate()
    {
        if ($('#ret_date').val() == '') {
            alert("RET date field is empty")
            return false
        }

        else {
            return true
        }

    }

    function checkRpDate()
    {
        if ($('#rp_date').val() == '') {
            alert("RP Date field is empty")
            return false
        }

        else {
            return true
        }

    }

    function checkStart()
    {
        if ($('#insurance_start').val() == '') {
            alert("Insurance Start Date field is empty")
            return false
        }

        else {
            return true
        }

    }

    function checkEnd()
    {
        if ($('#insurance_end').val() == '') {
            alert("Insurance End Date field is empty")
            return false
        }

        else {
            return true
        }

    }

    $('form').submit(function() {
        if(checkDate() && checkRtDate() && checkRetDate() && checkRpDate()   && checkStart() &&checkEnd())
        {
            return true
        }
        else
        {
            return false
        }

    });


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
