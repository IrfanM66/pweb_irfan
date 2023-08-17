@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Darah Masuk</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sum_blood_e }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-sign-in-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total darah diambil</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sum_blood_t }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $summary }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-bar total-icon fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Rincian darah --}}
        <hr>
        <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $A_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">A+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $A_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">A-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $B_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">B+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $B_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">B-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $O_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">O+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $O_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">O-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $AB_plus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">AB+</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sisa darah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $AB_neg }}</div>
                            </div>
                            <div class="col-auto">
                                <i class=" fa-2x text-gray-300">AB-</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pendapatan end -->
    </div>
@endsection
