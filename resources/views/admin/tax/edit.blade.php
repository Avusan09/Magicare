@extends('admin.layout.master')
@section('dashboard','Tax Permit')
@section('title','| Tax Permit Information')
@section('content')

    <form method="post" action="{{action('TaxController@update', $stks->id)}}">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add Tax Permits Information</h4>

                </div>
                <div class="modal-body mx-3">
                    <label for="Date"  class="grey-text"></label>

                    <input value="{{$stks->date}}"  placeholder="Selected date" required type="date"  name="date" id="date" class="form-control nepali-calendar">



                    <br>

                    <div>
                        <label for="vehicle_prefix" class="grey-text">Vehicle Prefix</label>
                        <input value="{{$stks->vehicle_prefix}}"  type="text" required name="vehicle_prefix" id="vehicle_prefix" style="text-transform: uppercase" class="form-control">
                    </div>
                    <br>
                    <div>

                        <label for="vehicle_number" class="grey-text"> Vehicle Number</label>
                        <input value="{{$stks->vehicle_number}}"  type="number" required name="vehicle_number" id="vehicle_number" class="form-control">
                    </div> <br>


                    <div>

                        <?php $statvehicle = $stks->vehicle_type;
                        $stat0_1 = ($statvehicle == 'Bike') ? 'selected' : '' ;
                        $stat0_2 = ($statvehicle == 'Scooter') ? 'selected' : '' ;
                        $stat0_3 = ($statvehicle == 'Jeep') ? 'selected' : '' ;
                        $stat0_4 = ($statvehicle == 'Pickup') ? 'selected' : '' ;
                        $stat0_5 = ($statvehicle == 'Tipper') ? 'selected' : '' ;
                        $stat0_6 = ($statvehicle == 'Heavy') ? 'selected' : '' ;
                        $stat0_7 = ($statvehicle == 'Generator') ? 'selected' : '' ;

                        ?>
                        <p class="text-muted">Vehicle Type</p>
                        <select class="browser-default custom-select" name="vehicle_type">
                            <option value="" disabled selected>Choose your Vehicle Type</option>
                            <option <?php echo $stat0_1; ?> value="Bike">Bike</option>
                            <option <?php echo $stat0_2; ?> value="Scooter">Scooter</option>
                            <option <?php echo $stat0_3; ?> value="Jeep">Jeep</option>
                            <option <?php echo $stat0_4; ?> value="Pickup">Pickup</option>
                            <option <?php echo $stat0_5; ?> value="Tipper">Tipper</option>
                            <option <?php echo $stat0_6; ?> value="Heavy">Heavy</option>
                            <option <?php echo $stat0_7; ?> value="Generator">Generator</option>
                        </select><br>
                    </div> <br>



                    <div>
                        <label for="chasis" class="grey-text">Chasis Number</label>
                        <input value="{{$stks->chasis}}"  type="text" name="chasis" id="chasis" class="form-control">
                    </div> <br>



                    <div>
                        <label for="engine" class="grey-text">Engine No</label>
                        <input value="{{$stks->engine}}"  type="text" name="engine" id="engine" class="form-control">
                    </div> <br>

                    <label for="rt_date"  class="grey-text">Road Tax Date</label>

                    <input value="{{$stks->rt_date}}"  placeholder="Road Tax Date" required type="date"  name="rt_date" id="rt_date" class="form-control nepali-calendar"> <br>

                    <div>
                        <label for="rt_bill" class="grey-text">Road Tax Bill No.</label>
                        <input value="{{$stks->rt_bill}}"  type="number" name="rt_bill" id="rt_bill" class="form-control">
                    </div> <br>

                    <div>
                        <label for="rt_fiscal" class="grey-text">Road Tax Fiscal year</label>
                        <input value="{{$stks->rt_fiscal}}"  type="number" name="rt_fiscal" id="rt_fiscal" class="form-control">
                    </div> <br>

                    <div>
                        <label for="rt_amount" class="grey-text">Road Tax Amount</label>
                        <input value="{{$stks->rt_amount}}"  type="number" name="rt_amount" id="rt_amount" class="form-control">
                    </div> <br>
                    {{-----------------------------------------------------------------------------------------------------------------}}

                    <label for="ret_date"  class="grey-text">Renewal Tax Date</label>

                    <input value="{{$stks->ret_date}}"  placeholder="Road Tax Date" required type="date"  name="ret_date" id="ret_date" class="form-control nepali-calendar"> <br>

                    <div>
                        <label for="ret_bill" class="grey-text">Renewal Tax Bill No.</label>
                        <input value="{{$stks->ret_bill}}"  type="number" name="ret_bill" id="ret_bill" class="form-control">
                    </div> <br>

                    <div>
                        <label for="ret_fiscal" class="grey-text">Renewal Tax Fiscal year</label>
                        <input value="{{$stks->ret_fiscal}}"  type="number" name="ret_fiscal" id="ret_fiscal" class="form-control">
                    </div> <br>

                    <div>
                        <label for="ret_amount" class="grey-text">Renewal Tax Amount</label>
                        <input value="{{$stks->ret_amount}}"  type="number" name="ret_amount" id="ret_amount" class="form-control">
                    </div> <br>
                    {{-----------------------------------------------------------------------------------------------------------------}}
                    <label for="rp_date"  class="grey-text">Road Permit Date</label>

                    <input value="{{$stks->rp_date}}"  placeholder="Road Tax Date" required type="date"  name="rp_date" id="rp_date" class="form-control nepali-calendar"> <br>

                    <div>
                        <label for="rp_bill" class="grey-text">Road Permit Bill No.</label>
                        <input value="{{$stks->rp_bill}}"  type="number" name="rp_bill" id="rp_bill" class="form-control">
                    </div> <br>

                    <div>
                        <label for="rp_fiscal" class="grey-text">Road Permit Fiscal year</label>
                        <input value="{{$stks->rp_fiscal}}"  type="number" name="rp_fiscal" id="rp_fiscal" class="form-control">
                    </div> <br>

                    <div>
                        <label for="rp_amount" class="grey-text">Road Permit Amount</label>
                        <input value="{{$stks->rp_amount}}"  type="number" name="rp_amount" id="rp_amount" class="form-control">
                    </div> <br>

                    <label for="insurance_start"  class="grey-text">Insurance Start Date</label>

                    <input value="{{$stks->insurance_start}}"  placeholder="Insurance Start Date" required type="date"  name="insurance_start" id="insurance_start" class="form-control nepali-calendar"> <br>
                    <br>

                    <label for="insurance_end"  class="grey-text">Insurance End Date</label>

                    <input value="{{$stks->insurance_end}}"  placeholder="Insurance End Date" required type="date"  name="insurance_end" id="insurance_end" class="form-control nepali-calendar"> <br>
                    <br>

                    <div>
                        <label for="policy" class="grey-text">Policy No.</label>
                        <input value="{{$stks->policy}}"  type="text" name="policy" id="policy" class="form-control">
                    </div> <br>

                    <div>
                        <label for="insurance_company" class="grey-text">Insurance Company </label>
                        <input value="{{$stks->insurance_company}}"  type="text" name="insurance_company" id="insurance_company" class="form-control">
                    </div> <br>

                    <div>
                        <label for="insured_amount" class="grey-text">Insured Amount</label>
                        <input value="{{$stks->insured_amount}}"  type="number" name="insured_amount" id="insured_amount" class="form-control">
                    </div> <br>



                    <div class="md-form">
                        <textarea type="text" id="remarks" class="md-textarea form-control" rows="5" value="{{$stks->remarks}}" name="remarks"></textarea>
                        <label for="remarks">Remarks</label>
                    </div> <br>


                </div> <br>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-unique">Create Tax Permit and Insurance Information<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>

    </form>

@stop