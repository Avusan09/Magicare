@extends('admin.layout.master')
@section('dashboard','Vehicles')
@section('title','| Vehicle Create')
@section('content')


    <form action="/admin/vehicle" method="POST">
        {{csrf_field()}}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add Vehical Information</h4>

                </div>
                <div class="modal-body mx-3">
                    <label for="servicing_date"  class="grey-text">Servicing Date</label>

                    <input placeholder="Selected date" type="text"  name="servicing_date" id="servicing_date" class="form-control nepali-calendar">



                    <br>

                    <div>
                    <label for="vehical_prefix" class="grey-text">Vehicle Prefix</label>
                    <input type="text" name="vehical_prefix" id="vehical_prefix" style="text-transform: uppercase" class="form-control">
                    </div>
                    <br>
                    <div>

                    <label for="vehical_number" class="grey-text"> Vehicle Number</label>
                    <input type="number" name="vehical_number" id="vehical_number" class="form-control">
                   </div> <br>

                    <div>
                    <select class="browser-default custom-select" name="type">
                        <option value="" disabled selected>Choose your Vehicle Type</option>
                        <option value="Bike">Bike</option>
                        <option value="Scooter">Scooter</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Pickup">Pickup</option>
                        <option value="Tipper">Tipper</option>
                        <option value="Heavy">Heavy</option>
                        <option value="Generator">Generator</option>
                    </select>
                    </div> <br>

                    

                    <div>
                    <label for="worked_hours" class="grey-text">Worked Hours</label>
                    <input type="number" name="worked_hours" id="worked_hours" class="form-control">
                    </div> <br>



                    <div>
                    <label for="mobil" class="grey-text">Mobil</label>
                    <input type="number" name="mobil" id="mobil" class="form-control">
                    </div> <br>

                    <div>
                    <label for="transmission_oil" class="grey-text">Transmission Oil</label>
                    <input type="number" name="transmission_oil" id="transmission_oil" class="form-control">
                    </div> <br>

                    <div>
                    <label for="hydrolic" class="grey-text">Hydrolic</label>
                    <input type="number" name="hydrolic" id="hydrolic" class="form-control">
                    </div> <br>

                    <div>
                        <p class="text-muted">Mobil Filter Count</p>
                        <select class="browser-default custom-select" name="mobil_filter">
                            <option value="" disabled selected>Mobil Filter Count</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>

                    </div>
                    <br>
                    <div>
                        <p class="text-muted">Diesel Filter</p>
                        <select class="browser-default custom-select" name="diesel_filter">
                            <option value="" disabled selected>Diesel Filter</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>

                    </div>

                    <br>
                    <div>
                        <p class="text-muted">Hydrolic Filter</p>
                    <select class="browser-default custom-select" name="hydrolic_filter">
                            <option value="" disabled selected>Hydrolic Filter</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                    </select>
                    </div>
                    <br>
                    <div>
                        <p class="text-muted">Air Filter</p>
                    <select class="browser-default custom-select" name="air_filter">
                            <option value="" disabled selected>Air Filter</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                    </select>
                    </div>
                    <br>
                    <div>
                        <p class="text-muted">Pilot Filter</p>
                    <select class="browser-default custom-select" name="pilot_filter">
                            <option value="" disabled selected>Pilot Filter</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                    </select>
                    </div>


                    <br>
                    <p class="text-muted">Transmission Filter</p>
                    <select class="browser-default custom-select" name="transmission_filter">
                            <option value="" disabled selected>Transmission Filter</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                    </select>

                    <br>
                    <p class="text-muted">Water Safety</p>
                    <select class="browser-default custom-select" name="water_safety">
                            <option value="" disabled selected>Water Safety</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                    </select>


                    <br>
                    <p class="text-muted">Breather</p>
                    <select class="browser-default custom-select" name="breather">
                            <option value="" disabled selected>Breather</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                    </select>

                    <br>



                    <div>
                    <label for="tyres" class="grey-text">Tyres</label>
                    <input type="number" name="tyres" id="tyres" class="form-control">
                    </div> <br>

                    <label for="tubes" class="grey-text">Tubes</label>
                    <input type="number" name="tubes" id="tubes" class="form-control">


                    <br>
                    <p class="text-muted">Spare Parts</p>
                    <select class="browser-default custom-select" name="spare_parts">
                        <option value="" disabled selected>Spare Parts</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>


                    <br>
                    <p class="text-muted">Engine Repair</p>
                    <select class="browser-default custom-select" name="engine_repair">
                        <option value="" disabled selected>Engine Repair</option>
                        <option value="Yes">None</option>
                        <option value="Yes">Full</option>
                        <option value="Yes">Half</option>

                    </select>
                    <br>
                    <div>
                    <label for="total_cost" class="grey-text">Total Cost</label>
                    <input type="number" name="total_cost" id="total_cost" class="form-control">
                    </div>



                    <div class="md-form">
                        <textarea type="text" id="remarks" class="md-textarea form-control" rows="5" name="remarks"></textarea>
                        <label for="remarks">Remarks</label>
                    </div> <br>


                </div> <br>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-unique">Create Vehicle Information<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>

    </form>

@stop
