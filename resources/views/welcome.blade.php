@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in in the front-end!

                            <br>

                        Vehicals Information : <a href="vehicals">Vehicals</a>
                        
                        <h5>To go to admin's dashboard : <a href="/admin/">Admin</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
