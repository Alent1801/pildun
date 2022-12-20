@extends('layouts.master')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-primary">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">{{ $user }}
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom">
                                        </use>
                                    </svg>
                                </div>
                                <div>Data Users</div>
                            </div>

                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>

                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-warning">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">{{ $pildun }}
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top">
                                        </use>
                                    </svg>
                                </div>
                                <div>Data Piala Dunia</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button"
                                    data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Action</a><a class="dropdown-item" href="#">Another
                                        action</a><a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
