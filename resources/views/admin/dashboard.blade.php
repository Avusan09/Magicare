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
                        <a href="vehicle/" class="white-text ">View All</a>
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
                        <a href="tax/" class="white-text ">View All</a>
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
                        <a href="inventory" class="white-text ">View All</a>
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
                        <a href="inventory" class="white-text ">View All</a></p>
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
                                        <i class="material-icons">bug_report</i> Road Tax
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                        <i class="material-icons">code</i> Road Permit Tax
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                        <i class="material-icons">cloud</i> Renewal Tax
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

                        </div>
                        <div class="tab-pane" id="messages">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a
                                        ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="settings">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a
                                        ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove"
                                                class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop