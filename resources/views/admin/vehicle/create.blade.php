@extends('admin.layout.master')
@section('dashboard','Vehicles')
@section('title','| Vehicle Create')
@section('content')

    <div class="card">
        <div class="card-body">
    <form action="/admin/vehicle" method="POST">
        {{csrf_field()}}

                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add Vehicle Information</h4>

                </div>
        <br>
        <div class="row p-4">
            <div class="col-md-12 mb-4">
                <label for="servicing_date"  class="bmd-label-floating">Servicing Date</label>

                <input placeholder="Selected date" required type="text"  name="servicing_date" id="servicing_date" class="form-control date-picker">

            </div>

            <br>
            <br>

            <div class="col-md-3 mb-4 ">
                <div>
                    <label for="vehical_prefix" class="bmd-label-floating">Vehicle Prefix</label>
                    <input type="text" required name="vehical_prefix" id="vehical_prefix" style="text-transform: uppercase" class="form-control">
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div>

                    <label for="vehical_number" class="bmd-label-floating"> Vehicle Number</label>
                    <input type="number" required name="vehical_number" id="vehical_number" class="form-control">
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div>
                    <label for="vehicle_name" class="bmd-label-floating"> Choose your Vehicle Type</label>
                    <select required class="form-control" name="type" id="vehicle_name">

                        <option value="">-</option>
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

            <div class="col-md-3 mb-4">
                <div>
                    <label for="worked_hours" class="bmd-label-floating">Worked Hours</label>
                    <input required type="number" name="worked_hours" id="worked_hours" class="form-control">
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div>
                    <label for="mobil" class="bmd-label-floating">Mobil <span class="green-text">(In litres)</span></label>
                    <input required type="number" name="mobil" id="mobil" class="form-control">
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div>
                    <label for="transmission_oil" class="bmd-label-floating">Transmission Oil <span class="green-text">(In litres)</span></label>
                    <input required type="number" name="transmission_oil" id="transmission_oil" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-md-3 mb-4">
                <div>
                    <label for="hydrolic" class="bmd-label-floating">Hydrolic <span class="green-text">(In litres)</span></label>
                    <input required type="number" name="hydrolic" id="hydrolic" class="form-control">
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div>
                    <label for="hydrolic_filter" class="bmd-label-floating">Hydrolic Filter</label>
                    <select id="hydrolic_filter" required class="form-control" name="hydrolic_filter">
                        <option value="" disabled selected>-</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>


            <div class="col-md-3 mb-4">
                <div>
                    <label for="coolent_water" class="bmd-label-floating">Coolent Water <span class="green-text">(In litres)</span></label>
                    <input required type="number" name="coolent_water" id="coolent_water" class="form-control">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div>
                    <label for="coolent_filter" class="bmd-label-floating">Coolent Filter </label>
                    <select id="coolent_filter" required class="form-control" name="coolent_filter">
                        <option value="" disabled selected>-</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>

                </div>
            </div>
            <br>
            <div class="col-md-3 mb-4">
                <div>
                    <label for="mobil_filter" class="bmd-label-floating">Mobil Filter Count</label>
                    <select id="mobil_filter" required class="form-control" name="mobil_filter">
                        <option value="" disabled selected>-</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div>
                    <label for='diesel_filter' class="bmd-label-floating">Diesel Filter</label>
                    <select id="diesel_filter" required class="form-control" name="diesel_filter">
                        <option value="" disabled selected>-</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>

                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div>
                    <label class="bmd-label-floating" for="air_filter">Air Filter</label>
                    <select required class="form-control" id="air_filter" name="air_filter">
                        <option value="" disabled selected>-</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="col-md-3 mb-4">
                <div>
                    <label class="bmd-label-floating" for="pilot_filter">Pilot Filter</label>
                    <select required class="form-control" id="pilot_filter" name="pilot_filter">
                        <option value="" disabled selected>-</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <label for="transmission_filter" class="bmd-label-floating">Transmission Filter</label>
                <select required class="form-control" id="transmission_filter"  name="transmission_filter">
                    <option value="" disabled selected>-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-3 mb-4">
                <label for="water_filter" class="bmd-label-floating">Water Safety</label>
                <select id="water_filter" required class="form-control" name="water_safety">
                    <option value="" disabled selected>-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <br>
            <div class="col-md-3 mb-4">
                <label for="breather" class="text-muted">Breather</label>
                <select required class="form-control" id="breather" name="breather">
                    <option value="" disabled selected>-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-3 mb-4">
                <div>
                    <label for="tyres" class="bmd-label-floating">Tyres </label>
                    <input required type="number" name="tyres" id="tyres" class="form-control">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <label for="tubes" class="bmd-label-floating">Tubes</label>
                <input required type="number" name="tubes" id="tubes" class="form-control">
            </div>
            <br>
            <div class="col-md-3 mb-4">
                <label for="spare_parts" class="text-muted">Spare Parts</label>
                <select id="spare_parts" required class="form-control" name="spare_parts">
                    <option value="" disabled selected>-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-3 mb-4"><label for="engine_repair" class="bmd-label-floating">Engine Repair</label>
                <select id="engine_repair" required class="form-control" name="engine_repair">
                    <option value="" disabled selected>-</option>
                    <option value="None">None</option>
                    <option value="Full">Full</option>
                    <option value="Half">Half</option>

                </select>
            </div>
            <div class="col-md-3 mb-4">
                <div>
                    <label for="total_cost" class="bmd-label-floating">Total Cost</label>
                    <input required type="number" name="total_cost" id="total_cost" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="md-form">
                    <label for="remarks">Remarks</label>
                    <textarea required type="text" id="remarks" class="form-control" rows="5" name="remarks"></textarea>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="expiry_date" name="expiry_date">
                </div>
            </div>

        </div>

        <br>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Create Vehicle Information<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>

    </form>
        </div>

    </div>

    <div class="container">
        <div class="jumbotron">
            <div class="output"></div>
        </div>
    </div>
    <style>
        .form-check, label {
            font-size: 14px;
            line-height: 1.42857;
            color: #1d1d1d !important;
            font-weight: 500;
        }
    </style>

    <script>

        function eventLog(event){
            var datePickerData = event.datePickerData;


            var output = datePickerData.adDate;
            var date = new Date(output);
            var x = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();
            $('#expiry_date').val(x);

        }

        // $("#servicing_date").on("yearChange", function (event) {
        //     eventLog(event);
        // });
        //
        // $("#servicing_date").on("monthChange", function (event) {
        //     eventLog(event);
        // });
        //
        // $("#servicing_date").on("dateChange", function (event) {
        //     eventLog(event);
        // });

        $("#servicing_date").on("dateSelect", function (event) {
            eventLog(event);
        });
    </script>
@stop

