@extends('admin.layout.master')
@section('dashboard','Stockist')
@section('title','| Vehicle Create')
@section('content')

    <div class="row">
        <div class="col-lg-12 p-5 card">

    <form method="post" action="{{action('VehiclesController@update', $stks->id)}}">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <h4 class="modal-title w-100 font-weight-bold">Update Vehicle Information: ${{$stks->vehical_prefix}}</h4>



                <div class="modal-body mx-3">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="servicing_date"  class="bmd-label-floating">Servicing Date</label>
                            <input value="{{$stks->servicing_date }}"   type="text"  name="servicing_date" id="servicing_date" class="form-control date-picker" >

                        </div>

                        <div class="col-md-3 mb-4">
                            <label for="vehical_prefix" class="bmd-label-floating">Vehicle Prefix</label>
                            <input value="{{$stks->vehical_prefix }}"   type="text" name="vehical_prefix" id="vehical_prefix" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="vehical_number" class="bmd-label-floating"> Vehicle Number</label>
                            <input value="{{$stks->vehical_number }}"   type="number" name="vehical_number" id="vehical_number" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <?php $statvehicle = $stks->type;
                            $stat0_1 = ($statvehicle == 'Bike') ? 'selected' : '' ;
                            $stat0_2 = ($statvehicle == 'Scooter') ? 'selected' : '' ;
                            $stat0_3 = ($statvehicle == 'Jeep') ? 'selected' : '' ;
                            $stat0_4 = ($statvehicle == 'Pickup') ? 'selected' : '' ;
                            $stat0_5 = ($statvehicle == 'Tipper') ? 'selected' : '' ;
                            $stat0_6 = ($statvehicle == 'Heavy') ? 'selected' : '' ;
                            $stat0_7 = ($statvehicle == 'Generator') ? 'selected' : '' ;
                            $stat0_8 = ($statvehicle == 'Car') ? 'selected' : '' ;

                            ?>

                            <label class="bmd-label-floating" for="type">Vehicle Type</label>
                            <select class="form-control" name="type" id="type">
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
                            <label for="worked_hours" class="bmd-label-floating">Worked Hours</label>
                            <input value="{{$stks->worked_hours }}"    type="number" name="worked_hours" id="worked_hours" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="mobil" class="bmd-label-floating">Mobil</label>
                            <input value="{{$stks->mobil }}"    type="number" name="mobil" id="mobil" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="transmission_oil" class="bmd-label-floating">Transmission Oil</label>
                            <input value="{{$stks->transmission_oil }}"    type="number" name="transmission_oil" id="transmission_oil" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="hydrolic" class="bmd-label-floating">Hydrolic</label>
                            <input value="{{$stks->hydrolic }}"    type="number" name="hydrolic" id="hydrolic" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $stat3=$stks->hydrolic_filter;
                            $stat3_1 = ($stat3 == 'Yes') ? 'selected' : '' ;
                            $stat3_2 = ($stat3 == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="hydrolic_filter" class="bmd-label-floating">Hydrolic Filter</label>
                            <select id="hydrolic_filter" class="form-control" name="hydrolic_filter">
                                <option value="" disabled selected>Hydrolic Filter</option>
                                <option <?php echo $stat3_1; ?> value="Yes">Yes</option>
                                <option <?php echo $stat3_2; ?> value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="coolent_water" class="bmd-label-floating">Coolent Water</label>
                            <input value="{{$stks->coolent_water }}"    type="number" name="coolent_water" id="coolent_water" class="form-control">

                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $statcl=$stks->coolent_filter;
                            $statcl_1 = ($stat3 == 'Yes') ? 'selected' : '' ;
                            $statcl_2 = ($stat3 == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="coolent_filter" class="bmd-label-floating">Coolent Filter</label>
                            <select id="coolent_filter" class="form-control" name="coolent_filter">
                                <option value="" disabled selected>Coolent Filter</option>
                                <option <?php echo $statcl_1; ?> value="Yes">Yes</option>
                                <option <?php echo $statcl_2; ?> value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $statm=$stks->mobil_filter;
                            $statm_1 = ($statm == '1') ? 'selected' : '' ;
                            $statm_2 = ($statm == '2') ? 'selected' : '' ;
                            $statm_3 = ($statm == '0') ? 'selected' : '' ;

                            ?>
                            <label for="mobil_filter" class="bmd-label-floating">Mobil Filter</label>
                            <select id="mobil_filter" class="form-control" name="mobil_filter">
                                <option value="" disabled selected>-</option>
                                <option <?php echo $statm_1; ?> value="1">1</option>
                                <option <?php echo $statm_2; ?> value="2">2</option>
                                <option <?php echo $statm_3; ?> value="0">0</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-4">
                            <?php
                            $statdf=$stks->diesel_filter;
                            $statdf_1 = ($statdf == 'Yes') ? 'selected' : '' ;
                            $statdf_2 = ($statdf == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="diesel_filter" class="bmd-label-floating">Diesel Filter</label>
                            <select id="diesel_filter" class="form-control" name="diesel_filter">
                                <option value="" disabled selected>-</option>
                                <option <?php echo $statdf_1; ?> value="Yes">Yes</option>
                                <option <?php echo $statdf_2; ?> value="No">No</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $stat4=$stks->air_filter;
                            $stat4_1 = ($stat4 == 'Yes') ? 'selected' : '' ;
                            $stat4_2 = ($stat4 == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="air_filter" class="bmd-label-floating">Air Filter</label>
                            <select id="air_filter" class="form-control" name="air_filter">
                                <option value="" disabled selected>Air Filter</option>
                                <option  <?php echo $stat4_1; ?> value="Yes">Yes</option>
                                <option   <?php echo $stat4_2; ?> value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $statpf=$stks->pilot_filter;
                            $statpf_1 = ($statpf == 'Yes') ? 'selected' : '' ;
                            $statpf_2 = ($statpf == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="pilot_filter" class="bmd-label-floating">Pilot Filter</label>
                            <select id="pilot_filter" class="form-control" name="pilot_filter">
                                <option value="" disabled selected>Pilot Filter</option>
                                <option <?php echo $statpf_1; ?> value="Yes">Yes</option>
                                <option <?php echo $statpf_2; ?> value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $stat6=$stks->transmission_filter;
                            $stat6_1 = ($stat6 == 'Yes') ? 'selected' : '' ;
                            $stat6_2 = ($stat6 == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="transmission_filter" class="bmd-label-floating">Transmission Filter</label>
                            <select id="transmission_filter" class="form-control" name="transmission_filter">
                                <option value="" disabled selected>Transmission Filter</option>
                                <option <?php echo $stat6_1; ?> value="Yes">Yes</option>
                                <option <?php echo $stat6_2; ?>value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $stat7=$stks->water_safety;
                            $stat7_1 = ($stat7 == 'Yes') ? 'selected' : '' ;
                            $stat7_2 = ($stat7 == 'No') ? 'selected' : '' ;

                            ?>

                            <label for="water_safety" class="bmd-label-floating">Water Safety</label>
                            <select id="water_safety" class="form-control" name="water_safety">
                                <option value="" disabled selected>Water Safety</option>
                                <option <?php echo $stat7_1; ?> value="Yes">Yes</option>
                                <option <?php echo $stat7_2; ?> value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <?php
                            $stat8=$stks->breather;
                            $stat8_1 = ($stat8 == 'Yes') ? 'selected' : '' ;
                            $stat8_2 = ($stat8 == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="breather" class="bmd-label-floating">Breather</label>
                            <select id="breather" class="form-control" name="breather">
                                <option value="" disabled selected>Breather</option>
                                <option <?php echo $stat8_1; ?> value="Yes">Yes</option>
                                <option <?php echo $stat8_2; ?> value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="tyres" class="bmd-label-floating">Tyres</label>
                            <input value="{{$stks->tyres }}"    type="number" name="tyres" id="tyres" class="form-control">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="tubes" class="bmd-label-floating">Tubes</label>
                            <input value="{{$stks->tubes }}"    type="number" name="tubes" id="tubes" class="form-control">
                        </div>

                        <div class="col-md-3 mb-4">
                            <?php
                            $statpa=$stks->spare_parts;
                            $statpa_1 = ($statpa == 'Yes') ? 'selected' : '' ;
                            $statpa_2 = ($statpa == 'No') ? 'selected' : '' ;

                            ?>
                            <label for="spare_parts" class="bmd-label-floating">Spare Parts</label>
                            <select id="spare_parts" class="form-control" name="spare_parts">
                                <option value="" disabled selected>Spare Parts</option>
                                <option <?php echo $statpa_1; ?> value="Yes">Yes</option>
                                <option <?php echo $statpa_2; ?> value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-4">
                            <?php
                            $stat_engine_repair =$stks->engine_repair;
                            $stater_1 = ($stat_engine_repair == 'No') ? 'selected' : '' ;
                            $stater_2 = ($stat_engine_repair == 'Full') ? 'selected' : '' ;
                            $stater_3 = ($stat_engine_repair == 'Half') ? 'selected' : '' ;

                            ?>
                            <label for="engine_repair" class="bmd-label-floating">Engine Repair</label>
                            <select id="engine_repair" class="form-control" name="engine_repair">
                                <option value="" disabled selected>Engine Repair</option>
                                <option <?php echo $stater_1; ?> value="No">No</option>
                                <option <?php echo $stater_2; ?> value="Full">Full</option>
                                <option <?php echo $stater_3; ?> value="Half">Half</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="total_cost" class="bmd-label-floating">Total Cost</label>
                            <input value="{{$stks->total_cost }}"    type="number" name="total_cost" id="total_cost" class="form-control">
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="remarks" class="bmd-label-floating">Remarks</label>
                                <textarea type="text" id="remarks" class="md-textarea form-control" rows="5" name="remarks" >{{$stks->remarks}}</textarea>

                        </div>
                    </div>


                            <button type="submit" class="btn btn-success   ">Update Vehicle Information<i class="fa fa-paper-plane-o ml-1"></i></button>

                </div>
    </form>
</div>
    </div>

    <style>

    </style>
@stop

