@extends('admin.layout.master')
@section('dashboard','Stockist Edit')
@section('title','| Stockist Edit')
@section('content')

    <div class="alert">
        <a href="/admin/stockist">

            <p>View all stockists </p>
        </a>
    </div>
    <form action="/admin/stockist/{{$stks->id}}" method="POST">
        {{csrf_field()}}

        <div class="modal-dialog" role="document">


            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"><strong><em>{{$stks->customer_name}}</em></strong></h4>

                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="form34"  value="{{$stks->product_name}}" name="product_name" class="form-control validate">

                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="form29" value="{{$stks->customer_name}}" name="customer_name" class="form-control validate">

                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number" id="form32" value="{{$stks->quantity_sold}}" name="quantity_sold" class="form-control validate">

                    </div>

                    {{--<div class="md-form">--}}
                    {{--<i class="fa fa-pencil prefix grey-text"></i>--}}
                    {{--<textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>--}}
                    {{--<label data-error="wrong" data-success="right" for="form8">Your message</label>--}}
                    {{--</div>--}}

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-unique">Update Stockists<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>

    </form>


@stop

