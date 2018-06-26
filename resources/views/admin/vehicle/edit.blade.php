@extends('admin.layout.master')
@section('dashboard','Stockist')
@section('title','| Vehicle Create')
@section('content')


    <form method="post" action="{{action('VehiclesController@update', $stks->id)}}">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Update Vehicle Information</h4>

                </div>
                <div class="modal-body mx-3">
                    <label for="servicing_date"  class="grey-text">Servicing Date</label>
                    <input value="{{$stks->servicing_date }}"   type="text"  name="servicing_date" id="servicing_date" class="form-control nepali-calendar" >

                    <br>

                    <div>
                        <label for="vehical_prefix" class="grey-text">Vehicle Prefix</label>
                        <input value="{{$stks->vehical_prefix }}"   type="text" name="vehical_prefix" id="vehical_prefix" class="form-control">
                    </div>
                    <br>
                    <div>

                        <label for="vehical_number" class="grey-text"> Vehicle Number</label>
                        <input value="{{$stks->vehical_number }}"   type="number" name="vehical_number" id="vehical_number" class="form-control">
                    </div> <br>

                    <div>

                        <?php $statvehicle = $stks->type;
                        $stat0_1 = ($statvehicle == 'Bike') ? 'selected' : '' ;
                        $stat0_2 = ($statvehicle == 'Scooter') ? 'selected' : '' ;
                        $stat0_3 = ($statvehicle == 'Jeep') ? 'selected' : '' ;
                        $stat0_4 = ($statvehicle == 'Pickup') ? 'selected' : '' ;
                        $stat0_5 = ($statvehicle == 'Tipper') ? 'selected' : '' ;
                        $stat0_6 = ($statvehicle == 'Heavy') ? 'selected' : '' ;
                        $stat0_7 = ($statvehicle == 'Generator') ? 'selected' : '' ;

                        ?>
                           <p class="text-muted">Vehicle Type</p>
                        <select class="browser-default custom-select" name="type">
                            <option value="" disabled selected>Choose your Vehicle Type</option>
                            <option <?php echo $stat0_1; ?> value="Bike">Bike</option>
                            <option <?php echo $stat0_2; ?> value="Scooter">Scooter</option>
                            <option <?php echo $stat0_3; ?> value="Jeep">Jeep</option>
                            <option <?php echo $stat0_4; ?> value="Pickup">Pickup</option>
                            <option <?php echo $stat0_5; ?> value="Tipper">Tipper</option>
                            <option <?php echo $stat0_6; ?> value="Heavy">Heavy</option>
                            <option <?php echo $stat0_7; ?> value="Generator">Generator</option>
                        </select><br>
                    </div>

                    <div>
                        <label for="worked_hours" class="grey-text">Worked Hours</label>
                        <input value="{{$stks->worked_hours }}"    type="number" name="worked_hours" id="worked_hours" class="form-control">
                    </div> <br>

                    <div>
                        <label for="mobil" class="grey-text">Mobil</label>
                        <input value="{{$stks->mobil }}"    type="number" name="mobil" id="mobil" class="form-control">
                    </div> <br>

                    <div>

                        <label for="transmission_oil" class="grey-text">Transmission Oil</label>
                        <input value="{{$stks->transmission_oil }}"    type="number" name="transmission_oil" id="transmission_oil" class="form-control">
                    </div> <br>

                    <div>

                        <label for="hydrolic" class="grey-text">Hydrolic</label>
                        <input value="{{$stks->hydrolic }}"    type="number" name="hydrolic" id="hydrolic" class="form-control">
                    </div> <br>



                    <div>
                        <?php
                        $statm=$stks->mobil_filter;
                        $statm_1 = ($statm == '1') ? 'selected' : '' ;
                        $statm_2 = ($statm == '2') ? 'selected' : '' ;
                        $statm_3 = ($statm == '0') ? 'selected' : '' ;

                        ?>
                            <p class="text-muted">Mobil Filter</p>
                        <select class="browser-default custom-select" name="mobil_filter">
                            <option value="" disabled selected>Mobil Filter</option>
                            <option <?php echo $statm_1; ?> value="1">1</option>
                            <option <?php echo $statm_2; ?> value="2">2</option>
                            <option <?php echo $statm_3; ?> value="0">0</option>
                        </select><br>
                    </div>

                    <div>
                        <?php
                        $statd=$stks->diesel_filter;
                        $statd_1 = ($statd == 'Yes') ? 'selected' : '' ;
                        $statd_2 = ($statd == 'No') ? 'selected' : '' ;

                        ?>
                            <p class="text-muted">Diesel Filter</p>
                        <select class="browser-default custom-select" name="diesel_filter">
                            <option value="" disabled selected>Diesel Filter</option>
                            <option <?php echo $statd_1; ?> value="Yes">Yes</option>
                            <option <?php echo $statd_2; ?> value="No">No</option>
                        </select><br>
                    </div>


                    <div>
                        <?php
                        $stat3=$stks->hydrolic_filter;
                        $stat3_1 = ($stat3 == 'Yes') ? 'selected' : '' ;
                        $stat3_2 = ($stat3 == 'No') ? 'selected' : '' ;

                        ?>
                            <p class="text-muted">Hydrolic Filter</p>
                        <select class="browser-default custom-select" name="hydrolic_filter">
                            <option value="" disabled selected>Hydrolic Filter</option>
                            <option <?php echo $stat3_1; ?> value="Yes">Yes</option>
                            <option <?php echo $stat3_2; ?> value="No">No</option>
                        </select><br>
                    </div>
                    <?php
                    $stat4=$stks->air_filter;
                    $stat4_1 = ($stat4 == 'Yes') ? 'selected' : '' ;
                    $stat4_2 = ($stat4 == 'No') ? 'selected' : '' ;

                    ?>
                    <p class="text-muted">Air Filter</p>
                    <select class="browser-default custom-select" name="air_filter">
                        <option value="" disabled selected>Air Filter</option>
                        <option  <?php echo $stat4_1; ?> value="Yes">Yes</option>
                        <option   <?php echo $stat4_2; ?> value="No">No</option>
                    </select><br>

                    <div>
                        <?php
                        $statpf=$stks->pilot_filter;
                        $statpf_1 = ($statpf == 'Yes') ? 'selected' : '' ;
                        $statpf_2 = ($statpf == 'No') ? 'selected' : '' ;

                        ?>
                            <p class="text-muted">Pilot Filter</p>
                        <select class="browser-default custom-select" name="pilot_filter">
                            <option value="" disabled selected>Pilot Filter</option>
                            <option <?php echo $statpf_1; ?> value="Yes">Yes</option>
                            <option <?php echo $statpf_2; ?> value="No">No</option>
                        </select><br>
                    </div>

                    <?php
                    $stat6=$stks->transmission_filter;
                    $stat6_1 = ($stat6 == 'Yes') ? 'selected' : '' ;
                    $stat6_2 = ($stat6 == 'No') ? 'selected' : '' ;

                    ?>
                    <p class="text-muted">Transmission Filter</p>
                    <select class="browser-default custom-select" name="transmission_filter">
                        <option value="" disabled selected>Transmission Filter</option>
                        <option <?php echo $stat6_1; ?> value="Yes">Yes</option>
                        <option <?php echo $stat6_2; ?>value="No">No</option>
                    </select><br>
                    <?php
                    $stat7=$stks->water_safety;
                    $stat7_1 = ($stat7 == 'Yes') ? 'selected' : '' ;
                    $stat7_2 = ($stat7 == 'No') ? 'selected' : '' ;

                    ?>

                    <p class="text-muted">Water Safety</p>
                    <select class="browser-default custom-select" name="water_safety">
                        <option value="" disabled selected>Water Safety</option>
                        <option <?php echo $stat7_1; ?> value="Yes">Yes</option>
                        <option <?php echo $stat7_2; ?> value="No">No</option>
                    </select><br>
                    <?php
                    $stat8=$stks->breather;
                    $stat8_1 = ($stat8 == 'Yes') ? 'selected' : '' ;
                    $stat8_2 = ($stat8 == 'No') ? 'selected' : '' ;

                    ?>
                    <p class="text-muted">Breather</p>
                    <select class="browser-default custom-select" name="breather">
                        <option value="" disabled selected>Breather</option>
                        <option <?php echo $stat8_1; ?> value="Yes">Yes</option>
                        <option <?php echo $stat8_2; ?> value="No">No</option>
                    </select><br>





                    <div>
                        <label for="tyres" class="grey-text">Tyres</label>
                        <input value="{{$stks->tyres }}"    type="number" name="tyres" id="tyres" class="form-control">
                    </div> <br>

                    <label for="tubes" class="grey-text">Tubes</label>
                    <input value="{{$stks->tubes }}"    type="number" name="tubes" id="tubes" class="form-control">

                    <br>
                    <div>
                        <?php
                        $statpa=$stks->spare_parts;
                        $statpa_1 = ($statpa == 'Yes') ? 'selected' : '' ;
                        $statpa_2 = ($statpa == 'No') ? 'selected' : '' ;

                        ?>
                            <p class="text-muted">Spare Parts</p>
                        <select class="browser-default custom-select" name="spare_parts">
                            <option value="" disabled selected>Spare Parts</option>
                            <option <?php echo $statpa_1; ?> value="Yes">Yes</option>
                            <option <?php echo $statpa_2; ?> value="No">No</option>
                        </select><br>
                    </div>

                    <div>
                        <?php
                        $stat_engine_repair =$stks->engine_repair;
                        $stater_1 = ($stat_engine_repair == 'No') ? 'selected' : '' ;
                        $stater_2 = ($stat_engine_repair == 'Full') ? 'selected' : '' ;
                        $stater_3 = ($stat_engine_repair == 'Half') ? 'selected' : '' ;

                        ?>
                            <p class="text-muted">Engine Repair</p>
                        <select class="browser-default custom-select" name="engine_repair">
                            <option value="" disabled selected>Engine Repair</option>
                            <option <?php echo $stater_1; ?> value="No">No</option>
                            <option <?php echo $stater_2; ?> value="Full">Full</option>
                            <option <?php echo $stater_3; ?> value="Half">Half</option>
                        </select><br>
                    </div>

                    <div>
                        <label for="total_cost" class="grey-text">Total Cost</label>
                        <input value="{{$stks->total_cost }}"    type="number" name="total_cost" id="total_cost" class="form-control">
                    </div> <br>



                    <div class="md-form">
                        <textarea type="text" id="remarks" class="md-textarea form-control" rows="5" name="remarks" >{{$stks->remarks}}</textarea>
                        <label for="remarks">Remarks</label>
                    </div> <br>


                </div> <br>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-unique">Update Vehicle Information<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>

    </form>

@stop

