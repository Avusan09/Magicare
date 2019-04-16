@extends('admin.layout.master')
@section('dashboard','Dashboard')
@section('title','|Home')
@section('content')

    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">directions_car</i>
                    </div>
                    <p class="card-category">Vehicles</p>
                    <h3 class="card-title">
                        {{$vehicles}}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats float-right">
                        <i class="material-icons">watch_later</i>
                        <a href="/admin/vehicle" class="white-text ">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Tax Information Count </p>
                    <h3 class="card-title">{{$taxes}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats float-right">
                        <i class="material-icons">watch_later</i>
                        <a href="/admin/tax" class="white-text ">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Inventory Count</p>
                    <h3 class="card-title">{{$inventoryCount}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats float-right">
                        <i class="material-icons">watch_later</i>
                        <a href="/admin/inventory" class="white-text ">View All</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-danger">
                    <h4 class="card-title">Vehicle Expiry Notifications </h4>
                    <p class="card-category">Only 30 days left to expire. <i class="material-icons">watch_later</i>
                        <a href="/admin/vehicle" class="white-text ">View All</a></p>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                        <th>Vehicle Prefix</th>
                        <th>Vehicle Number</th>
                        <th>Servicing Date</th>
                        <th>Expiry Date</th>
                        </thead>
                        <tbody>
                        @if(count($vehiclesArray) > 0 )
                            @foreach($vehiclesArray as $sks)
                                <tr>
                                    <td>{{$sks->vehical_prefix}}</td>
                                    <td>{{$sks->vehical_number}}</td>
                                    <td>{{$sks->servicing_date}}</td>
                                    <td>{{$sks->expiry_date}}</td>
                                </tr>
                            @endforeach
                            @else
                        <tr>
                            <td colspan="4" class="text-center">No vehicles are about to expire.</td>
                        </tr>
                            @endif
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-tabs card-header-warning">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title"></span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#profile" data-toggle="tab">
                                        <i class="material-icons">commute</i> Road Tax
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                        <i class="material-icons">event</i>  Renewal Tax
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                        <i class="material-icons">gavel</i>
                                        Road Permit Tax
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>Vehicle Prefix</th>
                                <th>Vehicle Number</th>
                                <th>RT Renewed Date</th>
                                <th>RT Expiry Date</th>
                                </thead>
                                <tbody>
                                @if(count($rtArray) > 0 )
                                    @foreach($rtArray as $sks)
                                        <tr>
                                            <td>{{$sks->vehicle_prefix}}</td>
                                            <td>{{$sks->vehicle_prefix}}</td>
                                            <td>{{$sks->rt_date}}</td>
                                            <td>{{$sks->rt_expiry_date}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No Road Tax is about to Expire.</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                        <div class="tab-pane" id="messages">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>Vehicle Prefix</th>
                                <th>Vehicle Number</th>
                                <th>RET Renewed Date</th>
                                <th>RET Expiry Date</th>
                                </thead>
                                <tbody>
                                @if(count($retArray) > 0 )
                                    @foreach($retArray as $sks)
                                        <tr>
                                            <td>{{$sks->vehicle_prefix}}</td>
                                            <td>{{$sks->vehicle_prefix}}</td>
                                            <td>{{$sks->ret_date}}</td>
                                            <td>{{$sks->ret_expiry_date}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No Renewal Tax Permit is about to Expire.</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                        <div class="tab-pane" id="settings">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>Vehicle Prefix</th>
                                <th>Vehicle Number</th>
                                <th>RP Renewed Date</th>
                                <th>RP Expiry Date</th>
                                </thead>
                                <tbody>
                                @if(count($rpArray) > 0 )
                                    @foreach($rpArray as $sks)
                                        <tr>
                                            <td>{{$sks->vehicle_prefix}}</td>
                                            <td>{{$sks->vehicle_prefix}}</td>
                                            <td>{{$sks->rp_date}}</td>
                                            <td>{{$sks->rp_expiry_date}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No Road Permit is about to Expire.</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop