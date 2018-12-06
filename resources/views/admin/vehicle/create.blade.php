@extends('admin.layout.master')
@section('dashboard','Vehicles')
@section('title','| Vehicle Create')
@section('content')

    <div class="card m-5">
        <div class="card-body">
    <form action="/admin/vehicle" method="POST">
        {{csrf_field()}}

                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add Vehicle Information</h4>

                </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <label for="servicing_date"  class="black-text">Servicing Date</label>

                <input placeholder="Selected date" required type="text"  name="servicing_date" id="servicing_date" class="form-control nepali-calendar">

            </div>

            <div class="col-md-4">
                <div>
                    <label for="vehical_prefix" class="black-text">Vehicle Prefix</label>
                    <input type="text" required name="vehical_prefix" id="vehical_prefix" style="text-transform: uppercase" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div>

                    <label for="vehical_number" class="black-text"> Vehicle Number</label>
                    <input type="number" required name="vehical_number" id="vehical_number" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <label for="vehicle_name" class="black-text"> Choose your Vehicle Type</label>
                    <select required class="browser-default custom-select" name="type" id="vehicle_name">

                        <option value="Bike">Bike</option>
                        <option value="Car">Car</option>
                        <option value="Scooter">Scooter</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Pickup">Pickup</option>
                        <option value="Tipper">Tipper</option>
                        <option value="Heavy">Heavy</option>
                        <option value="Generator">Generator</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <label for="worked_hours" class="black-text">Worked Hours</label>
                    <input type="number" name="worked_hours" id="worked_hours" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <label for="mobil" class="black-text">Mobil <span class="green-text">(In litres)</span></label>
                    <input type="number" name="mobil" id="mobil" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <label for="transmission_oil" class="black-text">Transmission Oil <span class="green-text">(In litres)</span></label>
                    <input type="number" name="transmission_oil" id="transmission_oil" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-md-3">
                <div>
                    <label for="hydrolic" class="black-text">Hydrolic <span class="green-text">(In litres)</span></label>
                    <input type="number" name="hydrolic" id="hydrolic" class="form-control">
                </div>
            </div>

            <div class="col-md-3">
                <div>
                    <label for="hydrolic_filter" class="text-muted">Hydrolic Filter</label>
                    <select id="hydrolic_filter" required class="browser-default custom-select" name="hydrolic_filter">
                        <option value="" disabled selected>Hydrolic Filter</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>


            <div class="col-md-3">
                <div>
                    <label for="coolent_water" class="black-text">Coolent Water <span class="green-text">(In litres)</span></label>
                    <input type="number" name="coolent_water" id="coolent_water" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <label for="coolent_filter" class="text-muted">Coolent Filter </label>
                    <select id="coolent_filter" required class="browser-default custom-select" name="coolent_filter">
                        <option value="" disabled selected>Not Changed</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>

                </div>
            </div>
            <br>
            <div class="col-md-4">
                <div>
                    <label for="mobil_filter" class="text-muted">Mobil Filter Count</label>
                    <select id="mobil_filter" required class="browser-default custom-select" name="mobil_filter">
                        <option value="" disabled selected>Mobil Filter Count</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>

                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <label for='diesel_filter' class="text-muted">Diesel Filter</label>
                    <select id="diesel_filter" required class="browser-default custom-select" name="diesel_filter">
                        <option value="" disabled selected>Diesel Filter</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>

                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <p class="text-muted">Air Filter</p>
                    <select required class="browser-default custom-select" name="air_filter">
                        <option value="" disabled selected>Air Filter</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="col-md-4">
                <div>
                    <p class="text-muted">Pilot Filter</p>
                    <select required class="browser-default custom-select" name="pilot_filter">
                        <option value="" disabled selected>Pilot Filter</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <label for="transmission_filter" class="text-muted">Transmission Filter</label>
                <select required class="browser-default custom-select" name="transmission_filter">
                    <option value="" disabled selected>Transmission Filter</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="water_filter" class="text-muted">Water Safety</label>
                <select id="water_filter" required class="browser-default custom-select" name="water_safety">
                    <option value="" disabled selected>Water Safety</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <br>
            <div class="col-md-4">
                <label for="breather" class="text-muted">Breather</label>
                <select required class="browser-default custom-select" id="breather" name="breather">
                    <option value="" disabled selected>Breather</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-4">
                <div>
                    <label for="tyres" class="black-text">Tyres </label>
                    <input type="number" name="tyres" id="tyres" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <label for="tubes" class="black-text">Tubes</label>
                <input type="number" name="tubes" id="tubes" class="form-control">
            </div>
            <br>
            <div class="col-md-4">
                <label for="spare_parts" class="text-muted">Spare Parts</label>
                <select id="spare_parts" required class="browser-default custom-select" name="spare_parts">
                    <option value="" disabled selected>Spare Parts</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-4"><label for="engine_repair" class="text-muted">Engine Repair</label>
                <select id="engine_repair" required class="browser-default custom-select" name="engine_repair">
                    <option value="" disabled selected>Engine Repair</option>
                    <option value="Yes">None</option>
                    <option value="Yes">Full</option>
                    <option value="Yes">Half</option>

                </select>
            </div>
            <div class="col-md-4">
                <div>
                    <label for="total_cost" class="black-text">Total Cost</label>
                    <input type="number" name="total_cost" id="total_cost" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="md-form">
                    <textarea type="text" id="remarks" class="md-textarea form-control" rows="5" name="remarks"></textarea>
                    <label for="remarks">Remarks</label>
                </div>
            </div>

        </div>

        <br>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-unique">Create Vehicle Information<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>

    </form>
        </div>

    </div>
@stop
